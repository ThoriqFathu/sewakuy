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
        helper('form');
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
        // $data = [
        //     'validasi' => \Config\Services::validation()
        // ];
        return view('admin/tambah-menu');
    }
    public function postMenu()
    {
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
            // return redirect()->to(base_url() . '/admin/tambahMenu')->withInput();
        } else {

            // echo "berhasil";
            $this->menuModel->insert([
                'nama_menu' => $nama_menu,
                'nama_controller' => $nama_controller,

            ]);

            return redirect()->to(base_url() . '/admin');
        }
    }
    public function editMenu($id)
    {
        // $model = new MenuModel();

        $data['row'] = $this->menuModel->getIdmenu($id);

        return view('admin/edit-menu', $data);
    }
    public function updateMenu()
    {
        $id = $this->request->getVar('id');
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
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            // return redirect()->to(base_url() . '/admin/tambahMenu')->withInput();
        } else {

            // echo "berhasil";
            $this->menuModel->update($id, [
                'nama_menu' => $nama_menu,
                'nama_controller' => $nama_controller,

            ]);

            return redirect()->to(base_url() . '/admin');
        }
    }
    public function hapusMenu($id)
    {
        $this->menuModel->delete(['id_menu' => $id]);
        return redirect()->to(base_url() . '/admin');
    }
}
