@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.relatedVoucher.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.related-vouchers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.relatedVoucher.fields.id') }}
                        </th>
                        <td>
                            {{ $relatedVoucher->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.relatedVoucher.fields.name') }}
                        </th>
                        <td>
                            {{ $relatedVoucher->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.relatedVoucher.fields.code') }}
                        </th>
                        <td>
                            {{ $relatedVoucher->code }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.related-vouchers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection