<?php

namespace App\Http\Requests;

use App\Models\Facturama;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFacturamaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('facturama_create');
    }

    public function rules()
    {
        return [
            'api' => [
                'string',
                'required',
                'unique:facturamas',
            ],
        ];
    }
}
