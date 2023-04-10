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
    public function postMenu()
    {
        $username = 'daffakuy';
        $nama_menu = $this->request->getVar('nama_menu');
        $nama_controller = $this->request->getVar('nama_controller');

        if (!$this->validate([
            'nama_menu' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama Menu Harus Di isi.'
                ]
            ],
            'nama_controller'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama Controller Harus Di isi.'
                ]
            ],

        ])) {


            // session()->setFlashdata('error', $this->validator);
            return redirect()->to(base_url() . '/admin/tambahMenu')->withInput()->with('errors', $this->validator->getErrors());
        } else {

            echo "berhasil";
            // $this->lapanganModel->insert([
            //     'nama' => $nama,
            //     'username' => $username,
            //     'alamat' => $alamat,
            //     'gambar' => $nameGambar,
            //     'harga' => $harga,
            //     'jenis' => $jenis,
            //     'status' => $status

            // ]);

            // return redirect()->to(base_url() . '/lapangan');
        }
    }
}
