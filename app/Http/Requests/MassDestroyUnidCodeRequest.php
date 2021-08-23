<?php

namespace App\Http\Requests;

use App\Models\UnidCode;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyUnidCodeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('unid_code_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:unid_codes,id',
        ];
    }
}
