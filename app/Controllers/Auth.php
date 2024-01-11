<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends Base
{
    public function index()
    {
        //
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
}
