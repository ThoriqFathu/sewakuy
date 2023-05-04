<?php

namespace App\Controllers;

class Publik extends BaseController
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
}
