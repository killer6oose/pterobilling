<?php

use Illuminate\Support\Facades\Route;

/**
 * Store Pages
 */
// Home Page
Route::get('/', 'Store\PageController')->name('home');

// Plans Page
Route::get('/plans/{id?}', 'Store\PlansController@show')->name('plans');

// Order Server Page
Route::get('/order/{id}', 'Store\OrderController@show')->name('order');
Route::post('/order/{id}', 'Store\OrderController@store');

// Checkout Page
Route::get('/checkout', 'Store\CheckoutController@show')->name('checkout');
Route::post('/checkout', 'Store\CheckoutController@store');
Route::get('/ordered', 'Store\CheckoutController@ordered')->name('ordered');
Route::get('/canceled', 'Store\CheckoutController@canceled')->name('canceled');

// Contact Page
Route::get('/contact', 'Store\ContactController@show')->name('contact');
Route::post('/contact', 'Store\ContactController@store');

// Terms of Service Page
Route::get('/terms', 'Store\PageController')->name('terms');

// Privacy Policy Page
Route::get('/privacy', 'Store\PageController')->name('privacy');

// System Status Page
Route::get('/status', 'Store\PageController')->name('status');

// Affiliate Link
Route::get('/a/{id}', 'Store\AffiliateController@show')->name('affiliate');

// Changing Currency
Route::get('/currency/{id}', 'Store\CurrencyController@show')->name('currency');

// Changing Country (Tax)
Route::get('/country/{id}', 'Store\CountryController@show')->name('country');

// Knowledge Base
Route::get('/kb/{article?}', 'Store\KbController@show')->name('kb');

/**
 * Authentication Pages
 */
Route::prefix('auth')->name('client.')->middleware('guest')->group(function () {
    // Login Page
    Route::get('/login', 'Client\LoginController@show')->name('login');
    Route::post('/login', 'Client\LoginController@store');

    // Register Page
    Route::get('/register', 'Client\RegisterController@show')->name('register');
    Route::post('/register', 'Client\RegisterController@store');

    // Recover Password Page
    Route::get('/forgot', 'Client\ForgotPasswordController@show')->name('forgot');
    Route::post('/forgot', 'Client\ForgotPasswordController@store');
    Route::get('/reset/{token}', 'Client\ResetPasswordController@show')->name('reset');
    Route::post('/reset/{token}', 'Client\ResetPasswordController@store');
});