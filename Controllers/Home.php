<?php
namespace Modules\PanappDashboard\Controllers;
use Resources;

class Home extends Resources\Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        echo 'Hello world!';
    }
}