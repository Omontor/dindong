@extends('layouts.admin')
@section('content')
@can('municipality_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.municipalities.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.municipality.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.municipality.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Municipality">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.municipality.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.municipality.fields.state') }}
                        </th>
                        <th>
                            {{ trans('cruds.municipality.fields.name') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($municipalities as $key => $municipality)
                        <tr data-entry-id="{{ $municipality->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $municipality->id ?? '' }}
                            </td>
                            <td>
                                {{ $municipality->state->name ?? '' }}
                            </td>
                            <td>
                                {{ $municipality->name ?? '' }}
                            </td>
                            <td>
                                @can('municipality_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.municipalities.show', $municipality->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('municipality_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.municipalities.edit', $municipality->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('municipality_delete')
                                    <form action="{{ route('admin.municipalities.destroy', $municipality->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('municipality_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.municipalities.massDestroy') }}",
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
  let table = $('.datatable-Municipality:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection