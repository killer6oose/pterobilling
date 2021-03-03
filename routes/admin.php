<?php

use Illuminate\Support\Facades\Route;

/**
 * Admin Area
 */
// Dashboard
//Route::get('/', 'Admin\DashController@show')->name('dash');

// Clients
//Route::prefix('client')->name('client.')->group(function () {
//    Route::get('/', 'Admin\ClientController@index')->name('index');
//
//    Route::prefix('{id}')->group(function () {
//        Route::get('/', 'Admin\ClientController@show')->name('show');
//        Route::post('/', 'Admin\ClientController@store');
//        Route::get('/login', 'Admin\ClientController@login')->name('login');
//        Route::get('/servers', 'Admin\ClientController@servers')->name('servers');
//        Route::get('/invoices', 'Admin\ClientController@invoices')->name('invoices');
//        Route::get('/tickets', 'Admin\ClientController@tickets')->name('tickets');
//        Route::get('/affiliates', 'Admin\ClientController@affiliates')->name('affiliates');
//    });
//});

// Affiliate Program
//Route::prefix('affiliate')->name('affiliate.')->group(function () {
//    Route::get('/', 'Admin\AffiliateController@show')->name('show');
//    Route::post('/', 'Admin\AffiliateController@store');
//});

// Servers Listing
//Route::prefix('servers')->name('servers.')->group(function () {
//    Route::get('/active', 'Admin\ServerController@active')->name('active');
//    Route::get('/pending', 'Admin\ServerController@pending')->name('pending');
//    Route::get('/suspended', 'Admin\ServerController@suspended')->name('suspended');
//    Route::get('/canceled', 'Admin\ServerController@canceled')->name('canceled');
//});

// Servers
//Route::prefix('server/{id}')->name('server.')->group(function () {
//    Route::get('/', 'Admin\ServerController@show')->name('show');
//    Route::get('/suspend', 'Admin\ServerController@suspend')->name('suspend');
//    Route::get('/plan', 'Admin\ServerController@plan')->name('plan');
//    Route::get('/addons', 'Admin\ServerController@addons')->name('addons');
//    Route::get('/subdomain', 'Admin\ServerController@subdomain')->name('subdomain');
//});

// Server Plans
//Route::prefix('plan')->name('plan.')->group(function () {
//    Route::get('/', 'Admin\PlanController@index')->name('index');
//
//    Route::prefix('{id}')->group(function () {
//        Route::get('/', 'Admin\PlanController@show')->name('show');
//        Route::post('/', 'Admin\PlanController@update');
//        Route::get('/delete', 'Admin\PlanController@delete')->name('delete');
//        Route::get('/create', 'Admin\PlanController@create')->name('create');
//        Route::post('/create', 'Admin\PlanController@store');
//    });
//});

// Plan Categories
//Route::prefix('category')->name('category.')->group(function () {
//    Route::get('/', 'Admin\CategoryController@index')->name('index');
//
//    Route::prefix('{id}')->group(function () {
//        Route::get('/', 'Admin\CategoryController@show')->name('show');
//        Route::post('/', 'Admin\CategoryController@update');
//        Route::get('/delete', 'Admin\CategoryController@delete')->name('delete');
//        Route::get('/create', 'Admin\CategoryController@create')->name('create');
//        Route::post('/create', 'Admin\CategoryController@store');
//    });
//});

// Server Add-ons
//Route::prefix('addon')->name('addon.')->group(function () {
//    Route::get('/addon', 'Admin\AddonController@index')->name('index');
//
//    Route::prefix('{id}')->group(function () {
//        Route::get('/', 'Admin\AddonController@show')->name('show');
//        Route::post('/', 'Admin\AddonController@update');
//        Route::get('/delete', 'Admin\AddonController@delete')->name('delete');
//        Route::get('/create', 'Admin\AddonController@create')->name('create');
//        Route::post('/create', 'Admin\AddonController@store');
//    });
//});

// Coupon Codes
//Route::prefix('coupon')->name('coupon.')->group(function () {
//    Route::get('/', 'Admin\CouponController@index')->name('index');
//
//    Route::prefix('{id}')->group(function () {
//        Route::get('/', 'Admin\CouponController@show')->name('show');
//        Route::post('/', 'Admin\CouponController@update');
//        Route::get('/delete', 'Admin\CouponController@delete')->name('delete');
//        Route::get('/create', 'Admin\CouponController@create')->name('create');
//        Route::post('/create', 'Admin\CouponController@store');
//    });
//});

