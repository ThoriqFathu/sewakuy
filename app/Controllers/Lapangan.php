<?php

namespace App\Controllers;

use App\Models\LapanganModel;

class Lapangan extends BaseController
{
    protected $lapanganModel;
    protected $url;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->lapanganModel = new LapanganModel;
        $this->url = 'http://localhost/CI/public/';
    }

    public function index()
    {
        // $lapangan = $this->lapanganModel->findAll();
        // dd($lapangan);
        $lapangan = $this->lapanganModel->getData('daffakuy');
        // dd($lapangan);
        $data = [
            'judul' => 'Kelola Lapangan',
            'lapangan' => $lapangan
        ];
        return view('pemilik/kelola_lapangan', $data);
    }

    public function tambah()
    {
        session();
        // if (!empty(session()->getFlashdata('error'))) {
        //     $validation = session()->getFlashdata('error');
        // } else {
        //     $validation = null;
        // }

        // $data = [
        //     'validation' => $validation
        // ];
        return view('pemilik/tambah');
    }

    public function post()
    {
        $username = 'daffakuy';
        $nama = $this->request->getVar('nama');
        $alamat = $this->request->getVar('alamat');
        // $gambar = $this->request->getVar('gambar');
        // $gambar = 'lap1.jpg';
        $harga = $this->request->getVar('harga');
        $jenis = $this->request->getVar('jenis');
        $status = $this->request->getVar('status');


        // dd($this->request->getVar());
        // $validation = $this->validate([
        //     'nama' => [
        //         'rules'  => 'required',
        //         'errors' => [
        //             'required' => 'Masukkan Nama Lapangan.'
        //         ]
        //     ],
        //     'alamat'    => [
        //         'rules'  => 'required',
        //         'errors' => [
        //             'required' => 'Masukkan konten alamat.'
        //         ]
        //     ],
        //     'harga'    => [
        //         'rules'  => 'required',
        //         'errors' => [
        //             'required' => 'Masukkan konten harga.'
        //         ]
        //     ],

        // ]);


        if (!$this->validate([
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama Lapangan Harus Di isi.'
                ]
            ],
            'alamat'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Alamat Harus Di isi.'
                ]
            ],
            'harga'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Harga Harus Di isi.'
                ]
            ],
            'gambar' => [
                'rules'  => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'File Harus Berupa Gambar',
                    'mime_in' => 'File Harus Berupa Gambar'
                ]
            ]

        ])) {

            //render view with error validation message
            // dd($this->validator);
            // return view('pemilik/tambah', [
            //     'validation' => $this->validator
            // ]);

            // dd(['validation' => $this->validator]);
            // $validation = \Config\Services::validation();
            // return redirect()->to($this->url . '/lapangan/tambah')->withInput()->with('validation', $validation);

            // session()->setFlashdata('error', $this->validator);
            return redirect()->to($this->url . '/lapangan/tambah')->withInput()->with('errors', $this->validator->getErrors());
        } else {
            // ambil gambar
            $filename = $this->request->getFile('gambar');
            $nameGambar = $filename->getRandomName();
            $filename->move('img', $nameGambar);

            $this->lapanganModel->insert([
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'gambar' => $nameGambar,
                'harga' => $harga,
                'jenis' => $jenis,
                'status' => $status

            ]);

            return redirect()->to($this->url . '/lapangan');
        }
    }


    // public function detail()
    // {
    //     $data = [
    //         'judul' => 'Detail Lapangan',
    //     ];
    //     return view('pemilik/detil', $data);
    // }
}
