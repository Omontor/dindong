<?php

namespace App\Http\Requests;

use App\Models\InvoiceSerie;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInvoiceSerieRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('invoice_serie_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
