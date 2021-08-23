<?php

namespace App\Http\Requests;

use App\Models\FiscalRegime;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFiscalRegimeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('fiscal_regime_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:fiscal_regimes,name,' . request()->route('fiscal_regime')->id,
            ],
            'code' => [
                'string',
                'required',
                'unique:fiscal_regimes,code,' . request()->route('fiscal_regime')->id,
            ],
        ];
    }
}
