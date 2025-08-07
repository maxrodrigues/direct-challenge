<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function index()
    {
        $reports = model('Report')->findAll();

        #echo "<pre>";
        #die(var_dump($reports));

        return $this->render('home', ['reports' => $reports]);
    }
}
