<?php

namespace App\Http\Requests;

use App\Models\Google;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreGoogleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('google_create');
    }

    public function rules()
    {
        return [
            'api' => [
                'string',
                'required',
                'unique:googles',
            ],
        ];
    }
}
