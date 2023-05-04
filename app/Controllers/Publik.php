<?php

namespace App\Controllers;

class Publik extends BaseController
{
    protected $helpers = ['form'];
    
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function post_level()
    {
        $aktor = $this->request->getVar('aktor');
        if ($aktor == "1") {
            return view('register_penyewa');
        } elseif ($aktor == "2") {
            return view('register_pemilik');
        }
    }
}
