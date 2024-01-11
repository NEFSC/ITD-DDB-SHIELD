<?php

namespace App\Controllers;

class Home extends Base
{
    public function index(): string
    {
        return view('home');
    }
}
