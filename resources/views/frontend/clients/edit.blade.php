@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.client.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.clients.update", [$client->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="country_id">{{ trans('cruds.client.fields.country') }}</label>
                            <select class="form-control select2" name="country_id" id="country_id" required>
                                @foreach($countries as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('country_id') ? old('country_id') : $client->country->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('country'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('country') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.country_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="rfc">{{ trans('cruds.client.fields.rfc') }}</label>
                            <input class="form-control" type="text" name="rfc" id="rfc" value="{{ old('rfc', $client->rfc) }}" required>
                            @if($errors->has('rfc'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('rfc') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.rfc_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="legal_name">{{ trans('cruds.client.fields.legal_name') }}</label>
                            <input class="form-control" type="text" name="legal_name" id="legal_name" value="{{ old('legal_name', $client->legal_name) }}" required>
                            @if($errors->has('legal_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('legal_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.legal_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="address_1">{{ trans('cruds.client.fields.address_1') }}</label>
                            <input class="form-control" type="text" name="address_1" id="address_1" value="{{ old('address_1', $client->address_1) }}" required>
                            @if($errors->has('address_1'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('address_1') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.address_1_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="address_2">{{ trans('cruds.client.fields.address_2') }}</label>
                            <input class="form-control" type="text" name="address_2" id="address_2" value="{{ old('address_2', $client->address_2) }}">
                            @if($errors->has('address_2'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('address_2') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.address_2_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="zip_code">{{ trans('cruds.client.fields.zip_code') }}</label>
                            <input class="form-control" type="text" name="zip_code" id="zip_code" value="{{ old('zip_code', $client->zip_code) }}" required>
                            @if($errors->has('zip_code'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('zip_code') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.zip_code_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="municipality_id">{{ trans('cruds.client.fields.municipality') }}</label>
                            <select class="form-control select2" name="municipality_id" id="municipality_id" required>
                                @foreach($municipalities as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('municipality_id') ? old('municipality_id') : $client->municipality->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('municipality'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('municipality') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.municipality_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="state_id">{{ trans('cruds.client.fields.state') }}</label>
                            <select class="form-control select2" name="state_id" id="state_id" required>
                                @foreach($states as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('state_id') ? old('state_id') : $client->state->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('state'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('state') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.state_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="email">{{ trans('cruds.client.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $client->email) }}" required>
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="name">{{ trans('cruds.client.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $client->name) }}" required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="last_name">{{ trans('cruds.client.fields.last_name') }}</label>
                            <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name', $client->last_name) }}" required>
                            @if($errors->has('last_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('last_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.last_name_helper') }}</span>
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