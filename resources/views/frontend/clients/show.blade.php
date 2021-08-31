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
                                <h4 class="page-title">Mi cliente</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->


    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.client.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                       {{-- <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.clients.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div> --}}
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $client->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.country') }}
                                    </th>
                                    <td>
                                        {{ $client->country->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.rfc') }}
                                    </th>
                                    <td>
                                        {{ $client->rfc }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.legal_name') }}
                                    </th>
                                    <td>
                                        {{ $client->legal_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.address_1') }}
                                    </th>
                                    <td>
                                        {{ $client->address_1 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.address_2') }}
                                    </th>
                                    <td>
                                        {{ $client->address_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.zip_code') }}
                                    </th>
                                    <td>
                                        {{ $client->zip_code }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.municipality') }}
                                    </th>
                                    <td>
                                        {{ $client->municipality->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.state') }}
                                    </th>
                                    <td>
                                        {{ $client->state->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $client->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $client->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.last_name') }}
                                    </th>
                                    <td>
                                        {{ $client->last_name }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-outline-info" href="{{ route('frontend.clients.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
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