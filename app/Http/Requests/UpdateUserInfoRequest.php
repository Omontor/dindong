<?php

namespace App\Http\Requests;

use App\Models\UserInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUserInfoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_info_edit');
    }

    public function rules()
    {
        return [
            'rfc' => [
                'string',
                'required',
                'unique:user_infos,rfc,' . request()->route('user_info')->id,
            ],
            'legal_name' => [
                'string',
                'required',
                'unique:user_infos,legal_name,' . request()->route('user_info')->id,
            ],
            'address_1' => [
                'required',
            ],
            'addres_2' => [
                'string',
                'nullable',
            ],
            'state_id' => [
                'required',
                'integer',
            ],
            'municipality_id' => [
                'required',
                'integer',
            ],
            'postal_code' => [
                'string',
                'required',
            ],
            'country_id' => [
                'required',
                'integer',
            ],
            'password' => [
                'string',
                'required',
            ],
            'fiscal_regime_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
