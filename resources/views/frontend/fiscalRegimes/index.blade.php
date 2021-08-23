@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('fiscal_regime_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.fiscal-regimes.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.fiscalRegime.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.fiscalRegime.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-FiscalRegime">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.fiscalRegime.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.fiscalRegime.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.fiscalRegime.fields.code') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fiscalRegimes as $key => $fiscalRegime)
                                    <tr data-entry-id="{{ $fiscalRegime->id }}">
                                        <td>
                                            {{ $fiscalRegime->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $fiscalRegime->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $fiscalRegime->code ?? '' }}
                                        </td>
                                        <td>
                                            @can('fiscal_regime_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.fiscal-regimes.show', $fiscalRegime->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('fiscal_regime_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.fiscal-regimes.edit', $fiscalRegime->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('fiscal_regime_delete')
                                                <form action="{{ route('frontend.fiscal-regimes.destroy', $fiscalRegime->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('fiscal_regime_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.fiscal-regimes.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-FiscalRegime:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection