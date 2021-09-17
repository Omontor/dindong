<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyInvoiceSerieRequest;
use App\Http\Requests\StoreInvoiceSerieRequest;
use App\Http\Requests\UpdateInvoiceSerieRequest;
use App\Models\InvoiceSerie;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InvoiceSerieController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('invoice_serie_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invoiceSeries = InvoiceSerie::with(['created_by'])->get();

        return view('frontend.invoiceSeries.index', compact('invoiceSeries'));
    }

    public function create()
    {
        abort_if(Gate::denies('invoice_serie_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.invoiceSeries.create');
    }

    public function store(StoreInvoiceSerieRequest $request)
    {
        $invoiceSerie = InvoiceSerie::create($request->all());

        return redirect()->route('frontend.invoice-series.index');
    }

    public function edit(InvoiceSerie $invoiceSerie)
    {
        abort_if(Gate::denies('invoice_serie_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invoiceSerie->load('created_by');

        return view('frontend.invoiceSeries.edit', compact('invoiceSerie'));
    }

    public function update(UpdateInvoiceSerieRequest $request, InvoiceSerie $invoiceSerie)
    {
        $invoiceSerie->update($request->all());

        return redirect()->route('frontend.invoice-series.index');
    }

    public function show(InvoiceSerie $invoiceSerie)
    {
        abort_if(Gate::denies('invoice_serie_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invoiceSerie->load('created_by');

        return view('frontend.invoiceSeries.show', compact('invoiceSerie'));
    }

    public function destroy(InvoiceSerie $invoiceSerie)
    {
        abort_if(Gate::denies('invoice_serie_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invoiceSerie->delete();

        return back();
    }

    public function massDestroy(MassDestroyInvoiceSerieRequest $request)
    {
        InvoiceSerie::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
