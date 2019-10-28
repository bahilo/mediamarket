<?php

class ControllerExtensionPaymentPayplug extends Controller {

    private $errors = array();
    //private $PayPlug;

    public function index() {

        $this->load->language('extension/payment/payplug');
        //require DIR_SYSTEM.'library/payplug.inc.php';
        //$this->PayPlug = new PayPlug();

        echo "post =>".print_r($this->request->post, true)."<br />";

        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
            if ($this->validate()) {
                $this->model_setting_setting->editSetting('payment_payplug', $this->request->post);
                $this->session->data['success'] = $this->language->get('text_success');
                $this->response->redirect($this->url->link('marketplace/extension', 'user_token='.$this->session->data['user_token'].'&type=payment', 'SSL'));
            }
        }

        $data['heading_title'] = $this->language->get('heading_title');

        $data['text_edit'] = $this->language->get('text_edit');
        $data['text_yes'] = $this->language->get('text_yes');
        $data['text_no'] = $this->language->get('text_no');
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');
        $data['text_all_zones'] = $this->language->get('text_all_zones');
        $data['text_module_disabled'] = $this->language->get('text_module_disabled');

        $data['entry_email'] = $this->language->get('entry_email');
        $data['entry_password'] = $this->language->get('entry_password');
        $data['entry_refunded_status'] = $this->language->get('entry_refunded_status');
        $data['entry_paid_status'] = $this->language->get('entry_paid_status');
        $data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
        $data['entry_status'] = $this->language->get('entry_status');
        $data['entry_sort_order'] = $this->language->get('entry_sort_order');
        $data['entry_popup'] = $this->language->get('entry_popup');
        $data['entry_sandbox'] = $this->language->get('entry_sandbox');
        $data['entry_total'] = $this->language->get('entry_total');

        $data['button_save'] = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');

        $data['tab_general'] = $this->language->get('tab_general');
        $data['tab_order_status'] = $this->language->get('tab_order_status');

