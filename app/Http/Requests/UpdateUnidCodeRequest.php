<?php

namespace App\Http\Requests;

use App\Models\UnidCode;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUnidCodeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('unid_code_edit');
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
