<!-- Left Sidenav -->
        <div class="left-sidenav">           
            <ul class="metismenu left-sidenav-menu">
                {{--<li>
                    <a href="javascript: void(0);"><i class="ti-bar-chart"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/template/dashboard/analytics-index.html"><i class="ti-control-record"></i>Analytics</a></li>
                        <li class="nav-item"><a class="nav-link" href="/template/dashboard/crm-index.html"><i class="ti-control-record"></i>CRM</a></li>
                        <li class="nav-item"><a class="nav-link" href="/template/dashboard/helpdesk-index.html"><i class="ti-control-record"></i>Helpdesk</a></li>
                        <li class="nav-item"><a class="nav-link" href="/template/dashboard/sales-index.html"><i class="ti-control-record"></i>Sales</a></li> 
                    </ul> 
                </li>--}}

                <li>
                    <a href="javascript: void(0);"><i class="ti-user"></i><span>Clientes</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                         
                        <li class="nav-item"><a class="nav-link" href="/template/apps/chat.html"><i class="ti-control-record"></i>Todos</a></li>
                        <li class="nav-item"><a class="nav-link" href="/template/apps/contact-list.html"><i class="ti-control-record"></i>Crear cliente</a></li>

                    </ul>
                </li>                   

                <li>
                    <a href="javascript: void(0);"><i class="ti-shopping-cart"></i><span>Productos</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <li><a href="{{route('frontend.products.index')}}">Todos</a></li>
                            <li><a href="{{route('frontend.products.create')}}">Crear producto</a></li>
                        </li>
                    </ul>                        
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="ti-receipt"></i><span>Facturación</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{route('frontend.invoices.index')}}"><i class="ti-control-record"></i>Todas</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('frontend.invoices.create')}}"><i class="ti-control-record"></i>Crear factura</a></li>
                    </ul>
                </li>

               {{-- <li>
                    <a href="javascript: void(0);"><i class="ti-lock"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/template/authentication/auth-login.html"><i class="ti-control-record"></i>Log in</a></li>
                        <li class="nav-item"><a class="nav-link" href="/template/authentication/auth-register.html"><i class="ti-control-record"></i>Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="/template/authentication/auth-recover-pw.html"><i class="ti-control-record"></i>Recover Password</a></li>
                        <li class="nav-item"><a class="nav-link" href="/template/authentication/auth-lock-screen.html"><i class="ti-control-record"></i>Lock Screen</a></li>
                        <li class="nav-item"><a class="nav-link" href="/template/authentication/auth-404.html"><i class="ti-control-record"></i>Error 404</a></li>
                        <li class="nav-item"><a class="nav-link" href="/template/authentication/auth-500.html"><i class="ti-control-record"></i>Error 500</a></li>
                    </ul>
                </li>--}}
            </ul>
        </div>
        <!-- end left-sidenav-->