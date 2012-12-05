<?php

namespace Modules\PanappDashboard\Controllers;

use Resources;

class Account extends \Controllers\Template {

    public function __construct() {
        $this->auth = new \Libraries\Auth;
        $this->request = new Resources\Request;
        $this->formValidation = new \Modules\PanappDashboard\Models\FormValidation;
        parent::__construct();
    }

    public function index() {
        $data['title'] = "Login";
        $this->render('Account/login', $data);
    }

    public function login() {
        $data['title'] = "Login";

        if ($this->request->post('login')) {
            if ($this->auth->validateSignature($this->request->post('signature'))) {
                $username = $this->request->post('username');
                $password = $this->request->post('password');
                if ($this->formValidation->validateValues('signin')) {
                    if ($this->auth->login($username, $password)) {
                        
                    } else {
                        $data['signature'] = $this->auth->generateSignature();
                    }
                } else {
                    $data['signature'] = $this->auth->generateSignature();
                }
            } else {
                $data['signature'] = $this->auth->generateSignature();
            }
        } else {
            $data['signature'] = $this->auth->generateSignature();
        }

        $this->render('Account/login', $data);
    }

}