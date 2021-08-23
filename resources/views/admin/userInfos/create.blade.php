@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.userInfo.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.user-infos.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="logo">{{ trans('cruds.userInfo.fields.logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                </div>
                @if($errors->has('logo'))
                    <span class="text-danger">{{ $errors->first('logo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.userInfo.fields.logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="rfc">{{ trans('cruds.userInfo.fields.rfc') }}</label>
                <input class="form-control {{ $errors->has('rfc') ? 'is-invalid' : '' }}" type="text" name="rfc" id="rfc" value="{{ old('rfc', '') }}" required>
                @if($errors->has('rfc'))
                    <span class="text-danger">{{ $errors->first('rfc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.userInfo.fields.rfc_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="legal_name">{{ trans('cruds.userInfo.fields.legal_name') }}</label>
                <input class="form-control {{ $errors->has('legal_name') ? 'is-invalid' : '' }}" type="text" name="legal_name" id="legal_name" value="{{ old('legal_name', '') }}" required>
                @if($errors->has('legal_name'))
                    <span class="text-danger">{{ $errors->first('legal_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.userInfo.fields.legal_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address_1">{{ trans('cruds.userInfo.fields.address_1') }}</label>
                <textarea class="form-control {{ $errors->has('address_1') ? 'is-invalid' : '' }}" name="address_1" id="address_1" required>{{ old('address_1') }}</textarea>
                @if($errors->has('address_1'))
                    <span class="text-danger">{{ $errors->first('address_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.userInfo.fields.address_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="addres_2">{{ trans('cruds.userInfo.fields.addres_2') }}</label>
                <input class="form-control {{ $errors->has('addres_2') ? 'is-invalid' : '' }}" type="text" name="addres_2" id="addres_2" value="{{ old('addres_2', '') }}">
                @if($errors->has('addres_2'))
                    <span class="text-danger">{{ $errors->first('addres_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.userInfo.fields.addres_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="state_id">{{ trans('cruds.userInfo.fields.state') }}</label>
                <select class="form-control select2 {{ $errors->has('state') ? 'is-invalid' : '' }}" name="state_id" id="state_id" required>
                    @foreach($states as $id => $entry)
                        <option value="{{ $id }}" {{ old('state_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('state'))
                    <span class="text-danger">{{ $errors->first('state') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.userInfo.fields.state_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="municipality_id">{{ trans('cruds.userInfo.fields.municipality') }}</label>
                <select class="form-control select2 {{ $errors->has('municipality') ? 'is-invalid' : '' }}" name="municipality_id" id="municipality_id" required>
                    @foreach($municipalities as $id => $entry)
                        <option value="{{ $id }}" {{ old('municipality_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('municipality'))
                    <span class="text-danger">{{ $errors->first('municipality') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.userInfo.fields.municipality_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="postal_code">{{ trans('cruds.userInfo.fields.postal_code') }}</label>
                <input class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" type="text" name="postal_code" id="postal_code" value="{{ old('postal_code', '') }}" required>
                @if($errors->has('postal_code'))
                    <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.userInfo.fields.postal_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="country_id">{{ trans('cruds.userInfo.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id" required>
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.userInfo.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="certificate">{{ trans('cruds.userInfo.fields.certificate') }}</label>
                <div class="needsclick dropzone {{ $errors->has('certificate') ? 'is-invalid' : '' }}" id="certificate-dropzone">
                </div>
                @if($errors->has('certificate'))
                    <span class="text-danger">{{ $errors->first('certificate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.userInfo.fields.certificate_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="key_file">{{ trans('cruds.userInfo.fields.key_file') }}</label>
                <div class="needsclick dropzone {{ $errors->has('key_file') ? 'is-invalid' : '' }}" id="key_file-dropzone">
                </div>
                @if($errors->has('key_file'))
                    <span class="text-danger">{{ $errors->first('key_file') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.userInfo.fields.key_file_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="password">{{ trans('cruds.userInfo.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="text" name="password" id="password" value="{{ old('password', '') }}" required>
                @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.userInfo.fields.password_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.user-infos.storeMedia') }}',
    maxFilesize: 4, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 4,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($userInfo) && $userInfo->logo)
      var file = {!! json_encode($userInfo->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    Dropzone.options.certificateDropzone = {
    url: '{{ route('admin.user-infos.storeMedia') }}',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="certificate"]').remove()
      $('form').append('<input type="hidden" name="certificate" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="certificate"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($userInfo) && $userInfo->certificate)
      var file = {!! json_encode($userInfo->certificate) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="certificate" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    Dropzone.options.keyFileDropzone = {
    url: '{{ route('admin.user-infos.storeMedia') }}',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="key_file"]').remove()
      $('form').append('<input type="hidden" name="key_file" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="key_file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($userInfo) && $userInfo->key_file)
      var file = {!! json_encode($userInfo->key_file) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="key_file" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection