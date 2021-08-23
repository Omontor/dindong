<?php

namespace App\Http\Requests;

use App\Models\MailChimp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMailChimpRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('mail_chimp_create');
    }

    public function rules()
    {
        return [
            'api' => [
                'string',
                'required',
                'unique:mail_chimps',
            ],
        ];
    }
}
