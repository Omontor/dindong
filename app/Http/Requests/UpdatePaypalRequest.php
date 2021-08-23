<?php

namespace App\Http\Requests;

use App\Models\Paypal;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePaypalRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('paypal_edit');
    }

    public function rules()
    {
        return [
            'api' => [
                'string',
                'nullable',
            ],
        ];
    }
}
