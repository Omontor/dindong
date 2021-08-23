<?php

namespace App\Http\Requests;

use App\Models\State;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('state_create');
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
                'nullable',
            ],
            'country_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
