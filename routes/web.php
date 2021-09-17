<?php

Route::view('/', 'welcome');
Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Blog
    Route::delete('blogs/destroy', 'BlogController@massDestroy')->name('blogs.massDestroy');
    Route::post('blogs/media', 'BlogController@storeMedia')->name('blogs.storeMedia');
    Route::post('blogs/ckmedia', 'BlogController@storeCKEditorImages')->name('blogs.storeCKEditorImages');
    Route::resource('blogs', 'BlogController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::get('user-alerts/read', 'UserAlertsController@read');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Bank
    Route::delete('banks/destroy', 'BankController@massDestroy')->name('banks.massDestroy');
    Route::resource('banks', 'BankController');

    // Massive Mail
    Route::delete('massive-mails/destroy', 'MassiveMailController@massDestroy')->name('massive-mails.massDestroy');
    Route::post('massive-mails/media', 'MassiveMailController@storeMedia')->name('massive-mails.storeMedia');
    Route::post('massive-mails/ckmedia', 'MassiveMailController@storeCKEditorImages')->name('massive-mails.storeCKEditorImages');
    Route::resource('massive-mails', 'MassiveMailController');

    // User Info
    Route::delete('user-infos/destroy', 'UserInfoController@massDestroy')->name('user-infos.massDestroy');
    Route::post('user-infos/media', 'UserInfoController@storeMedia')->name('user-infos.storeMedia');
    Route::post('user-infos/ckmedia', 'UserInfoController@storeCKEditorImages')->name('user-infos.storeCKEditorImages');
    Route::resource('user-infos', 'UserInfoController');

    // State
    Route::delete('states/destroy', 'StateController@massDestroy')->name('states.massDestroy');
    Route::resource('states', 'StateController');

    // Municipality
    Route::delete('municipalities/destroy', 'MunicipalityController@massDestroy')->name('municipalities.massDestroy');
    Route::resource('municipalities', 'MunicipalityController');

    // Fiscal Regime
    Route::delete('fiscal-regimes/destroy', 'FiscalRegimeController@massDestroy')->name('fiscal-regimes.massDestroy');
    Route::resource('fiscal-regimes', 'FiscalRegimeController');

    // Tax
    Route::delete('taxes/destroy', 'TaxController@massDestroy')->name('taxes.massDestroy');
    Route::resource('taxes', 'TaxController');

    // Tax Use
    Route::delete('tax-uses/destroy', 'TaxUseController@massDestroy')->name('tax-uses.massDestroy');
    Route::resource('tax-uses', 'TaxUseController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');

    // Client
    Route::delete('clients/destroy', 'ClientController@massDestroy')->name('clients.massDestroy');
    Route::resource('clients', 'ClientController');

    // Quotes
    Route::delete('quotes/destroy', 'QuotesController@massDestroy')->name('quotes.massDestroy');
    Route::post('quotes/media', 'QuotesController@storeMedia')->name('quotes.storeMedia');
    Route::post('quotes/ckmedia', 'QuotesController@storeCKEditorImages')->name('quotes.storeCKEditorImages');
    Route::resource('quotes', 'QuotesController');

    // Invoice
    Route::delete('invoices/destroy', 'InvoiceController@massDestroy')->name('invoices.massDestroy');
    Route::resource('invoices', 'InvoiceController');

    // Currency
    Route::delete('currencies/destroy', 'CurrencyController@massDestroy')->name('currencies.massDestroy');
    Route::resource('currencies', 'CurrencyController');

    // Product Code
    Route::delete('product-codes/destroy', 'ProductCodeController@massDestroy')->name('product-codes.massDestroy');
    Route::resource('product-codes', 'ProductCodeController');

    // Unid Code
    Route::delete('unid-codes/destroy', 'UnidCodeController@massDestroy')->name('unid-codes.massDestroy');
    Route::resource('unid-codes', 'UnidCodeController');

    // Payment Method
    Route::delete('payment-methods/destroy', 'PaymentMethodController@massDestroy')->name('payment-methods.massDestroy');
    Route::resource('payment-methods', 'PaymentMethodController');

    // Payment Form
    Route::delete('payment-forms/destroy', 'PaymentFormController@massDestroy')->name('payment-forms.massDestroy');
    Route::resource('payment-forms', 'PaymentFormController');

    // Related Voucher
    Route::delete('related-vouchers/destroy', 'RelatedVoucherController@massDestroy')->name('related-vouchers.massDestroy');
    Route::resource('related-vouchers', 'RelatedVoucherController');

    // Product
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::resource('products', 'ProductController');

    // Product Unit
    Route::delete('product-units/destroy', 'ProductUnitController@massDestroy')->name('product-units.massDestroy');
    Route::resource('product-units', 'ProductUnitController');

    // Mail Chimp
    Route::delete('mail-chimps/destroy', 'MailChimpController@massDestroy')->name('mail-chimps.massDestroy');
    Route::resource('mail-chimps', 'MailChimpController');

    // Google
    Route::delete('googles/destroy', 'GoogleController@massDestroy')->name('googles.massDestroy');
    Route::resource('googles', 'GoogleController');

    // Paypal
    Route::delete('paypals/destroy', 'PaypalController@massDestroy')->name('paypals.massDestroy');
    Route::resource('paypals', 'PaypalController');

    // Stripe
    Route::delete('stripes/destroy', 'StripeController@massDestroy')->name('stripes.massDestroy');
    Route::resource('stripes', 'StripeController');

    // Facturama
    Route::delete('facturamas/destroy', 'FacturamaController@massDestroy')->name('facturamas.massDestroy');
    Route::resource('facturamas', 'FacturamaController');


    // Invoice Serie
    Route::delete('invoice-series/destroy', 'InvoiceSerieController@massDestroy')->name('invoice-series.massDestroy');
    Route::resource('invoice-series', 'InvoiceSerieController');


    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
    Route::get('messenger', 'MessengerController@index')->name('messenger.index');
    Route::get('messenger/create', 'MessengerController@createTopic')->name('messenger.createTopic');
    Route::post('messenger', 'MessengerController@storeTopic')->name('messenger.storeTopic');
    Route::get('messenger/inbox', 'MessengerController@showInbox')->name('messenger.showInbox');
    Route::get('messenger/outbox', 'MessengerController@showOutbox')->name('messenger.showOutbox');
    Route::get('messenger/{topic}', 'MessengerController@showMessages')->name('messenger.showMessages');
    Route::delete('messenger/{topic}', 'MessengerController@destroyTopic')->name('messenger.destroyTopic');
    Route::post('messenger/{topic}/reply', 'MessengerController@replyToTopic')->name('messenger.reply');
    Route::get('messenger/{topic}/reply', 'MessengerController@showReply')->name('messenger.showReply');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
Route::group(['as' => 'frontend.', 'namespace' => 'Frontend', 'middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Blog
    Route::delete('blogs/destroy', 'BlogController@massDestroy')->name('blogs.massDestroy');
    Route::post('blogs/media', 'BlogController@storeMedia')->name('blogs.storeMedia');
    Route::post('blogs/ckmedia', 'BlogController@storeCKEditorImages')->name('blogs.storeCKEditorImages');
    Route::resource('blogs', 'BlogController');

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Bank
    Route::delete('banks/destroy', 'BankController@massDestroy')->name('banks.massDestroy');
    Route::resource('banks', 'BankController');

    // Massive Mail
    Route::delete('massive-mails/destroy', 'MassiveMailController@massDestroy')->name('massive-mails.massDestroy');
    Route::post('massive-mails/media', 'MassiveMailController@storeMedia')->name('massive-mails.storeMedia');
    Route::post('massive-mails/ckmedia', 'MassiveMailController@storeCKEditorImages')->name('massive-mails.storeCKEditorImages');
    Route::resource('massive-mails', 'MassiveMailController');

    // User Info
    Route::delete('user-infos/destroy', 'UserInfoController@massDestroy')->name('user-infos.massDestroy');
    Route::post('user-infos/media', 'UserInfoController@storeMedia')->name('user-infos.storeMedia');
    Route::post('user-infos/ckmedia', 'UserInfoController@storeCKEditorImages')->name('user-infos.storeCKEditorImages');
    Route::resource('user-infos', 'UserInfoController');

    Route::get('frontend/profile', 'UserInfoController@create')->name('perfil.index');

    // State
    Route::delete('states/destroy', 'StateController@massDestroy')->name('states.massDestroy');
    Route::resource('states', 'StateController');

    // Municipality
    Route::delete('municipalities/destroy', 'MunicipalityController@massDestroy')->name('municipalities.massDestroy');
    Route::resource('municipalities', 'MunicipalityController');

    // Fiscal Regime
    Route::delete('fiscal-regimes/destroy', 'FiscalRegimeController@massDestroy')->name('fiscal-regimes.massDestroy');
    Route::resource('fiscal-regimes', 'FiscalRegimeController');

    // Tax
    Route::delete('taxes/destroy', 'TaxController@massDestroy')->name('taxes.massDestroy');
    Route::resource('taxes', 'TaxController');

    // Tax Use
    Route::delete('tax-uses/destroy', 'TaxUseController@massDestroy')->name('tax-uses.massDestroy');
    Route::resource('tax-uses', 'TaxUseController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');

    // Client
    Route::delete('clients/destroy', 'ClientController@massDestroy')->name('clients.massDestroy');
    Route::resource('clients', 'ClientController');

    // Quotes
    Route::delete('quotes/destroy', 'QuotesController@massDestroy')->name('quotes.massDestroy');
    Route::post('quotes/media', 'QuotesController@storeMedia')->name('quotes.storeMedia');
    Route::post('quotes/ckmedia', 'QuotesController@storeCKEditorImages')->name('quotes.storeCKEditorImages');
    Route::resource('quotes', 'QuotesController');

    // Invoice
    Route::delete('invoices/destroy', 'InvoiceController@massDestroy')->name('invoices.massDestroy');
    Route::resource('invoices', 'InvoiceController');

    // Currency
    Route::delete('currencies/destroy', 'CurrencyController@massDestroy')->name('currencies.massDestroy');
    Route::resource('currencies', 'CurrencyController');

    // Product Code
    Route::delete('product-codes/destroy', 'ProductCodeController@massDestroy')->name('product-codes.massDestroy');
    Route::resource('product-codes', 'ProductCodeController');

    // Unid Code
    Route::delete('unid-codes/destroy', 'UnidCodeController@massDestroy')->name('unid-codes.massDestroy');
    Route::resource('unid-codes', 'UnidCodeController');

    // Payment Method
    Route::delete('payment-methods/destroy', 'PaymentMethodController@massDestroy')->name('payment-methods.massDestroy');
    Route::resource('payment-methods', 'PaymentMethodController');

    // Payment Form
    Route::delete('payment-forms/destroy', 'PaymentFormController@massDestroy')->name('payment-forms.massDestroy');
    Route::resource('payment-forms', 'PaymentFormController');

    // Related Voucher
    Route::delete('related-vouchers/destroy', 'RelatedVoucherController@massDestroy')->name('related-vouchers.massDestroy');
    Route::resource('related-vouchers', 'RelatedVoucherController');

    // Product
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::resource('products', 'ProductController');

    // Product Unit
    Route::delete('product-units/destroy', 'ProductUnitController@massDestroy')->name('product-units.massDestroy');
    Route::resource('product-units', 'ProductUnitController');

    // Mail Chimp
    Route::delete('mail-chimps/destroy', 'MailChimpController@massDestroy')->name('mail-chimps.massDestroy');
    Route::resource('mail-chimps', 'MailChimpController');

    // Google
    Route::delete('googles/destroy', 'GoogleController@massDestroy')->name('googles.massDestroy');
    Route::resource('googles', 'GoogleController');

    // Paypal
    Route::delete('paypals/destroy', 'PaypalController@massDestroy')->name('paypals.massDestroy');
    Route::resource('paypals', 'PaypalController');

    // Stripe
    Route::delete('stripes/destroy', 'StripeController@massDestroy')->name('stripes.massDestroy');
    Route::resource('stripes', 'StripeController');

    // Facturama
    Route::delete('facturamas/destroy', 'FacturamaController@massDestroy')->name('facturamas.massDestroy');
    Route::resource('facturamas', 'FacturamaController');

        // Invoice Serie
    Route::delete('invoice-series/destroy', 'InvoiceSerieController@massDestroy')->name('invoice-series.massDestroy');
    Route::resource('invoice-series', 'InvoiceSerieController');

    Route::get('frontend/profile2', 'ProfileController@index')->name('profile.index');
    Route::post('frontend/profile2', 'ProfileController@update')->name('profile.update');
    Route::post('frontend/profile2/destroy', 'ProfileController@destroy')->name('profile.destroy');
    Route::post('frontend/profile2/password', 'ProfileController@password')->name('profile.password');
});
