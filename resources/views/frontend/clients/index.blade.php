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
                                        <li class="breadcrumb-item active">Clientes</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Mis clientes</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{Session::get('message') }}</p>
@endif


    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('client_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.clients.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.client.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.client.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Client">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.client.fields.rfc') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.client.fields.legal_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.client.fields.address_1') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.client.fields.email') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        
                                    </td>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $key => $client)
                                    <tr data-entry-id="{{ $client->id }}">
                                        <td>
                                            {{ $client->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $client->rfc ?? '' }}
                                        </td>
                                        <td>
                                            {{ $client->legal_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $client->address_1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $client->email ?? '' }}
                                        </td>
                                        <td>
                                            @can('client_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.clients.show', $client->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('client_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.clients.edit', $client->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('client_delete')
                                                <form action="{{ route('frontend.clients.destroy', $client->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

                </div><!-- container -->

              @include('layouts.footer')
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
     
        @include('layouts.scripts')

    </body>

</html>


@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('client_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.clients.massDestroy') }}",
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
  let table = $('.datatable-Client:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection