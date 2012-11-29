<?php
namespace Modules\PanappDashboard\Controllers;
use Resources;

class Home extends \Controllers\Template
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data['title'] = "Login";
        $this->render('Account/login', $data);
    }
}