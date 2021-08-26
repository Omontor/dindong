<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Http\Resources\Admin\InvoiceResource;
use App\Models\Invoice;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InvoiceApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('invoice_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InvoiceResource(Invoice::with(['user_data', 'name', 'products', 'paid_form', 'payment_method', 'cfdi_use', 'currency', 'taxes', 'type_voucher', 'created_by'])->get());
    }

    public function store(StoreInvoiceRequest $request)
    {
        $invoice = Invoice::create($request->all());
        $invoice->products()->sync($request->input('products', []));

        return (new InvoiceResource($invoice))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Invoice $invoice)
    {
        abort_if(Gate::denies('invoice_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InvoiceResource($invoice->load(['user_data', 'name', 'products', 'paid_form', 'payment_method', 'cfdi_use', 'currency', 'taxes', 'type_voucher', 'created_by']));
    }

    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        $invoice->update($request->all());
        $invoice->products()->sync($request->input('products', []));

        return (new InvoiceResource($invoice))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Invoice $invoice)
    {
        abort_if(Gate::denies('invoice_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invoice->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}