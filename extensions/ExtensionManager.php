<?php

namespace Extensions;

class ExtensionManager
{
    /**
     * Enable the extensions that manage custom payment gateways.
     * The values in the array must match the PHP class names!
     */
    public function gateway_extensions() {
        return array(
            'PayPal',
        );
    }

    /**
     * Enable the extensions that manage server subdomain names.
     * The values in the array must match the PHP class names!
     */
    public function subdomain_extensions() {
        return array(
            'Cloudflare',
            'CPanel',
        );
    }

    /**
     * Enable the extensions that install custom softwares to servers.
     * The values in the array must match the PHP class names!
     */
    public function software_extensions() {
        return array(
            'Minecraft',
        );
    }

}