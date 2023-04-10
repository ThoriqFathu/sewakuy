<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Admin extends BaseController
{
    protected $menuModel;
    // protected $url;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->menuModel = new MenuModel;
        // $this->url = 'http://localhost/CI/public/';
    }

    public function index()
    {
        // $lapangan = $this->lapanganModel->findAll();
        // dd($lapangan);
        $menu = $this->menuModel->findAll();
        // dd($menu);
        $data = [
            'judul' => 'Kelola menu',
            'menu' => $menu
        ];
        return view('admin/kelola-menu', $data);
    }
    public function tambahMenu()
    {
        session();
        return view('admin/tambah-menu');
    }
}
