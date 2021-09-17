<?php

namespace App\Http\Requests;

use App\Models\InvoiceSerie;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyInvoiceSerieRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('invoice_serie_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:invoice_series,id',
        ];
    }
}
