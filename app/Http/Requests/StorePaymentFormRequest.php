<?php

namespace App\Http\Requests;

use App\Models\PaymentForm;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePaymentFormRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('payment_form_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'code' => [
                'string',
                'required',
            ],
        ];
    }
}
