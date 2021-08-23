<?php

namespace App\Http\Requests;

use App\Models\UserInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUserInfoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_info_create');
    }

    public function rules()
    {
        return [
            'rfc' => [
                'string',
                'required',
                'unique:user_infos',
            ],
            'legal_name' => [
                'string',
                'required',
                'unique:user_infos',
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
            'certificate' => [
                'required',
            ],
            'key_file' => [
                'required',
            ],
            'password' => [
                'string',
                'required',
            ],
        ];
    }
}
