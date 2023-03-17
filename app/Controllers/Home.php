<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/admin/dashboard');
    }
    public function template()
    {
        return view('pages/user/dashboard');
    }
}
