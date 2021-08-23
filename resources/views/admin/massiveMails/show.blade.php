@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.massiveMail.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.massive-mails.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.massiveMail.fields.id') }}
                        </th>
                        <td>
                            {{ $massiveMail->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.massiveMail.fields.title') }}
                        </th>
                        <td>
                            {{ $massiveMail->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.massiveMail.fields.content') }}
                        </th>
                        <td>
                            {!! $massiveMail->content !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.massiveMail.fields.poster') }}
                        </th>
                        <td>
                            @if($massiveMail->poster)
                                <a href="{{ $massiveMail->poster->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $massiveMail->poster->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.massive-mails.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection