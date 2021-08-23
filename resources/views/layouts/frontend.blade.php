<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    @yield('styles')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('frontend.home') }}">
                                    {{ __('Dashboard') }}
                                </a>
                            </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if(Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('frontend.profile.index') }}">{{ __('My profile') }}</a>

                                    @can('comunicacion_access')
                                        <a class="dropdown-item disabled" href="#">
                                            {{ trans('cruds.comunicacion.title') }}
                                        </a>
                                    @endcan
                                    @can('blog_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.blogs.index') }}">
                                            {{ trans('cruds.blog.title') }}
                                        </a>
                                    @endcan
                                    @can('massive_mail_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.massive-mails.index') }}">
                                            {{ trans('cruds.massiveMail.title') }}
                                        </a>
                                    @endcan
                                    @can('datos_de_facturacion_access')
                                        <a class="dropdown-item disabled" href="#">
                                            {{ trans('cruds.datosDeFacturacion.title') }}
                                        </a>
                                    @endcan
                                    @can('user_info_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.user-infos.index') }}">
                                            {{ trans('cruds.userInfo.title') }}
                                        </a>
                                    @endcan
                                    @can('product_control_access')
                                        <a class="dropdown-item disabled" href="#">
                                            {{ trans('cruds.productControl.title') }}
                                        </a>
                                    @endcan
                                    @can('product_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.products.index') }}">
                                            {{ trans('cruds.product.title') }}
                                        </a>
                                    @endcan
                                    @can('client_management_access')
                                        <a class="dropdown-item disabled" href="#">
                                            {{ trans('cruds.clientManagement.title') }}
                                        </a>
                                    @endcan
                                    @can('client_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.clients.index') }}">
                                            {{ trans('cruds.client.title') }}
                                        </a>
                                    @endcan
                                    @can('quote_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.quotes.index') }}">
                                            {{ trans('cruds.quote.title') }}
                                        </a>
                                    @endcan
                                    @can('facturacion_access')
                                        <a class="dropdown-item disabled" href="#">
                                            {{ trans('cruds.facturacion.title') }}
                                        </a>
                                    @endcan
                                    @can('invoice_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.invoices.index') }}">
                                            {{ trans('cruds.invoice.title') }}
                                        </a>
                                    @endcan
                                    @can('user_alert_access')
                                        <a class="dropdown-item" href="{{ route('frontend.user-alerts.index') }}">
                                            {{ trans('cruds.userAlert.title') }}
                                        </a>
                                    @endcan
                                    @can('user_management_access')
                                        <a class="dropdown-item disabled" href="#">
                                            {{ trans('cruds.userManagement.title') }}
                                        </a>
                                    @endcan
                                    @can('permission_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.permissions.index') }}">
                                            {{ trans('cruds.permission.title') }}
                                        </a>
                                    @endcan
                                    @can('role_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.roles.index') }}">
                                            {{ trans('cruds.role.title') }}
                                        </a>
                                    @endcan
                                    @can('user_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.users.index') }}">
                                            {{ trans('cruds.user.title') }}
                                        </a>
                                    @endcan
                                    @can('catalog_access')
                                        <a class="dropdown-item disabled" href="#">
                                            {{ trans('cruds.catalog.title') }}
                                        </a>
                                    @endcan
                                    @can('bank_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.banks.index') }}">
                                            {{ trans('cruds.bank.title') }}
                                        </a>
                                    @endcan
                                    @can('geo_access')
                                        <a class="dropdown-item disabled" href="#">
                                            {{ trans('cruds.geo.title') }}
                                        </a>
                                    @endcan
                                    @can('country_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.countries.index') }}">
                                            {{ trans('cruds.country.title') }}
                                        </a>
                                    @endcan
                                    @can('state_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.states.index') }}">
                                            {{ trans('cruds.state.title') }}
                                        </a>
                                    @endcan
                                    @can('municipality_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.municipalities.index') }}">
                                            {{ trans('cruds.municipality.title') }}
                                        </a>
                                    @endcan
                                    @can('sat_access')
                                        <a class="dropdown-item disabled" href="#">
                                            {{ trans('cruds.sat.title') }}
                                        </a>
                                    @endcan
                                    @can('tax_use_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.tax-uses.index') }}">
                                            {{ trans('cruds.taxUse.title') }}
                                        </a>
                                    @endcan
                                    @can('fiscal_regime_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.fiscal-regimes.index') }}">
                                            {{ trans('cruds.fiscalRegime.title') }}
                                        </a>
                                    @endcan
                                    @can('tax_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.taxes.index') }}">
                                            {{ trans('cruds.tax.title') }}
                                        </a>
                                    @endcan
                                    @can('currency_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.currencies.index') }}">
                                            {{ trans('cruds.currency.title') }}
                                        </a>
                                    @endcan
                                    @can('product_code_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.product-codes.index') }}">
                                            {{ trans('cruds.productCode.title') }}
                                        </a>
                                    @endcan
                                    @can('unid_code_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.unid-codes.index') }}">
                                            {{ trans('cruds.unidCode.title') }}
                                        </a>
                                    @endcan
                                    @can('payment_form_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.payment-forms.index') }}">
                                            {{ trans('cruds.paymentForm.title') }}
                                        </a>
                                    @endcan
                                    @can('payment_method_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.payment-methods.index') }}">
                                            {{ trans('cruds.paymentMethod.title') }}
                                        </a>
                                    @endcan
                                    @can('related_voucher_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.related-vouchers.index') }}">
                                            {{ trans('cruds.relatedVoucher.title') }}
                                        </a>
                                    @endcan
                                    @can('product_unit_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.product-units.index') }}">
                                            {{ trans('cruds.productUnit.title') }}
                                        </a>
                                    @endcan
                                    @can('configuracion_access')
                                        <a class="dropdown-item disabled" href="#">
                                            {{ trans('cruds.configuracion.title') }}
                                        </a>
                                    @endcan
                                    @can('mail_chimp_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.mail-chimps.index') }}">
                                            {{ trans('cruds.mailChimp.title') }}
                                        </a>
                                    @endcan
                                    @can('google_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.googles.index') }}">
                                            {{ trans('cruds.google.title') }}
                                        </a>
                                    @endcan
                                    @can('paypal_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.paypals.index') }}">
                                            {{ trans('cruds.paypal.title') }}
                                        </a>
                                    @endcan
                                    @can('stripe_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.stripes.index') }}">
                                            {{ trans('cruds.stripe.title') }}
                                        </a>
                                    @endcan
                                    @can('facturama_access')
                                        <a class="dropdown-item ml-3" href="{{ route('frontend.facturamas.index') }}">
                                            {{ trans('cruds.facturama.title') }}
                                        </a>
                                    @endcan

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if(session('message'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
                </div>
            @endif
            @if($errors->count() > 0)
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <ul class="list-unstyled mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
@yield('scripts')

</html>