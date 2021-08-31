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
                                        <li class="breadcrumb-item active">Inicio</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Inicio</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-xl-3">
                            
                            <div class="card">
                                <div class="card-body">
                                    <div class=" d-flex justify-content-between">
                                        <img src="/assets/images/Icon.png" alt="" height="75">
                                        <div class="align-self-center">
                                            <h4 class="title-text mb-0">Mis folios</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between bg-purple p-3 mt-3 rounded">
                                        <div>
                                                <h4 class="mb-1 font-weight-semibold text-white font-20">$00</h4>
                                                <p class="text-white mb-0">Pagos</p>
                                        </div>
                                        <div>
                                            <h4 class=" mb-1 font-weight-semibold text-white font-20">00</h4>
                                            <p class="text-white mb-0">Facturas Emitidas</p>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Acciones rápidas</h4>

                                    <div class="">
                                        <div  class="apex-charts">
                                            
                                            <a class="btn btn-block btn-gradient-primary waves-effect waves-light" style="color: white;" 
                                            href="{{route('frontend.invoices.create')}}"> <i class="mdi mdi-qrcode-edit"></i>  Crear Factura</a>   <br><br>
                                           {{-- <a class="btn btn-block btn-gradient-secondary waves-effect waves-light" style="color: white;" href="#"> <i class="mdi mdi-qrcode-edit"></i>  Crear Nota de Crédito</a>  <br><br>--}}
                                            <a class="btn btn-block btn-gradient-purple waves-effect waves-light" style="color: white;"
                                            href="{{route('frontend.products.create')}}"> <i class="mdi mdi-qrcode-edit"></i>Crear Producto</a>  <br><br>
                                            <a class="btn btn-block btn-gradient-pink waves-effect waves-light" style="color: white;"
                                            href="{{route('frontend.clients.create')}}"> <i class="mdi mdi-qrcode-edit"></i>  Crear Cliente</a> <br><br>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->                            
                        </div><!-- end col-->

                        <div class="col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <img src="/template/assets/images/users/user-1.png" alt="" class="thumb-md rounded-circle mr-2">                                       
                                        <div class="media-body align-self-center">
                                            <h4 class="mt-0 mb-1">Bienvenido, {{ Auth::user()->name}}</h4>
                                            <p class="text-muted mb-0 font-14 pr-5">Plan contratado:</p>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                    <div class="welcome-img">
                                        <img src="/template/assets/images/widgets/w-2.svg" alt="" height="120" class="mt-n4 mr-5 d-none d-lg-block">    
                                    </div>                                       
                                </div><!--end card-body--> 
                            </div><!--end card-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card crm-data-card">
                                        <div class="card-body"> 
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="far fa-user rounded-circle bg-soft-success"></i>
                                                    </div>
                                                </div><!-- end col-->
                                                <div class="col-8 text-right">
                                                    <p class="text-muted font-14">Clientes</p>
                                                    <h3 class="mb-0">{{Auth::user()->clientes->count()}}</h3>
                                                </div><!-- end col-->
                                            </div><!-- end row-->                                                                                  
                                        </div><!--end card-body--> 
                                    </div><!--end card-->
                                </div><!--end col-->
                                
                                <div class="col-sm-6">
                                    <div class="card crm-data-card">
                                        <div class="card-body"> 
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="fas fa-archive rounded-circle bg-soft-purple"></i>
                                                    </div>
                                                </div><!-- end col-->
                                                <div class="col-8 text-right">
                                                    <p class="text-muted font-14">Productos</p>
                                                    <h3 class="mb-0">{{Auth::user()->productos->count()}}</h3>                                            
                                                </div><!-- end col-->
                                            </div><!-- end row-->                                                                                     
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div><!--end col-->

                               {{-- <div class="col-sm-4">
                                    <div class="card crm-data-card">
                                        <div class="card-body"> 
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="far fa-file-alt rounded-circle bg-soft-pink"></i>
                                                    </div>
                                                </div><!-- end col-->
                                                <div class="col-8 text-right">
                                                    <p class="text-muted font-14">Cotizaciones</p>
                                                    <h3 class="mb-0">10k</h3>                                            
                                                </div><!-- end col-->
                                            </div><!-- end row-->
                                        </div><!--end card-body--> 
                                    </div><!--end card-->
                                </div><!--end col--> --}}
                            </div><!--end row-->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Historial de facturación</h4>
                                    <div  class="flot-chart">

                                        <canvas id="myChart" width="400" height="100"></canvas>
                                        <script>
                                        var ctx = document.getElementById('myChart').getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                                datasets: [{
                                                    label: '# of Votes',
                                                    data: [12, 19, 3, 5, 2, 3],
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(54, 162, 235, 0.2)',
                                                        'rgba(255, 206, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(153, 102, 255, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)'
                                                    ],
                                                    borderColor: [
                                                        'rgba(255, 99, 132, 1)',
                                                        'rgba(54, 162, 235, 1)',
                                                        'rgba(255, 206, 86, 1)',
                                                        'rgba(75, 192, 192, 1)',
                                                        'rgba(153, 102, 255, 1)',
                                                        'rgba(255, 159, 64, 1)'
                                                    ],
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        });
                                        </script>

                                        
                                    </div>                                
                                </div><!--end card-body--> 
                            </div><!--end card-->  
                        </div><!-- end col-->
                    </div><!--end row-->


                </div><!-- container -->

              @include('layouts.footer')
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        



@include('layouts.scripts')
  
    </body>

</html>