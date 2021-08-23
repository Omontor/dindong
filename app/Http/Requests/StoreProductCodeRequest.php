<?php

namespace App\Http\Requests;

use App\Models\ProductCode;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProductCodeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_code_create');
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
