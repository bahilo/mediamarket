<?php

class PayPlug {

    private $extensions = array('curl' => 'cURL', 'openssl' => 'OpenSSL');
    private $functions = array('base64_decode', 'base64_encode', 'json_decode', 'json_encode', 'urlencode');
    private $phpMin = '5.2.0';
    public $errCode = 200;
    public $init, $errMsg;
    public $errModule = 'PayPlug';
    public $configUrl = 'https://www.payplug.fr/portal/ecommerce/autoconfig';
    public $sandboxUrl = 'https://www.payplug.fr/portal/test/ecommerce/autoconfig';
    public $version = '1.1';

    public function __construct() {

        // Checks that all required extensions have been loaded
        foreach ($this->extensions as $name => $title) {
            if (!extension_loaded($name)) {
                $this->errCode = 500;
                $this->errMsg = "This library needs the [$title] extension.";
            }
        }
        // Checks that all required functions exist
        foreach ($this->functions as $func) {
            if (!function_exists($func)) {
                $this->errCode = 500;
                $this->errMsg = "This library needs the [$func] function.";
            }
        }
        // If the PHP version is strictly lower than 5.2.0
        if (version_compare(phpversion(), $this->phpMin, '<')) {
            $this->errCode = 500;
            $this->errMsg = "This library needs PHP [$this->phpMin] or newer.";
        }
        
        $this->init = ($this->errCode == 200 ? true : false);
    }

    public function serverAuth($email, $password, $sandbox = false) {

        $process = curl_init($sandbox == true ? $this->sandboxUrl : $this->configUrl);

        curl_setopt($process, CURLOPT_HEADER, true);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($process, CURLOPT_SSLVERSION, 4);
        curl_setopt($process, CURLOPT_USERPWD, $email.':'.$password);
        curl_setopt($process, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($process, CURLOPT_CAINFO, DIR_SYSTEM.'library/cacert.pem');

        $answer = curl_exec($process);
        $headerSize = curl_getinfo($process, CURLINFO_HEADER_SIZE);
        // HTTP response code (200, 401, 404...)
        $httpCode = curl_getinfo($process, CURLINFO_HTTP_CODE);
		
		echo "answer => ".$answer."<br />";
		echo "CURLINFO_SSL_VERIFYRESULT => ".curl_getinfo($process, CURLINFO_SSL_VERIFYRESULT)."<br />";
		echo "CURLINFO_CONTENT_LENGTH_DOWNLOAD => ".curl_getinfo($process, CURLINFO_CONTENT_LENGTH_DOWNLOAD)."<br />";
		echo "CURLINFO_CONTENT_TYPE => ".curl_getinfo($process, CURLINFO_CONTENT_TYPE)."<br />";
		echo "CURLINFO_RESPONSE_CODE => ".curl_getinfo($process, CURLINFO_RESPONSE_CODE)."<br />";
		echo "CURLINFO_CERTINFO => ".print_r(curl_getinfo($process, CURLINFO_CERTINFO), true)."<br />";

        // Extracts JSON
        $body = substr($answer, $headerSize);
        // Extracts headers and splits the string containing the headers into lines in an array
        $headers = explode("\r\n", substr($answer, 0, $headerSize));

        /*
         * Splits the first line (containing HTTP response details) by spaces
         * for the 2 first matches. The last one will contains the remaining
         * text which is equivalent to the readable HTTP response message.
         */
        $httpResponse = explode(' ', $headers[0], 3);
        // The well deserved message
        $httpMsg = (isset($httpResponse[2]) ? $httpResponse[2] : '');
        // Curl error code (different from the HTTP response code)
        $curlErrNo = curl_errno($process);
        // Human readable message
        $curlErrMsg = curl_error($process);
        curl_close($process);

        // If there was no error
        if ($curlErrNo == 0) {
            $body = json_decode($body);

            // Authentication OK
            if ($httpCode == 200) {
                $auth = json_encode(array(
                    'currencies' => $body->currencies,
                    'amount_max' => $body->amount_max,
                    'amount_min' => $body->amount_min,
                    'url' => $body->url,
                    'payplugPublicKey' => $body->payplugPublicKey,
                    'yourPrivateKey' => $body->yourPrivateKey
                ));
                return $auth;
            }
            // Wrong email and/or password
            elseif ($httpCode == 401) {
                $this->errCode = 401;
                $this->errMsg = 'Invalid username/password combination';
            }
            // Access Forbidden if account is not activated
            elseif ($httpCode == 403) {
                $this->errCode = 403;
                $this->errMsg = $body->message;
            }
            // I wonder what this could be
            else {
                $this->errCode = $httpCode;
                $this->errMsg = $httpMsg;
                $this->errModule = 'HTTP';
            }
        } else {
            $this->errCode = $curlErrNo;
            $this->errMsg = $curlErrMsg;
            $this->errModule = 'cURL';
        }
        return false;
    }

    /**
     * The method which actually generates the URL.
     */
    public function generateUrl($params, $auth) {
        /* Generation of the <data> parameter */
        $remap_params = array(
            /* our key => payplug key */
            'amount' => 'amount',
            'cancelUrl' => 'cancel_url',
            'currency' => 'currency',
            'customData' => 'custom_data',
            'customer' => 'customer',
            'email' => 'email',
            'firstName' => 'first_name',
            'ipnUrl' => 'ipn_url',
            'lastName' => 'last_name',
            'order' => 'order',
            'origin' => 'origin',
            'returnUrl' => 'return_url'
        );
        $payment_params = array();

        /* Remaps $params keys to the one expected by Payplug payment page
         * That is, transform array('amount'=>100,'firstName'=>'bob')
         * to                 array('amount'=>100,'first_name'=>'bob')
         */
        foreach ($remap_params as $our_key => $payplug_key) {
            if (isset($params[$our_key])) {
                $payment_params[$payplug_key] = $params[$our_key];
            }
            if ($our_key == 'origin') {
                $payment_params[$payplug_key] = (isset($params[$our_key]) ? $params[$our_key] : "")." payplug-php ".$this->version.' PHP '.phpversion();
            }
        }

        $url_params = http_build_query($payment_params);
        $data = urlencode(base64_encode($url_params));

        /* Generation of the <signature> parameter */
        $privateKey = openssl_pkey_get_private($auth['yourPrivateKey']);
        openssl_sign($url_params, $signature, $privateKey, OPENSSL_ALGO_SHA1);
        $signature = urlencode(base64_encode($signature));

        return $auth['url'].'?data='.$data.'&sign='.$signature;
    }
}