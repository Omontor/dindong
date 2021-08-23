<?php

namespace App\Http\Requests;

use App\Models\MailChimp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMailChimpRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('mail_chimp_edit');
    }

    public function rules()
    {
        return [
            'api' => [
                'string',
                'required',
                'unique:mail_chimps,api,' . request()->route('mail_chimp')->id,
            ],
        ];
    }
}
