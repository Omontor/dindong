<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Bank
    Route::apiResource('banks', 'BankApiController');

    // User Info
    Route::post('user-infos/media', 'UserInfoApiController@storeMedia')->name('user-infos.storeMedia');
    Route::apiResource('user-infos', 'UserInfoApiController');

    // Client
    Route::apiResource('clients', 'ClientApiController');

    // Quotes
    Route::post('quotes/media', 'QuotesApiController@storeMedia')->name('quotes.storeMedia');
    Route::apiResource('quotes', 'QuotesApiController');

    // Invoice
    Route::apiResource('invoices', 'InvoiceApiController');

    // Product
    Route::apiResource('products', 'ProductApiController');
});
