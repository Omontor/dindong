@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.municipality.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.municipalities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.municipality.fields.id') }}
                        </th>
                        <td>
                            {{ $municipality->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.municipality.fields.state') }}
                        </th>
                        <td>
                            {{ $municipality->state->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.municipality.fields.name') }}
                        </th>
                        <td>
                            {{ $municipality->name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.municipalities.index') }}">
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
            <a class="nav-link" href="#municipality_user_infos" role="tab" data-toggle="tab">
                {{ trans('cruds.userInfo.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="municipality_user_infos">
            @includeIf('admin.municipalities.relationships.municipalityUserInfos', ['userInfos' => $municipality->municipalityUserInfos])
        </div>
    </div>
</div>

@endsection