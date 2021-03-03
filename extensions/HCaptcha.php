<?php

namespace Extensions;

class HCaptcha
{
    private $secret;

    public function __construct($secret)
    {
        $this->secret = $secret;
    }

    public function validateResponse($response)
    {
        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $this->secret, 'response' => $response)));
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $result = json_decode(curl_exec($verify));
        return ($result->success) ? true : false;
    }
}
