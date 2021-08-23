<?php

namespace App\Http\Requests;

use App\Models\MassiveMail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMassiveMailRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('massive_mail_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:massive_mails,id',
        ];
    }
}
