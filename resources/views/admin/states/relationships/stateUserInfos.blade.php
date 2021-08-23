<div class="m-3">
    @can('user_info_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.user-infos.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.userInfo.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.userInfo.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-stateUserInfos">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.logo') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.rfc') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.legal_name') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.address_1') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.addres_2') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.state') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.municipality') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.postal_code') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.country') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.certificate') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.key_file') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.password') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($userInfos as $key => $userInfo)
                            <tr data-entry-id="{{ $userInfo->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $userInfo->id ?? '' }}
                                </td>
                                <td>
                                    @if($userInfo->logo)
                                        <a href="{{ $userInfo->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                            <img src="{{ $userInfo->logo->getUrl('thumb') }}">
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    {{ $userInfo->rfc ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->legal_name ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->address_1 ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->addres_2 ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->state->name ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->municipality->name ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->postal_code ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->country->name ?? '' }}
                                </td>
                                <td>
                                    @if($userInfo->certificate)
                                        <a href="{{ $userInfo->certificate->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if($userInfo->key_file)
                                        <a href="{{ $userInfo->key_file->getUrl() }}" target="_blank">
                                            {{ trans('global.view_file') }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    {{ $userInfo->password ?? '' }}
                                </td>
                                <td>
                                    @can('user_info_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.user-infos.show', $userInfo->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('user_info_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.user-infos.edit', $userInfo->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('user_info_delete')
                                        <form action="{{ route('admin.user-infos.destroy', $userInfo->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('user_info_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.user-infos.massDestroy') }}",
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
  let table = $('.datatable-stateUserInfos:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection