@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.userInfo.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.user-infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.id') }}
                        </th>
                        <td>
                            {{ $userInfo->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.logo') }}
                        </th>
                        <td>
                            @if($userInfo->logo)
                                <a href="{{ $userInfo->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $userInfo->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.rfc') }}
                        </th>
                        <td>
                            {{ $userInfo->rfc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.legal_name') }}
                        </th>
                        <td>
                            {{ $userInfo->legal_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.address_1') }}
                        </th>
                        <td>
                            {{ $userInfo->address_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.addres_2') }}
                        </th>
                        <td>
                            {{ $userInfo->addres_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.state') }}
                        </th>
                        <td>
                            {{ $userInfo->state->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.municipality') }}
                        </th>
                        <td>
                            {{ $userInfo->municipality->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $userInfo->postal_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.country') }}
                        </th>
                        <td>
                            {{ $userInfo->country->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.certificate') }}
                        </th>
                        <td>
                            @if($userInfo->certificate)
                                <a href="{{ $userInfo->certificate->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.key_file') }}
                        </th>
                        <td>
                            @if($userInfo->key_file)
                                <a href="{{ $userInfo->key_file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.password') }}
                        </th>
                        <td>
                            {{ $userInfo->password }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.user-infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection