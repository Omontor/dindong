<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyInvoiceRequest;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Client;
use App\Models\Currency;
use App\Models\Invoice;
use App\Models\InvoiceSerie;
use App\Models\PaymentForm;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\RelatedVoucher;
use App\Models\Tax;
use App\Models\TaxUse;
use App\Models\User;
use App\Models\UserInfo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class InvoiceController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('invoice_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');



        if(Auth::user()->userinfo->count() == 0){
            return redirect()->back();
        }
        else{

        $invoices = Invoice::with(['user_data', 'name', 'products', 'paid_form', 'payment_method', 'cfdi_use', 'currency', 'taxes', 'type_voucher', 'serie', 'created_by'])->get();

        $user_infos = UserInfo::get();

        $clients = Client::get();

        $products = Product::get();

        $payment_forms = PaymentForm::get();

        $payment_methods = PaymentMethod::get();

        $tax_uses = TaxUse::get();

        $currencies = Currency::get();

        $taxes = Tax::get();

        $related_vouchers = RelatedVoucher::get();

        $invoice_series = InvoiceSerie::get();

        $users = User::get();

        return view('frontend.invoices.index', compact('invoices', 'user_infos', 'clients', 'products', 'payment_forms', 'payment_methods', 'tax_uses', 'currencies', 'taxes', 'related_vouchers', 'invoice_series', 'users'));
    }
    }

    public function create()
    {
        abort_if(Gate::denies('invoice_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if(Auth::user()->userinfo->count() == 0){
            return redirect()->back();
        }
        else{
        $user_datas = UserInfo::pluck('legal_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $names = Client::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $products = Product::pluck('name', 'id');

        $paid_forms = PaymentForm::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $payment_methods = PaymentMethod::pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cfdi_uses = TaxUse::pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $currencies = Currency::pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $taxes = Tax::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $type_vouchers = RelatedVoucher::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $series = InvoiceSerie::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.invoices.create', compact('user_datas', 'names', 'products', 'paid_forms', 'payment_methods', 'cfdi_uses', 'currencies', 'taxes', 'type_vouchers', 'series'));
    }
    }

    public function store(StoreInvoiceRequest $request)
    {
        $invoice = Invoice::create($request->all());
        $invoice->products()->sync($request->input('products', []));

        return redirect()->route('frontend.invoices.index');
    }

    public function edit(Invoice $invoice)
    {
        abort_if(Gate::denies('invoice_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $names = Client::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $products = Product::pluck('name', 'id');

        $paid_forms = PaymentForm::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $payment_methods = PaymentMethod::pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cfdi_uses = TaxUse::pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $currencies = Currency::pluck('code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $taxes = Tax::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $type_vouchers = RelatedVoucher::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $series = InvoiceSerie::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $invoice->load('user_data', 'name', 'products', 'paid_form', 'payment_method', 'cfdi_use', 'currency', 'taxes', 'type_voucher', 'serie', 'created_by');

        return view('frontend.invoices.edit', compact('names', 'products', 'paid_forms', 'payment_methods', 'cfdi_uses', 'currencies', 'taxes', 'type_vouchers', 'series', 'invoice'));
    }

    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        $invoice->update($request->all());
        $invoice->products()->sync($request->input('products', []));

        return redirect()->route('frontend.invoices.index');
    }

    public function show(Invoice $invoice)
    {
        abort_if(Gate::denies('invoice_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invoice->load('user_data', 'name', 'products', 'paid_form', 'payment_method', 'cfdi_use', 'currency', 'taxes', 'type_voucher', 'serie', 'created_by');

        return view('frontend.invoices.show', compact('invoice'));
    }

    public function destroy(Invoice $invoice)
    {
        abort_if(Gate::denies('invoice_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invoice->delete();

        return back();
    }

    public function massDestroy(MassDestroyInvoiceRequest $request)
    {
        Invoice::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
