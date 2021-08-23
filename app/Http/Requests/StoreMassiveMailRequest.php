<?php

namespace App\Http\Requests;

use App\Models\MassiveMail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMassiveMailRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('massive_mail_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'content' => [
                'required',
            ],
        ];
    }
}
