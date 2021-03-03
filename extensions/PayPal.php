<?php

namespace Extensions;

use Illuminate\Http\Request;

class PayPal
{
    /**
     * This name is shown on the checkout page and admin area
     */
    public static $display_name = 'PayPal';

    /**
     * Set up the payment gateway
     */
    public function __construct()
    {
        //
    }

    /**
     * Called when client checkouts via this payment gateway. The
     * client must be redirected to route 'ordered' after sending
     * payment in order to call `verifyPayment()`. He/she must also
     * be redirected to route 'canceled' after canceling.
     */
    public static function toCheckout()
    {
        return redirect('http://example.com');
    }

    /**
     * Called when the client returns to our store from the payment
     * gateway. Return true if payment received, false if failed.
     */
    public static function verifyPayment()
    {
        return true;
    }

    /**
     * Manage GET request to the extension settings page in admin area
     */
    public static function viewSettings()
    {
        //return view('');
    }

    /**
     * Manage POST request to the extension settings page in amin area
     */
    public static function saveSettings(Request $request)
    {
        //return view('');
    }
}
