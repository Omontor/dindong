<?php

namespace App\Http\Requests;

use App\Models\RelatedVoucher;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRelatedVoucherRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('related_voucher_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'code' => [
                'string',
                'required',
            ],
        ];
    }
}
