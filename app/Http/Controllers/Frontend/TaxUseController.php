<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTaxUseRequest;
use App\Http\Requests\StoreTaxUseRequest;
use App\Http\Requests\UpdateTaxUseRequest;
use App\Models\TaxUse;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TaxUseController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('tax_use_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $taxUses = TaxUse::all();

        return view('frontend.taxUses.index', compact('taxUses'));
    }

    public function create()
    {
        abort_if(Gate::denies('tax_use_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.taxUses.create');
    }

    public function store(StoreTaxUseRequest $request)
    {
        $taxUse = TaxUse::create($request->all());

        return redirect()->route('frontend.tax-uses.index');
    }

    public function edit(TaxUse $taxUse)
    {
        abort_if(Gate::denies('tax_use_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.taxUses.edit', compact('taxUse'));
    }

    public function update(UpdateTaxUseRequest $request, TaxUse $taxUse)
    {
        $taxUse->update($request->all());

        return redirect()->route('frontend.tax-uses.index');
    }

    public function show(TaxUse $taxUse)
    {
        abort_if(Gate::denies('tax_use_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.taxUses.show', compact('taxUse'));
    }

    public function destroy(TaxUse $taxUse)
    {
        abort_if(Gate::denies('tax_use_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $taxUse->delete();

        return back();
    }

    public function massDestroy(MassDestroyTaxUseRequest $request)
    {
        TaxUse::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
