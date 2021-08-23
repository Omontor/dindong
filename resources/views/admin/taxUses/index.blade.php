@extends('layouts.admin')
@section('content')
@can('tax_use_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.tax-uses.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.taxUse.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.taxUse.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-TaxUse">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.taxUse.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.taxUse.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.taxUse.fields.code') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($taxUses as $key => $taxUse)
                        <tr data-entry-id="{{ $taxUse->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $taxUse->id ?? '' }}
                            </td>
                            <td>
                                {{ $taxUse->name ?? '' }}
                            </td>
                            <td>
                                {{ $taxUse->code ?? '' }}
                            </td>
                            <td>
                                @can('tax_use_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.tax-uses.show', $taxUse->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('tax_use_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.tax-uses.edit', $taxUse->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('tax_use_delete')
                                    <form action="{{ route('admin.tax-uses.destroy', $taxUse->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('tax_use_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.tax-uses.massDestroy') }}",
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
  let table = $('.datatable-TaxUse:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection