<?php

namespace App\Controllers;

class Pemilik extends BaseController
{
    public function index()
    {
        // $data = [
        //     'title' => 'Home'
        // ];
        return view('pemilik/home');
    }
}
