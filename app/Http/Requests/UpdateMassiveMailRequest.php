<?php

namespace App\Http\Requests;

use App\Models\MassiveMail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMassiveMailRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('massive_mail_edit');
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
