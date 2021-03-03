<?php

/**
 * PayPal Settings & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>
 * Modified by Alaister Leung <contact@alaister.net>
 */

return [
    'mode' => env('PAYPAL_MODE', 'sandbox'),
    'sandbox' => [
        'username'    => env('PAYPAL_SANDBOX_API_USERNAME'),
        'password'    => env('PAYPAL_SANDBOX_API_PASSWORD'),
        'secret'      => env('PAYPAL_SANDBOX_API_SECRET'),
        'certificate' => env('PAYPAL_SANDBOX_API_CERTIFICATE'),
        'app_id'      => env('PAYPAL_SANDBOX_APP_ID'),
    ],
    'live' => [
        'username'    => env('PAYPAL_LIVE_API_USERNAME'),
        'password'    => env('PAYPAL_LIVE_API_PASSWORD'),
        'secret'      => env('PAYPAL_LIVE_API_SECRET'),
        'certificate' => env('PAYPAL_LIVE_API_CERTIFICATE'),
        'app_id'      => env('PAYPAL_LIVE_APP_ID'),
    ],

    'payment_action' => 'Sale',
    'currency'       => 'USD',
    'billing_type'   => 'MerchantInitiatedBilling',
    'notify_url'     => '/paypal/ipn',
    'locale'         => '',
    'validate_ssl'   => true,
];
