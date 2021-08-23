<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFacturamaRequest;
use App\Http\Requests\StoreFacturamaRequest;
use App\Http\Requests\UpdateFacturamaRequest;
use App\Models\Facturama;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FacturamaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('facturama_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $facturamas = Facturama::all();

        return view('admin.facturamas.index', compact('facturamas'));
    }

    public function create()
    {
        abort_if(Gate::denies('facturama_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.facturamas.create');
    }

    public function store(StoreFacturamaRequest $request)
    {
        $facturama = Facturama::create($request->all());

        return redirect()->route('admin.facturamas.index');
    }

    public function edit(Facturama $facturama)
    {
        abort_if(Gate::denies('facturama_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.facturamas.edit', compact('facturama'));
    }

    public function update(UpdateFacturamaRequest $request, Facturama $facturama)
    {
        $facturama->update($request->all());

        return redirect()->route('admin.facturamas.index');
    }

    public function show(Facturama $facturama)
    {
        abort_if(Gate::denies('facturama_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.facturamas.show', compact('facturama'));
    }

    public function destroy(Facturama $facturama)
    {
        abort_if(Gate::denies('facturama_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $facturama->delete();

        return back();
    }

    public function massDestroy(MassDestroyFacturamaRequest $request)
    {
        Facturama::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
