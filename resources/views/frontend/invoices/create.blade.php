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
                                        <li class="breadcrumb-item"> <a href="{{route('frontend.invoices.index')}}"> Facturación</a></li>
                                        <li class="breadcrumb-item active">Crear</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Crear factura</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{Session::get('message') }}</p>
@endif

                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="card">

                                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.invoices.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="user_data_id">{{ trans('cruds.invoice.fields.user_data') }}</label>
                            <select class="form-control select2" name="user_data_id" id="user_data_id" required>
                                @foreach($user_datas as $id => $entry)
                                    <option value="{{ $id }}" {{ old('user_data_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('user_data'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user_data') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.user_data_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="name_id">{{ trans('cruds.invoice.fields.name') }}</label>
                            <select class="form-control select2" name="name_id" id="name_id" required>
                                @foreach($names as $id => $entry)
                                    <option value="{{ $id }}" {{ old('name_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="emision">{{ trans('cruds.invoice.fields.emision') }}</label>
                            <input class="form-control datetime" type="text" name="emision" id="emision" value="{{ Carbon\Carbon::now() }}" required readonly="">
                            @if($errors->has('emision'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('emision') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.emision_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="products">{{ trans('cruds.invoice.fields.products') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="products[]" id="products" multiple required>
                                @foreach($products as $id => $product)
                                    <option value="{{ $id }}" {{ in_array($id, old('products', [])) ? 'selected' : '' }}>{{ $product }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('products'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('products') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.products_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="total_letter">{{ trans('cruds.invoice.fields.total_letter') }}</label>
                            <input class="form-control" type="text" name="total_letter" id="total_letter" value="{{ old('total_letter', '') }}" required>
                            @if($errors->has('total_letter'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('total_letter') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.total_letter_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="paid_form_id">{{ trans('cruds.invoice.fields.paid_form') }}</label>
                            <select class="form-control select2" name="paid_form_id" id="paid_form_id" required>
                                @foreach($paid_forms as $id => $entry)
                                    <option value="{{ $id }}" {{ old('paid_form_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('paid_form'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('paid_form') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.paid_form_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="payment_method_id">{{ trans('cruds.invoice.fields.payment_method') }}</label>
                            <select class="form-control select2" name="payment_method_id" id="payment_method_id" required>
                                @foreach($payment_methods as $id => $entry)
                                    <option value="{{ $id }}" {{ old('payment_method_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('payment_method'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('payment_method') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.payment_method_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="cfdi_use_id">{{ trans('cruds.invoice.fields.cfdi_use') }}</label>
                            <select class="form-control select2" name="cfdi_use_id" id="cfdi_use_id" required>
                                @foreach($cfdi_uses as $id => $entry)
                                    <option value="{{ $id }}" {{ old('cfdi_use_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('cfdi_use'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cfdi_use') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.cfdi_use_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="currency_id">{{ trans('cruds.invoice.fields.currency') }}</label>
                            <select class="form-control select2" name="currency_id" id="currency_id" required>
                                @foreach($currencies as $id => $entry)
                                    <option value="{{ $id }}" {{ old('currency_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('currency'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('currency') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.currency_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="taxes_id">{{ trans('cruds.invoice.fields.taxes') }}</label>
                            <select class="form-control select2" name="taxes_id" id="taxes_id" required>
                                @foreach($taxes as $id => $entry)
                                    <option value="{{ $id }}" {{ old('taxes_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('taxes'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('taxes') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.taxes_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="type_voucher_id">{{ trans('cruds.invoice.fields.type_voucher') }}</label>
                            <select class="form-control select2" name="type_voucher_id" id="type_voucher_id" required>
                                @foreach($type_vouchers as $id => $entry)
                                    <option value="{{ $id }}" {{ old('type_voucher_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('type_voucher'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('type_voucher') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.invoice.fields.type_voucher_helper') }}</span>
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

    </body>

</html>