        $data['help_sandbox'] = $this->language->get('help_sandbox');
        $data['help_total'] = $this->language->get('help_total');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home', 'user_token='.$this->session->data['user_token'], 'SSL'),
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_payment'),
            'href' => $this->url->link('extension/payment', 'user_token='.$this->session->data['user_token'], 'SSL'),
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/payment/payplug', 'user_token='.$this->session->data['user_token'], 'SSL'),
        );

        $data['action'] = $this->url->link('extension/payment/payplug', 'user_token='.$this->session->data['user_token'], 'SSL');

        $data['cancel'] = $this->url->link('extension/payment', 'user_token='.$this->session->data['user_token'], 'SSL');

        if (isset($this->request->post['payment_payplug_email'])) {
            $data['payplug_email'] = $this->request->post['payment_payplug_email'];
        } else {
            $data['payplug_email'] = $this->config->get('payment_payplug_email');
        }

        if (isset($this->request->post['payment_payplug_password'])) {
            $data['payplug_password'] = $this->request->post['payment_payplug_password'];
        } else {
            $data['payplug_password'] = $this->config->get('payment_payplug_password');
        }

        if (isset($this->request->post['payment_payplug_sandbox'])) {
            $data['payplug_sandbox'] = $this->request->post['payment_payplug_sandbox'];
        } else {
            $data['payplug_sandbox'] = $this->config->get('payment_payplug_sandbox');
        }

        if (isset($this->request->post['payment_payplug_popup'])) {
            $data['payplug_popup'] = $this->request->post['payment_payplug_popup'];
        } else {
            $data['payplug_popup'] = $this->config->get('payment_payplug_popup');
        }

        if (isset($this->request->post['payment_payplug_refunded_status_id'])) {
            $data['payplug_refunded_status_id'] = $this->request->post['payment_payplug_refunded_status_id'];
        } else {
            $data['payplug_refunded_status_id'] = $this->config->get('payment_payplug_refunded_status_id');
        }

        if (isset($this->request->post['payment_payplug_paid_status_id'])) {
            $data['payplug_paid_status_id'] = $this->request->post['payment_payplug_paid_status_id'];
        } else {
            $data['payplug_paid_status_id'] = $this->config->get('payment_payplug_paid_status_id');
        }

        $this->load->model('localisation/order_status');
        $data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

        if (isset($this->request->post['payment_payplug_total'])) {
            $data['payplug_total'] = $this->request->post['payment_payplug_total'];
        } else {
            $data['payplug_total'] = $this->config->get('payment_payplug_total');
        }

        if (isset($this->request->post['payment_payplug_sort_order'])) {
            $data['payplug_sort_order'] = $this->request->post['payment_payplug_sort_order'];
        } else {
            $data['payplug_sort_order'] = $this->config->get('payment_payplug_sort_order');
        }

        if (isset($this->request->post['payment_payplug_geo_zone_id'])) {
            $data['payplug_geo_zone_id'] = $this->request->post['payment_payplug_geo_zone_id'];
        } else {
            $data['payplug_geo_zone_id'] = $this->config->get('payment_payplug_geo_zone_id');
        }

        $this->load->model('localisation/geo_zone');

        $data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

        if (isset($this->request->post['payment_payplug_status'])) {
            $data['payplug_status'] = $this->request->post['payment_payplug_status'];
        } else {
            $data['payplug_status'] = $this->config->get('payment_payplug_status');
        }

        // if (!$this->PayPlug->init) {
            // $this->errors[] = sprintf($this->language->get('error_module_failed'), $this->PayPlug->errModule, $this->PayPlug->errCode, $this->PayPlug->errMsg);
        // }

        if (!empty($this->errors)) {
            foreach ($this->errors as $e) {
                $data['errors'][] = $e;
            }
        }

        // Disable the module if an error was found
        if (!empty($data['errors'])) {
            $data['payplug_status'] = 0;
            $this->model_setting_setting->editSetting('payment_payplug', array('payment_payplug_status' => 0));

            $authFile = DIR_CONFIG.'payplug_auth.json';
            if (file_exists($authFile)) {
                unlink($authFile);
            }
        }

        // $data['payplug_init'] = $this->PayPlug->init;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/payment/payplug', $data));
    }

    private function validate() {

		require DIR_SYSTEM.'library/payplug/init.php';
		
        if (!$this->user->hasPermission('modify', 'extension/payment/payplug')) {
            $this->errors[] = $this->language->get('error_permission');
        }

        if (!$this->request->post['payment_payplug_email']) {
            $this->errors[] = $this->language->get('error_email');
        }

        if (!$this->request->post['payment_payplug_password']) {
            $this->errors[] = $this->language->get('error_password');
        }

        if (empty($this->request->post['payment_payplug_sort_order'])) {
            $this->request->post['payplug_sort_order'] = 0;
        }

        $sandbox = ($this->request->post['payment_payplug_sandbox'] == '1' ? true : false);

        $auth = Payplug\Authentication::getKeysByLogin($this->request->post['payment_payplug_email'], $this->request->post['payment_payplug_password']);
		//$auth = $this->PayPlug->serverAuth($this->request->post['payment_payplug_email'], $this->request->post['payment_payplug_password'], $sandbox);
				
        if ($auth !== false) {
            $file = DIR_CONFIG.'payplug_auth.json';
            if (is_writable(DIR_CONFIG)) {
				if($sandbox)
					file_put_contents($file, $auth['httpResponse']['secret_keys']['test']);
				else
					file_put_contents($file, $auth['httpResponse']['secret_keys']['live']);
                return true;
            } else {
                $this->errors[] = sprintf($this->language->get('error_writing_auth_file'), $file);
                return false;
            }
        }
        $this->errors[] = sprintf($this->language->get('error_module_failed'), $this->PayPlug->errModule, $this->PayPlug->errCode, $this->PayPlug->errMsg);
        return false;
    }

}
