<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class Publik extends BaseController
{

  
    

    protected $UserModel;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->UserModel = new UserModel;
    }

    public function login()
    {
        return view('login');
    }



    public function post_login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $loginUser = $this->UserModel->login($username, $password);
        if ($loginUser > 0) {
            dd("berhasil");
        } else {
            dd("gagal");
        }
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
