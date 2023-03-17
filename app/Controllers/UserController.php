<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        return view('pages/admin/user/index');
    }

    public function create()
    {
        return view('pages/admin/user/add');
    }

    public function login()
    {
        return view('auth/login');
    }
}
