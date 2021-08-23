<?php

namespace App\Http\Requests;

use App\Models\PaymentForm;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPaymentFormRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('payment_form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:payment_forms,id',
        ];
    }
}
