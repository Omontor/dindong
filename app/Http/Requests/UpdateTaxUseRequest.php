<?php

namespace App\Http\Requests;

use App\Models\TaxUse;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTaxUseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('tax_use_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:tax_uses,name,' . request()->route('tax_use')->id,
            ],
            'code' => [
                'string',
                'required',
                'unique:tax_uses,code,' . request()->route('tax_use')->id,
            ],
        ];
    }
}
