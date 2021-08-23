@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.invoice.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.invoices.update", [$invoice->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name_id">{{ trans('cruds.invoice.fields.name') }}</label>
                <select class="form-control select2 {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name_id" id="name_id" required>
                    @foreach($names as $id => $entry)
                        <option value="{{ $id }}" {{ (old('name_id') ? old('name_id') : $invoice->name->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="products">{{ trans('cruds.invoice.fields.products') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('products') ? 'is-invalid' : '' }}" name="products[]" id="products" multiple required>
                    @foreach($products as $id => $product)
                        <option value="{{ $id }}" {{ (in_array($id, old('products', [])) || $invoice->products->contains($id)) ? 'selected' : '' }}>{{ $product }}</option>
                    @endforeach
                </select>
                @if($errors->has('products'))
                    <span class="text-danger">{{ $errors->first('products') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.products_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="total_letter">{{ trans('cruds.invoice.fields.total_letter') }}</label>
                <input class="form-control {{ $errors->has('total_letter') ? 'is-invalid' : '' }}" type="text" name="total_letter" id="total_letter" value="{{ old('total_letter', $invoice->total_letter) }}" required>
                @if($errors->has('total_letter'))
                    <span class="text-danger">{{ $errors->first('total_letter') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.total_letter_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="paid_form_id">{{ trans('cruds.invoice.fields.paid_form') }}</label>
                <select class="form-control select2 {{ $errors->has('paid_form') ? 'is-invalid' : '' }}" name="paid_form_id" id="paid_form_id" required>
                    @foreach($paid_forms as $id => $entry)
                        <option value="{{ $id }}" {{ (old('paid_form_id') ? old('paid_form_id') : $invoice->paid_form->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('paid_form'))
                    <span class="text-danger">{{ $errors->first('paid_form') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.paid_form_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="payment_method_id">{{ trans('cruds.invoice.fields.payment_method') }}</label>
                <select class="form-control select2 {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" name="payment_method_id" id="payment_method_id" required>
                    @foreach($payment_methods as $id => $entry)
                        <option value="{{ $id }}" {{ (old('payment_method_id') ? old('payment_method_id') : $invoice->payment_method->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_method'))
                    <span class="text-danger">{{ $errors->first('payment_method') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.payment_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="cfdi_use_id">{{ trans('cruds.invoice.fields.cfdi_use') }}</label>
                <select class="form-control select2 {{ $errors->has('cfdi_use') ? 'is-invalid' : '' }}" name="cfdi_use_id" id="cfdi_use_id" required>
                    @foreach($cfdi_uses as $id => $entry)
                        <option value="{{ $id }}" {{ (old('cfdi_use_id') ? old('cfdi_use_id') : $invoice->cfdi_use->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('cfdi_use'))
                    <span class="text-danger">{{ $errors->first('cfdi_use') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.cfdi_use_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="currency_id">{{ trans('cruds.invoice.fields.currency') }}</label>
                <select class="form-control select2 {{ $errors->has('currency') ? 'is-invalid' : '' }}" name="currency_id" id="currency_id" required>
                    @foreach($currencies as $id => $entry)
                        <option value="{{ $id }}" {{ (old('currency_id') ? old('currency_id') : $invoice->currency->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('currency'))
                    <span class="text-danger">{{ $errors->first('currency') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.currency_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="taxes_id">{{ trans('cruds.invoice.fields.taxes') }}</label>
                <select class="form-control select2 {{ $errors->has('taxes') ? 'is-invalid' : '' }}" name="taxes_id" id="taxes_id" required>
                    @foreach($taxes as $id => $entry)
                        <option value="{{ $id }}" {{ (old('taxes_id') ? old('taxes_id') : $invoice->taxes->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('taxes'))
                    <span class="text-danger">{{ $errors->first('taxes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.taxes_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="type_voucher_id">{{ trans('cruds.invoice.fields.type_voucher') }}</label>
                <select class="form-control select2 {{ $errors->has('type_voucher') ? 'is-invalid' : '' }}" name="type_voucher_id" id="type_voucher_id" required>
                    @foreach($type_vouchers as $id => $entry)
                        <option value="{{ $id }}" {{ (old('type_voucher_id') ? old('type_voucher_id') : $invoice->type_voucher->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('type_voucher'))
                    <span class="text-danger">{{ $errors->first('type_voucher') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.invoice.fields.type_voucher_helper') }}</span>
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