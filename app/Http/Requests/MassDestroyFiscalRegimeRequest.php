<?php

namespace App\Http\Requests;

use App\Models\FiscalRegime;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyFiscalRegimeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('fiscal_regime_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:fiscal_regimes,id',
        ];
    }
}
