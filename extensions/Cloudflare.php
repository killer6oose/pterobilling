<?php

namespace Extensions;

use Illuminate\Http\Request;

class Cloudflare
{
    /**
     * This name is shown in the admin area
     */
    public static $display_name = 'Cloudflare Zone';

    /**
     * Set up the server subdomain manager
     */
    public function __construct()
    {
        //
    }

    /**
     * Create a subdomain name for the server. Return true if
     * success, false if failed.
     */
    public static function createSubdomain($name, $subdomain, $port)
    {
        return true;
    }

    /**
     * Update the port number of the subdomain name. Return true
     * if success, false if failed.
     */
    public static function updatePort($name, $subdomain, $port)
    {
        return true;
    }

    /**
     * Modify a subdomain name of the server. Return true if
     * success, false if failed.
     */
    public static function modifySubdomain($name, $subdomain, $port)
    {
        return true;
    }

    /**
     * Delete a subdomain name of the server. Return true if
     * success, false if failed.
     */
    public static function deleteSubdomain($name, $subdomain)
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
