<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

    <body>
        @include('partials.topbar')
        @include('partials.sidebar')

        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">Din Dong</li>
                                        <li class="breadcrumb-item"> <a href="/home">Inicio</a></li>
                                        <li class="breadcrumb-item active">Datos de facturación</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Datos de facturación</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="card">

                                <div class="card-body">
                            
                <form method="POST" action="{{ route("frontend.user-infos.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="logo">{{ trans('cruds.userInfo.fields.logo') }}</label>
                            <div class="needsclick dropzone" id="logo-dropzone">
                            </div>
                            @if($errors->has('logo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('logo') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.userInfo.fields.logo_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="rfc">{{ trans('cruds.userInfo.fields.rfc') }}</label>
                            <input class="form-control" type="text" name="rfc" id="rfc" value="{{ old('rfc', '') }}" required>
                            @if($errors->has('rfc'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('rfc') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.userInfo.fields.rfc_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="legal_name">{{ trans('cruds.userInfo.fields.legal_name') }}</label>
                            <input class="form-control" type="text" name="legal_name" id="legal_name" value="{{ old('legal_name', '') }}" required>
                            @if($errors->has('legal_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('legal_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.userInfo.fields.legal_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="address_1">{{ trans('cruds.userInfo.fields.address_1') }}</label>
                            <textarea class="form-control" name="address_1" id="address_1" required>{{ old('address_1') }}</textarea>
                            @if($errors->has('address_1'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('address_1') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.userInfo.fields.address_1_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="addres_2">{{ trans('cruds.userInfo.fields.addres_2') }}</label>
                            <input class="form-control" type="text" name="addres_2" id="addres_2" value="{{ old('addres_2', '') }}">
                            @if($errors->has('addres_2'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('addres_2') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.userInfo.fields.addres_2_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="state_id">{{ trans('cruds.userInfo.fields.state') }}</label>
                            <select class="form-control select2" name="state_id" id="state_id" required>
                                @foreach($states as $id => $entry)
                                    <option value="{{ $id }}" {{ old('state_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('state'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('state') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.userInfo.fields.state_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="municipality_id">{{ trans('cruds.userInfo.fields.municipality') }}</label>
                            <select class="form-control select2" name="municipality_id" id="municipality_id" required>
                                @foreach($municipalities as $id => $entry)
                                    <option value="{{ $id }}" {{ old('municipality_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('municipality'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('municipality') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.userInfo.fields.municipality_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="postal_code">{{ trans('cruds.userInfo.fields.postal_code') }}</label>
                            <input class="form-control" type="text" name="postal_code" id="postal_code" value="{{ old('postal_code', '') }}" required>
                            @if($errors->has('postal_code'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('postal_code') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.userInfo.fields.postal_code_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="country_id">{{ trans('cruds.userInfo.fields.country') }}</label>
                            <select class="form-control select2" name="country_id" id="country_id" required>
                                @foreach($countries as $id => $entry)
                                    <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('country'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('country') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.userInfo.fields.country_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="certificate">{{ trans('cruds.userInfo.fields.certificate') }}</label>
                            <div class="needsclick dropzone" id="certificate-dropzone">
                            </div>
                            @if($errors->has('certificate'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('certificate') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.userInfo.fields.certificate_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="key_file">{{ trans('cruds.userInfo.fields.key_file') }}</label>
                            <div class="needsclick dropzone" id="key_file-dropzone">
                            </div>
                            @if($errors->has('key_file'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('key_file') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.userInfo.fields.key_file_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="password">{{ trans('cruds.userInfo.fields.password') }}</label>
                            <input class="form-control" type="text" name="password" id="password" value="{{ old('password', '') }}" required>
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.userInfo.fields.password_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                </form>


                                </div><!--end card-body-->
                            </div><!--end card-->
                            
                        </div><!-- end col-->
                    </div><!--end row-->


                </div><!-- container -->

              @include('layouts.footer')
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
     
        @include('layouts.scripts')

<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('frontend.user-infos.storeMedia') }}',
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
    url: '{{ route('frontend.user-infos.storeMedia') }}',
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
    url: '{{ route('frontend.user-infos.storeMedia') }}',
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
  
    </body>

</html>