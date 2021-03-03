<?php

use Illuminate\Support\Facades\Route;

/**
 * Client Area
 */
// Dashboard
Route::get('/', 'Client\DashController@show')->name('dash');

// Servers
Route::prefix('server')->name('server.')->group(function () {
    // List all servers
    Route::get('/', 'Client\ServerController@index')->name('index');

    Route::prefix('{id}')->group(function () {
        // Show server information
        Route::get('/', 'Client\ServerController@show')->name('show');

        // Manage server plan
        Route::prefix('plan')->name('plan.')->group(function () {
            Route::get('/', 'Client\PlanController@show')->name('show');
            Route::get('/cancel', 'Client\PlanController@cancel')->name('cancel');
            Route::post('/cancel', 'Client\PlanController@destroy');
            Route::get('/change/{plan}', 'Client\PlanController@change')->name('change');
            Route::post('/change/{plan}', 'Client\PlanController@store');
            Route::get('/changed', 'Client\PlanController@changed')->name('changed');
        });

        // Manage server add-ons
        Route::prefix('addon')->name('addon.')->group(function () {
            Route::get('/', 'Client\AddonController@show')->name('show');
            Route::get('/remove/{addon}', 'Client\AddonController@remove')->name('remove');
            Route::post('/remove/{addon}', 'Client\AddonController@destroy');
            Route::get('/add/{addon}', 'Client\AddonController@add')->name('add');
            Route::post('/add/{addon}', 'Client\AddonController@store');
            Route::get('/added', 'Client\AddonController@added')->name('added');
        });

        // Server subdomain manager
        Route::prefix('subdomain')->name('subdomain.')->group(function () {
            Route::get('/', 'Client\SubdomainController@show')->name('show');
            Route::post('/', 'Client\SubdomainController@store');
        });

        // Server software installer
        Route::prefix('software')->name('software.')->group(function () {
            Route::get('/', 'Client\SoftwareController@show')->name('show');
            Route::post('/', 'Client\SoftwareController@store');
        });
    });
});

// Invoices
Route::prefix('invoice')->name('invoice.')->group(function () {
    Route::get('/', 'Client\InvoiceController@index')->name('index');

    Route::prefix('{id}')->group(function () {
        Route::get('/', 'Client\InvoiceController@show')->name('show');
        Route::post('/', 'Client\InvoiceController@store');
        Route::get('/print', 'Client\InvoiceController@print')->name('print');
        Route::get('/paid', 'Client\InvoiceController@paid')->name('paid');
    });
});

// Support Tickets
Route::prefix('ticket')->name('ticket.')->group(function () {
    Route::get('/', 'Client\TicketController@index')->name('index');

    Route::prefix('{id}')->group(function () {
        Route::get('/', 'Client\TicketController@show')->name('show');
        Route::post('/', 'Client\TicketController@update');
        Route::get('/create','Client\TicketController@create')->name('create');
        Route::post('/create', 'Client\TicketController@store');
    });
});

// Affiliate Program
Route::prefix('affiliate')->name('affiliate.')->group(function () {
    Route::get('/', 'Client\AffiliateController@show')->name('show');
    Route::post('/', 'Client\AffiliateController@store');
});

// Account Settings
Route::prefix('account')->name('account.')->group(function () {
    Route::get('/', 'Client\AccountController@show')->name('show');
    Route::post('/', 'Client\AccountController@store');
});

// Account Credit
Route::prefix('credit')->name('credit.')->group(function () {
    Route::get('/', 'Client\CreditController@show')->name('show');
    Route::post('/', 'Client\CreditController@store');
    Route::get('/added', 'Client\CreditController@added')->name('added');
});

// Logout
Route::get('/logout', 'Client\AccountController@destroy')->name('logout');
