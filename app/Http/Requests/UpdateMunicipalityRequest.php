<?php

namespace App\Http\Requests;

use App\Models\Municipality;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMunicipalityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('municipality_edit');
    }

    public function rules()
    {
        return [
            'state_id' => [
                'required',
                'integer',
            ],
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
