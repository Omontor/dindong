<?php

namespace App\Http\Requests;

use App\Models\Quote;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreQuoteRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('quote_create');
    }

    public function rules()
    {
        return [
            'client_id' => [
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
            'conditions' => [
                'required',
            ],
            'expiracy' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'tax_id' => [
                'required',
                'integer',
            ],
            'total' => [
                'string',
                'required',
            ],
        ];
    }
}
