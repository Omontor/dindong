<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPaymentFormRequest;
use App\Http\Requests\StorePaymentFormRequest;
use App\Http\Requests\UpdatePaymentFormRequest;
use App\Models\PaymentForm;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaymentFormController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('payment_form_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentForms = PaymentForm::all();

        return view('admin.paymentForms.index', compact('paymentForms'));
    }

    public function create()
    {
        abort_if(Gate::denies('payment_form_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paymentForms.create');
    }

    public function store(StorePaymentFormRequest $request)
    {
        $paymentForm = PaymentForm::create($request->all());

        return redirect()->route('admin.payment-forms.index');
    }

    public function edit(PaymentForm $paymentForm)
    {
        abort_if(Gate::denies('payment_form_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paymentForms.edit', compact('paymentForm'));
    }

    public function update(UpdatePaymentFormRequest $request, PaymentForm $paymentForm)
    {
        $paymentForm->update($request->all());

        return redirect()->route('admin.payment-forms.index');
    }

    public function show(PaymentForm $paymentForm)
    {
        abort_if(Gate::denies('payment_form_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paymentForms.show', compact('paymentForm'));
    }

    public function destroy(PaymentForm $paymentForm)
    {
        abort_if(Gate::denies('payment_form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentForm->delete();

        return back();
    }

    public function massDestroy(MassDestroyPaymentFormRequest $request)
    {
        PaymentForm::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
