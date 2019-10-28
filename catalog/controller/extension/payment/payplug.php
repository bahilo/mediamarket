<?php

class ControllerExtensionPaymentPayplug extends Controller {

    private $errors = array();
    private $PayPlug;

    public function index() {
        $this->language->load('extension/payment/payplug');
		require DIR_SYSTEM.'library/payplug/init.php';
        // require DIR_SYSTEM.'library/payplug.inc.php';
        // $this->PayPlug = new PayPlug();

        // if (!$this->PayPlug->init) {
            // $this->errors[] = sprintf($this->language->get('error_module_failed'), $this->PayPlug->errModule, $this->PayPlug->errCode, $this->PayPlug->errMsg);
        // }

        $authFile = DIR_CONFIG.'payplug_auth.json';
        if (!file_exists($authFile)) {
            $this->errors[] = $this->language->get('error_authfile_not_found');
        }

        if ($this->session->data['currency'] != 'EUR') {
            $this->errors[] = $this->language->get('error_invalid_currency');
        }

        if (!empty($this->errors)) {
            $data['errors'] = $this->errors;
        } else {
            $this->load->model('checkout/order');
            $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

            $t = $this->currency->format($order_info['total'], $order_info['currency_code'], false, false);
            // $auth = json_decode(file_get_contents($authFile), true);
            $auth = file_get_contents($authFile);

            // echo "session ->".print_r($order_info, true)."<br />";
			$payment = Payplug\Payment::create(array(
				'amount'           => $t * 100,
				'currency'         => $this->session->data['currency'],
				'billing'          => array(
                    'email'        => $order_info['email'],
                    'address1'     => $order_info['email'],
                    'first_name'   => html_entity_decode($order_info['payment_firstname'], ENT_QUOTES, 'UTF-8'),
                    'last_name'    => html_entity_decode($order_info['payment_lastname'], ENT_QUOTES, 'UTF-8'),
                    'address1'     => $order_info['payment_address_1'],
                    'postcode'     => $order_info['payment_postcode'],
                    'city'         => $order_info['payment_city'],
                    'country'      => $order_info['payment_iso_code_2'],
                    //'language'     => $order_info['payment_iso_code_2']
                ),
                'shipping'  => array(
                    'first_name'    => $order_info['shipping_firstname'],
                    'last_name'     => $order_info['shipping_lastname'],
                    'email'         => $order_info['email'],
                    'address1'      => $order_info['shipping_address_1'],
                    'postcode'      => $order_info['shipping_postcode'],
                    'city'          => $order_info['shipping_city'],
                    'country'       => $order_info['shipping_iso_code_2'],
                    //'language'      => $order_info['shipping_iso_code_2'],
                    'delivery_type' => 'BILLING'
                  ),
				'hosted_payment'    => array(
					'return_url'    => $this->url->link('checkout/success'),
                    'cancel_url'    => $this->url->link('checkout/checkout', '', 'SSL')
				),
                'metadata'          => array(
                    'customer_id'   => $order_info['customer_id']
                    )
			), new Payplug\Payplug($auth));
			
			$data['paymentUrl'] = $payment->hosted_payment->payment_url;
			
            // $data['paymentUrl'] = $this->PayPlug->generateUrl(array(
                // 'amount' => str_replace('.', '', $t),
                // 'currency' => $this->session->data['currency'],
                // 'ipnUrl' => $this->url->link('payment/payplug/callback', '', 'SSL'),
                // 'cancelUrl' => $this->url->link('checkout/checkout', '', 'SSL'),
                // 'returnUrl' => $this->url->link('checkout/success'),
                // 'email' => $order_info['email'],
                // 'firstName' => html_entity_decode($order_info['payment_firstname'], ENT_QUOTES, 'UTF-8'),
                // 'lastName' => html_entity_decode($order_info['payment_lastname'], ENT_QUOTES, 'UTF-8'),
                // 'customer' => (isset($this->session->data['user_id']) ? $this->session->data['user_id'] : 0),
                // 'order' => $this->session->data['order_id'],
                // 'origin' => $this->config->get('config_title')
                    // ), $auth
            // );
            $data['button_confirm'] = $this->language->get('button_confirm');
            $data['text_bank_redirect'] = $this->language->get('text_bank_redirect');
            $data['payplug_popup'] = $this->config->get('payplug_popup');
        }

        if (file_exists(DIR_TEMPLATE.$this->config->get('config_template').'/template/extension/payment/payplug')) {
            return $this->load->view($this->config->get('config_template').'/template/extension/payment/payplug', $data);
        } else {
            return $this->load->view('default/template/extension/payment/payplug', $data);
        }
    }

    public function callback() {

        if (!function_exists('getallheaders')) {

            function getallheaders() {
                $headers = array();
                foreach ($_SERVER as $name => $value) {
                    if (substr($name, 0, 5) == 'HTTP_') {
                        $name = str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))));
                        $headers[$name] = $value;
                    } else if ($name == "CONTENT_TYPE") {
                        $headers["Content-Type"] = $value;
                    } else if ($name == "CONTENT_LENGTH") {
                        $headers["Content-Length"] = $value;
                    } else {
                        $headers[$name] = $value;
                    }
                }
                return $headers;
            }

        }

        /* For more security, put the keys in uppercase and retrieve
         * the signature using the key in uppercase
         */
        $headers = array_change_key_case(getallheaders(), CASE_UPPER);
        $signature = base64_decode($headers['PAYPLUG-SIGNATURE']);

        /* The data is sent in the body of the POST request in JSON format
         * (MIME type = application / json).
         * Example : {"state": "paid", "customer", "2", "transaction_id": 4121, "custom_data": "29", "order": "42"}
         */
        $body = file_get_contents('php://input');
        $data = json_decode($body, true);

        // Validate the given public key
        $authFile = DIR_CONFIG.'payplug_auth.json';
        if (!file_exists($authFile)) {
            $this->log->write($this->language->get('error_authfile_not_found'));
            header('HTTP/1.1 500 Internal Server Error');
            die('Internal Server Error');
        }

        $auth = json_decode(file_get_contents($authFile), true);
        $publicKey = openssl_pkey_get_public($auth['payplugPublicKey']);
        $isSignatureValid = openssl_verify($body, $signature, $publicKey, OPENSSL_ALGO_SHA1);

        if ($isSignatureValid !== 0) {
            $this->load->model('checkout/order');
            $order_info = $this->model_checkout_order->getOrder($data['order']);

            if ($order_info !== false) {
                switch ($data['state']) {
                    case 'paid':
                        $order_status_id = $this->config->get('payplug_paid_status_id');
                        break;
                    case 'refunded':
                        $order_status_id = $this->config->get('payplug_refunded_status_id');
                        break;
                }
                $this->model_checkout_order->addOrderHistory($data['order'], $order_status_id);
            }
        } else {
            header('HTTP/1.1 403 Forbidden');
            die('Access Denied');
        }
    }

}
