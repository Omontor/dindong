<?php

namespace App\Http\Requests;

use App\Models\Invoice;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInvoiceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('invoice_edit');
    }

    public function rules()
    {
        return [
            'name_id' => [
                'required',
                'integer',
            ],
            'products.*' => [
                'integer',
            ],
            'products' => [
                'required',
                'array',
            ],
            'total_letter' => [
                'string',
                'required',
            ],
            'paid_form_id' => [
                'required',
                'integer',
            ],
            'payment_method_id' => [
                'required',
                'integer',
            ],
            'cfdi_use_id' => [
                'required',
                'integer',
            ],
            'currency_id' => [
                'required',
                'integer',
            ],
            'taxes_id' => [
                'required',
                'integer',
            ],
            'type_voucher_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