// Discounts
//Route::prefix('discount')->name('discount.')->group(function () {
//    Route::get('/', 'Admin\DiscountController@index')->name('index');
//
//    Route::prefix('{id}')->group(function () {
//        Route::get('/', 'Admin\DiscountController@show')->name('show');
//        Route::post('/', 'Admin\DiscountController@update');
//        Route::get('/delete', 'Admin\DiscountController@delete')->name('delete');
//        Route::get('/create', 'Admin\DiscountController@create')->name('create');
//        Route::post('/create', 'Admin\DiscountController@store');
//    });
//});

// Income
//Route::get('/income', 'Admin\IncomeController@show')->name('income');

// Invoices
//Route::prefix('invoice')->name('invoice.')->group(function () {
//    Route::get('/', 'Admin\InvoiceController@index')->name('index');
//
//    Route::prefix('{id}')->group(function () {
//        Route::get('/', 'Admin\InvoiceController@show')->name('show');
//    });
//});

// Gateway
//Route::prefix('gateway')->name('gateway.')->group(function () {
//    Route::get('/', 'Admin\GatewayController@index')->name('index');
//
//    Route::prefix('{id}')->group(function () {
//        Route::get('/', 'Admin\GatewayController@show')->name('show');
//        Route::post('/', 'Admin\GatewayController@store');
//    });
//});

// Currency
//Route::prefix('currency')->name('currency.')->group(function () {
//    Route::get('/', 'Admin\CurrencyController@index')->name('index');
//
//    Route::prefix('{id}')->group(function () {
//        Route::get('/', 'Admin\CurrencyController@show')->name('show');
//        Route::post('/', 'Admin\CurrencyController@store');
//        Route::get('/default', 'Admin\CurrencyController@default')->name('default');
//    });
//});

// Taxes
//Route::prefix('tax')->name('tax.')->group(function () {
//    Route::get('/', 'Admin\TaxController@show')->name('tax');
//    Route::post('/', 'Admin\TaxController@store');
//});

// Support Tickets
//Route::prefix('ticket')->name('ticket.')->group(function () {
//    Route::get('/', 'Admin\TicketController@index')->name('index');
//
//    Route::prefix('{id}')->group(function () {
//        Route::get('/', 'Admin\TicketController@show')->name('show');
//        Route::post('/', 'Admin\TicketController@store');
//        Route::get('/close', 'Admin\TicketController@close')->name('close');
//    });
//});

// Knowledge Base
//Route::prefix('kb')->name('kb.')->group(function () {
//    Route::get('/', 'Admin\KbController@index')->name('index');
//
//    Route::prefix('{id}')->group(function () {
//        Route::get('/', 'Admin\KbController@show')->name('show');
//        Route::post('/', 'Admin\KbController@update');
//        Route::get('/delete', 'Admin\KbController@delete')->name('delete');
//        Route::get('/create', 'Admin\KbController@create')->name('create');
//        Route::post('/create', 'Admin\KbController@store');
//    });
//});

// Announcements
//Route::prefix('announce')->name('announce.')->group(function () {
//    Route::get('/', 'Admin\AnnouncementController@show')->name('show');
//    Route::post('/', 'Admin\AnnouncementController@store');
//});

// Pages
//Route::prefix('page')->name('page.')->group(function () {
//    Route::prefix('{id}')->group(function () {
//        Route::get('/', 'Admin\PageController@show')->name('show');
//        Route::post('/', 'Admin\PageController@store');
//    });
//});

// Settings
//Route::get('/config', 'Admin\ConfigController@show')->name('config');

// Node Settings
//Route::prefix('node')->name('node.')->group(function () {
//    Route::get('/', 'Admin\NodeController@show')->name('show');
//    Route::post('/', 'Admin\NodeController@store');
//});

// Subdomain Settings
//Route::prefix('subdomain')->name('subdomain.')->group(function () {
//    Route::get('/', 'Admin\SubdomainController@index')->name('index');
//
//    Route::prefix('{id}')->group(function () {
//        Route::get('/', 'Admin\SubdomainController@show')->name('show');
//        Route::post('/', 'Admin\SubdomainController@update');
//        Route::get('/delete', 'Admin\SubdomainController@delete')->name('delete');
//        Route::get('/create', 'Admin\SubdomainController@create')->name('create');
//        Route::post('/create', 'Admin\SubdomainController@store');
//    });
//});

// Extensions
//Route::prefix('extension')->name('extension.')->group(function () {
//    Route::get('/paypal', 'Admin\Extension\PayPalController@show')->name('paypal');
//    Route::get('/hcaptcha', 'Admin\Extension\HCaptchaController@show')->name('hcaptcha');
//    Route::get('/cloudflare', 'Admin\Extension\CloudflareController@show')->name('cloudflare');
//});
