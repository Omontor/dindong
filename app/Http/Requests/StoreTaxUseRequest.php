<?php

namespace App\Http\Requests;

use App\Models\TaxUse;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTaxUseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('tax_use_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:tax_uses',
            ],
            'code' => [
                'string',
                'required',
                'unique:tax_uses',
            ],
        ];
    }
}
