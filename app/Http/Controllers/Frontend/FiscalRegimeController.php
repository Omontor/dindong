<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFiscalRegimeRequest;
use App\Http\Requests\StoreFiscalRegimeRequest;
use App\Http\Requests\UpdateFiscalRegimeRequest;
use App\Models\FiscalRegime;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FiscalRegimeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('fiscal_regime_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fiscalRegimes = FiscalRegime::all();

        return view('frontend.fiscalRegimes.index', compact('fiscalRegimes'));
    }

    public function create()
    {
        abort_if(Gate::denies('fiscal_regime_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.fiscalRegimes.create');
    }

    public function store(StoreFiscalRegimeRequest $request)
    {
        $fiscalRegime = FiscalRegime::create($request->all());

        return redirect()->route('frontend.fiscal-regimes.index');
    }

    public function edit(FiscalRegime $fiscalRegime)
    {
        abort_if(Gate::denies('fiscal_regime_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.fiscalRegimes.edit', compact('fiscalRegime'));
    }

    public function update(UpdateFiscalRegimeRequest $request, FiscalRegime $fiscalRegime)
    {
        $fiscalRegime->update($request->all());

        return redirect()->route('frontend.fiscal-regimes.index');
    }

    public function show(FiscalRegime $fiscalRegime)
    {
        abort_if(Gate::denies('fiscal_regime_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.fiscalRegimes.show', compact('fiscalRegime'));
    }

    public function destroy(FiscalRegime $fiscalRegime)
    {
        abort_if(Gate::denies('fiscal_regime_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fiscalRegime->delete();

        return back();
    }

    public function massDestroy(MassDestroyFiscalRegimeRequest $request)
    {
        FiscalRegime::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
