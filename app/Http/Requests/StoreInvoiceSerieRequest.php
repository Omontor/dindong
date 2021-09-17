<?php

namespace App\Http\Requests;

use App\Models\InvoiceSerie;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInvoiceSerieRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('invoice_serie_create');
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
