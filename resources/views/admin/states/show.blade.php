@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.state.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.states.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.state.fields.id') }}
                        </th>
                        <td>
                            {{ $state->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.state.fields.name') }}
                        </th>
                        <td>
                            {{ $state->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.state.fields.code') }}
                        </th>
                        <td>
                            {{ $state->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.state.fields.country') }}
                        </th>
                        <td>
                            {{ $state->country->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.states.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#state_municipalities" role="tab" data-toggle="tab">
                {{ trans('cruds.municipality.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#state_user_infos" role="tab" data-toggle="tab">
                {{ trans('cruds.userInfo.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="state_municipalities">
            @includeIf('admin.states.relationships.stateMunicipalities', ['municipalities' => $state->stateMunicipalities])
        </div>
        <div class="tab-pane" role="tabpanel" id="state_user_infos">
            @includeIf('admin.states.relationships.stateUserInfos', ['userInfos' => $state->stateUserInfos])
        </div>
    </div>
</div>

@endsection