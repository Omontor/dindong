<?php

namespace App\Http\Requests;

use App\Models\FiscalRegime;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFiscalRegimeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('fiscal_regime_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:fiscal_regimes',
            ],
            'code' => [
                'string',
                'required',
                'unique:fiscal_regimes',
            ],
        ];
    }
}
