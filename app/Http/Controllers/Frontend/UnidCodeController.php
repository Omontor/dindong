<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUnidCodeRequest;
use App\Http\Requests\StoreUnidCodeRequest;
use App\Http\Requests\UpdateUnidCodeRequest;
use App\Models\UnidCode;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UnidCodeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('unid_code_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $unidCodes = UnidCode::all();

        return view('frontend.unidCodes.index', compact('unidCodes'));
    }

    public function create()
    {
        abort_if(Gate::denies('unid_code_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.unidCodes.create');
    }

    public function store(StoreUnidCodeRequest $request)
    {
        $unidCode = UnidCode::create($request->all());

        return redirect()->route('frontend.unid-codes.index');
    }

    public function edit(UnidCode $unidCode)
    {
        abort_if(Gate::denies('unid_code_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.unidCodes.edit', compact('unidCode'));
    }

    public function update(UpdateUnidCodeRequest $request, UnidCode $unidCode)
    {
        $unidCode->update($request->all());

        return redirect()->route('frontend.unid-codes.index');
    }

    public function show(UnidCode $unidCode)
    {
        abort_if(Gate::denies('unid_code_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.unidCodes.show', compact('unidCode'));
    }

    public function destroy(UnidCode $unidCode)
    {
        abort_if(Gate::denies('unid_code_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $unidCode->delete();

        return back();
    }

    public function massDestroy(MassDestroyUnidCodeRequest $request)
    {
        UnidCode::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
