@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.stripe.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.stripes.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="api">{{ trans('cruds.stripe.fields.api') }}</label>
                            <input class="form-control" type="text" name="api" id="api" value="{{ old('api', '') }}" required>
                            @if($errors->has('api'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('api') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.stripe.fields.api_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection