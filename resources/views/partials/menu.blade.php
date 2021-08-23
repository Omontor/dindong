<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li>
                    <select class="searchable-field form-control">

                    </select>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('comunicacion_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/blogs*") ? "menu-open" : "" }} {{ request()->is("admin/massive-mails*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon far fa-comment">

                            </i>
                            <p>
                                {{ trans('cruds.comunicacion.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('blog_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.blogs.index") }}" class="nav-link {{ request()->is("admin/blogs") || request()->is("admin/blogs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-rss">

                                        </i>
                                        <p>
                                            {{ trans('cruds.blog.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('massive_mail_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.massive-mails.index") }}" class="nav-link {{ request()->is("admin/massive-mails") || request()->is("admin/massive-mails/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-envelope">

                                        </i>
                                        <p>
                                            {{ trans('cruds.massiveMail.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('datos_de_facturacion_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/user-infos*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-receipt">

                            </i>
                            <p>
                                {{ trans('cruds.datosDeFacturacion.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('user_info_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.user-infos.index") }}" class="nav-link {{ request()->is("admin/user-infos") || request()->is("admin/user-infos/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-info-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.userInfo.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('product_control_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/products*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-archive">

                            </i>
                            <p>
                                {{ trans('cruds.productControl.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('product_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is("admin/products") || request()->is("admin/products/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-lemon">

                                        </i>
                                        <p>
                                            {{ trans('cruds.product.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('client_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/clients*") ? "menu-open" : "" }} {{ request()->is("admin/quotes*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-user-friends">

                            </i>
                            <p>
                                {{ trans('cruds.clientManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('client_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.clients.index") }}" class="nav-link {{ request()->is("admin/clients") || request()->is("admin/clients/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user-plus">

                                        </i>
                                        <p>
                                            {{ trans('cruds.client.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('quote_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.quotes.index") }}" class="nav-link {{ request()->is("admin/quotes") || request()->is("admin/quotes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file-invoice-dollar">

                                        </i>
                                        <p>
                                            {{ trans('cruds.quote.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('facturacion_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/invoices*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-file-invoice-dollar">

                            </i>
                            <p>
                                {{ trans('cruds.facturacion.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('invoice_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.invoices.index") }}" class="nav-link {{ request()->is("admin/invoices") || request()->is("admin/invoices/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file-invoice">

                                        </i>
                                        <p>
                                            {{ trans('cruds.invoice.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_alert_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.user-alerts.index") }}" class="nav-link {{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-bell">

                            </i>
                            <p>
                                {{ trans('cruds.userAlert.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }} {{ request()->is("admin/audit-logs*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.auditLog.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('catalog_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/banks*") ? "menu-open" : "" }} {{ request()->is("admin/*") ? "menu-open" : "" }} {{ request()->is("admin/*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon far fa-list-alt">

                            </i>
                            <p>
                                {{ trans('cruds.catalog.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('bank_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.banks.index") }}" class="nav-link {{ request()->is("admin/banks") || request()->is("admin/banks/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-university">

                                        </i>
                                        <p>
                                            {{ trans('cruds.bank.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('geo_access')
                                <li class="nav-item has-treeview {{ request()->is("admin/countries*") ? "menu-open" : "" }} {{ request()->is("admin/states*") ? "menu-open" : "" }} {{ request()->is("admin/municipalities*") ? "menu-open" : "" }}">
                                    <a class="nav-link nav-dropdown-toggle" href="#">
                                        <i class="fa-fw nav-icon fas fa-globe-americas">

                                        </i>
                                        <p>
                                            {{ trans('cruds.geo.title') }}
                                            <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('country_access')
                                            <li class="nav-item">
                                                <a href="{{ route("admin.countries.index") }}" class="nav-link {{ request()->is("admin/countries") || request()->is("admin/countries/*") ? "active" : "" }}">
                                                    <i class="fa-fw nav-icon fas fa-flag">

                                                    </i>
                                                    <p>
                                                        {{ trans('cruds.country.title') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('state_access')
                                            <li class="nav-item">
                                                <a href="{{ route("admin.states.index") }}" class="nav-link {{ request()->is("admin/states") || request()->is("admin/states/*") ? "active" : "" }}">
                                                    <i class="fa-fw nav-icon far fa-map">

                                                    </i>
                                                    <p>
                                                        {{ trans('cruds.state.title') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('municipality_access')
                                            <li class="nav-item">
                                                <a href="{{ route("admin.municipalities.index") }}" class="nav-link {{ request()->is("admin/municipalities") || request()->is("admin/municipalities/*") ? "active" : "" }}">
                                                    <i class="fa-fw nav-icon fas fa-atlas">

                                                    </i>
                                                    <p>
                                                        {{ trans('cruds.municipality.title') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endcan
                            @can('sat_access')
                                <li class="nav-item has-treeview {{ request()->is("admin/tax-uses*") ? "menu-open" : "" }} {{ request()->is("admin/fiscal-regimes*") ? "menu-open" : "" }} {{ request()->is("admin/taxes*") ? "menu-open" : "" }} {{ request()->is("admin/currencies*") ? "menu-open" : "" }} {{ request()->is("admin/product-codes*") ? "menu-open" : "" }} {{ request()->is("admin/unid-codes*") ? "menu-open" : "" }} {{ request()->is("admin/payment-forms*") ? "menu-open" : "" }} {{ request()->is("admin/payment-methods*") ? "menu-open" : "" }} {{ request()->is("admin/related-vouchers*") ? "menu-open" : "" }} {{ request()->is("admin/product-units*") ? "menu-open" : "" }}">
                                    <a class="nav-link nav-dropdown-toggle" href="#">
                                        <i class="fa-fw nav-icon fas fa-university">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sat.title') }}
                                            <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('tax_use_access')
                                            <li class="nav-item">
                                                <a href="{{ route("admin.tax-uses.index") }}" class="nav-link {{ request()->is("admin/tax-uses") || request()->is("admin/tax-uses/*") ? "active" : "" }}">
                                                    <i class="fa-fw nav-icon fas fa-align-justify">

                                                    </i>
                                                    <p>
                                                        {{ trans('cruds.taxUse.title') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('fiscal_regime_access')
                                            <li class="nav-item">
                                                <a href="{{ route("admin.fiscal-regimes.index") }}" class="nav-link {{ request()->is("admin/fiscal-regimes") || request()->is("admin/fiscal-regimes/*") ? "active" : "" }}">
                                                    <i class="fa-fw nav-icon far fa-hospital">

                                                    </i>
                                                    <p>
                                                        {{ trans('cruds.fiscalRegime.title') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('tax_access')
                                            <li class="nav-item">
                                                <a href="{{ route("admin.taxes.index") }}" class="nav-link {{ request()->is("admin/taxes") || request()->is("admin/taxes/*") ? "active" : "" }}">
                                                    <i class="fa-fw nav-icon fas fa-money-bill-wave">

                                                    </i>
                                                    <p>
                                                        {{ trans('cruds.tax.title') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('currency_access')
                                            <li class="nav-item">
                                                <a href="{{ route("admin.currencies.index") }}" class="nav-link {{ request()->is("admin/currencies") || request()->is("admin/currencies/*") ? "active" : "" }}">
                                                    <i class="fa-fw nav-icon fas fa-coins">

                                                    </i>
                                                    <p>
                                                        {{ trans('cruds.currency.title') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('product_code_access')
                                            <li class="nav-item">
                                                <a href="{{ route("admin.product-codes.index") }}" class="nav-link {{ request()->is("admin/product-codes") || request()->is("admin/product-codes/*") ? "active" : "" }}">
                                                    <i class="fa-fw nav-icon fas fa-barcode">

                                                    </i>
                                                    <p>
                                                        {{ trans('cruds.productCode.title') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('unid_code_access')
                                            <li class="nav-item">
                                                <a href="{{ route("admin.unid-codes.index") }}" class="nav-link {{ request()->is("admin/unid-codes") || request()->is("admin/unid-codes/*") ? "active" : "" }}">
                                                    <i class="fa-fw nav-icon fab fa-codepen">

                                                    </i>
                                                    <p>
                                                        {{ trans('cruds.unidCode.title') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('payment_form_access')
                                            <li class="nav-item">
                                                <a href="{{ route("admin.payment-forms.index") }}" class="nav-link {{ request()->is("admin/payment-forms") || request()->is("admin/payment-forms/*") ? "active" : "" }}">
                                                    <i class="fa-fw nav-icon far fa-credit-card">

                                                    </i>
                                                    <p>
                                                        {{ trans('cruds.paymentForm.title') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('payment_method_access')
                                            <li class="nav-item">
                                                <a href="{{ route("admin.payment-methods.index") }}" class="nav-link {{ request()->is("admin/payment-methods") || request()->is("admin/payment-methods/*") ? "active" : "" }}">
                                                    <i class="fa-fw nav-icon fas fa-money-bill">

                                                    </i>
                                                    <p>
                                                        {{ trans('cruds.paymentMethod.title') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('related_voucher_access')
                                            <li class="nav-item">
                                                <a href="{{ route("admin.related-vouchers.index") }}" class="nav-link {{ request()->is("admin/related-vouchers") || request()->is("admin/related-vouchers/*") ? "active" : "" }}">
                                                    <i class="fa-fw nav-icon fas fa-paste">

                                                    </i>
                                                    <p>
                                                        {{ trans('cruds.relatedVoucher.title') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('product_unit_access')
                                            <li class="nav-item">
                                                <a href="{{ route("admin.product-units.index") }}" class="nav-link {{ request()->is("admin/product-units") || request()->is("admin/product-units/*") ? "active" : "" }}">
                                                    <i class="fa-fw nav-icon fas fa-list-ol">

                                                    </i>
                                                    <p>
                                                        {{ trans('cruds.productUnit.title') }}
                                                    </p>
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('configuracion_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/mail-chimps*") ? "menu-open" : "" }} {{ request()->is("admin/googles*") ? "menu-open" : "" }} {{ request()->is("admin/paypals*") ? "menu-open" : "" }} {{ request()->is("admin/stripes*") ? "menu-open" : "" }} {{ request()->is("admin/facturamas*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.configuracion.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('mail_chimp_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.mail-chimps.index") }}" class="nav-link {{ request()->is("admin/mail-chimps") || request()->is("admin/mail-chimps/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fab fa-mailchimp">

                                        </i>
                                        <p>
                                            {{ trans('cruds.mailChimp.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('google_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.googles.index") }}" class="nav-link {{ request()->is("admin/googles") || request()->is("admin/googles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fab fa-google">

                                        </i>
                                        <p>
                                            {{ trans('cruds.google.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('paypal_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.paypals.index") }}" class="nav-link {{ request()->is("admin/paypals") || request()->is("admin/paypals/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fab fa-paypal">

                                        </i>
                                        <p>
                                            {{ trans('cruds.paypal.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('stripe_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.stripes.index") }}" class="nav-link {{ request()->is("admin/stripes") || request()->is("admin/stripes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fab fa-stripe">

                                        </i>
                                        <p>
                                            {{ trans('cruds.stripe.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('facturama_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.facturamas.index") }}" class="nav-link {{ request()->is("admin/facturamas") || request()->is("admin/facturamas/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file-invoice">

                                        </i>
                                        <p>
                                            {{ trans('cruds.facturama.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @php($unread = \App\Models\QaTopic::unreadCount())
                    <li class="nav-item">
                        <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "active" : "" }} nav-link">
                            <i class="fa-fw fa fa-envelope nav-icon">

                            </i>
                            <p>{{ trans('global.messages') }}</p>
                            @if($unread > 0)
                                <strong>( {{ $unread }} )</strong>
                            @endif

                        </a>
                    </li>
                    @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                        @can('profile_password_edit')
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                    <i class="fa-fw fas fa-key nav-icon">
                                    </i>
                                    <p>
                                        {{ trans('global.change_password') }}
                                    </p>
                                </a>
                            </li>
                        @endcan
                    @endif
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <p>
                                <i class="fas fa-fw fa-sign-out-alt nav-icon">

                                </i>
                                <p>{{ trans('global.logout') }}</p>
                            </p>
                        </a>
                    </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>