@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.mailChimp.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.mail-chimps.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="api">{{ trans('cruds.mailChimp.fields.api') }}</label>
                <input class="form-control {{ $errors->has('api') ? 'is-invalid' : '' }}" type="text" name="api" id="api" value="{{ old('api', '') }}" required>
                @if($errors->has('api'))
                    <span class="text-danger">{{ $errors->first('api') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.mailChimp.fields.api_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection