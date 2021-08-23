<?php

namespace App\Http\Requests;

use App\Models\Google;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyGoogleRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('google_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:googles,id',
        ];
    }
}
