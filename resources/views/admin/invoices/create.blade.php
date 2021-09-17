@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.invoice.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.invoices.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="user_data_id">{{ trans('cruds.invoice.fields.user_data') }}</label>
                <select class="form-control select2 {{ $errors->has('user_data') ? 'is-invalid' : '' }}" name="user_data_id" id="user_data_id" required>
                    @foreach($user_datas as $id => $entry)
                        <option value="{{ $id }}" {{ old('user_data_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user_data'))
                    <span class="text-danger">{{ $errors->first('user_data') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.user_data_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_id">{{ trans('cruds.invoice.fields.name') }}</label>
                <select class="form-control select2 {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name_id" id="name_id">
                    @foreach($names as $id => $entry)
                        <option value="{{ $id }}" {{ old('name_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emision">{{ trans('cruds.invoice.fields.emision') }}</label>
                <input class="form-control datetime {{ $errors->has('emision') ? 'is-invalid' : '' }}" type="text" name="emision" id="emision" value="{{ old('emision') }}">
                @if($errors->has('emision'))
                    <span class="text-danger">{{ $errors->first('emision') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.emision_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="products">{{ trans('cruds.invoice.fields.products') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('products') ? 'is-invalid' : '' }}" name="products[]" id="products" multiple>
                    @foreach($products as $id => $product)
                        <option value="{{ $id }}" {{ in_array($id, old('products', [])) ? 'selected' : '' }}>{{ $product }}</option>
                    @endforeach
                </select>
                @if($errors->has('products'))
                    <span class="text-danger">{{ $errors->first('products') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.products_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="total_letter">{{ trans('cruds.invoice.fields.total_letter') }}</label>
                <input class="form-control {{ $errors->has('total_letter') ? 'is-invalid' : '' }}" type="text" name="total_letter" id="total_letter" value="{{ old('total_letter', '') }}">
                @if($errors->has('total_letter'))
                    <span class="text-danger">{{ $errors->first('total_letter') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.total_letter_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="paid_form_id">{{ trans('cruds.invoice.fields.paid_form') }}</label>
                <select class="form-control select2 {{ $errors->has('paid_form') ? 'is-invalid' : '' }}" name="paid_form_id" id="paid_form_id">
                    @foreach($paid_forms as $id => $entry)
                        <option value="{{ $id }}" {{ old('paid_form_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('paid_form'))
                    <span class="text-danger">{{ $errors->first('paid_form') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.paid_form_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_method_id">{{ trans('cruds.invoice.fields.payment_method') }}</label>
                <select class="form-control select2 {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" name="payment_method_id" id="payment_method_id">
                    @foreach($payment_methods as $id => $entry)
                        <option value="{{ $id }}" {{ old('payment_method_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_method'))
                    <span class="text-danger">{{ $errors->first('payment_method') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.payment_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cfdi_use_id">{{ trans('cruds.invoice.fields.cfdi_use') }}</label>
                <select class="form-control select2 {{ $errors->has('cfdi_use') ? 'is-invalid' : '' }}" name="cfdi_use_id" id="cfdi_use_id">
                    @foreach($cfdi_uses as $id => $entry)
                        <option value="{{ $id }}" {{ old('cfdi_use_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('cfdi_use'))
                    <span class="text-danger">{{ $errors->first('cfdi_use') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.cfdi_use_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="currency_id">{{ trans('cruds.invoice.fields.currency') }}</label>
                <select class="form-control select2 {{ $errors->has('currency') ? 'is-invalid' : '' }}" name="currency_id" id="currency_id">
                    @foreach($currencies as $id => $entry)
                        <option value="{{ $id }}" {{ old('currency_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('currency'))
                    <span class="text-danger">{{ $errors->first('currency') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.currency_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="taxes_id">{{ trans('cruds.invoice.fields.taxes') }}</label>
                <select class="form-control select2 {{ $errors->has('taxes') ? 'is-invalid' : '' }}" name="taxes_id" id="taxes_id">
                    @foreach($taxes as $id => $entry)
                        <option value="{{ $id }}" {{ old('taxes_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('taxes'))
                    <span class="text-danger">{{ $errors->first('taxes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.taxes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type_voucher_id">{{ trans('cruds.invoice.fields.type_voucher') }}</label>
                <select class="form-control select2 {{ $errors->has('type_voucher') ? 'is-invalid' : '' }}" name="type_voucher_id" id="type_voucher_id">
                    @foreach($type_vouchers as $id => $entry)
                        <option value="{{ $id }}" {{ old('type_voucher_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('type_voucher'))
                    <span class="text-danger">{{ $errors->first('type_voucher') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.type_voucher_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="folio">{{ trans('cruds.invoice.fields.folio') }}</label>
                <input class="form-control {{ $errors->has('folio') ? 'is-invalid' : '' }}" type="number" name="folio" id="folio" value="{{ old('folio', '') }}" step="1">
                @if($errors->has('folio'))
                    <span class="text-danger">{{ $errors->first('folio') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.folio_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="serie_id">{{ trans('cruds.invoice.fields.serie') }}</label>
                <select class="form-control select2 {{ $errors->has('serie') ? 'is-invalid' : '' }}" name="serie_id" id="serie_id">
                    @foreach($series as $id => $entry)
                        <option value="{{ $id }}" {{ old('serie_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('serie'))
                    <span class="text-danger">{{ $errors->first('serie') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.serie_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="status">{{ trans('cruds.invoice.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="number" name="status" id="status" value="{{ old('status', '') }}" step="1">
                @if($errors->has('status'))
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.status_helper') }}</span>
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