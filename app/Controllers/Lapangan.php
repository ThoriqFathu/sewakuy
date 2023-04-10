<?php

namespace App\Controllers;

use App\Models\LapanganModel;

class Lapangan extends BaseController
{
    protected $lapanganModel;
    // protected $url;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->lapanganModel = new LapanganModel;
        // $this->url = 'http://localhost/CI/public/';
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


            // session()->setFlashdata('error', $this->validator);
            return redirect()->to(base_url() . '/lapangan/tambah')->withInput()->with('errors', $this->validator->getErrors());
        } else {
            // ambil gambar
            $filename = $this->request->getFile('gambar');
            if ($filename->getError() == 4) {
                $nameGambar = 'default.jpg';
            } else {
                $nameGambar = $filename->getRandomName();
                $filename->move('img', $nameGambar);
            }

            $this->lapanganModel->insert([
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'gambar' => $nameGambar,
                'harga' => $harga,
                'jenis' => $jenis,
                'status' => $status

            ]);

            return redirect()->to(base_url() . '/lapangan');
        }
    }


    public function edit($id)
    {
        // $model = new MenuModel();

        $data['row'] = $this->lapanganModel->getId($id);

        return view('pemilik/edit', $data);
    }
    public function update()
    {
        $id = $this->request->getVar('id');
        $username = 'daffakuy';
        $nama = $this->request->getVar('nama');
        $alamat = $this->request->getVar('alamat');
        $harga = $this->request->getVar('harga');
        $jenis = $this->request->getVar('jenis');
        $status = $this->request->getVar('status');
        $nameGambar = $this->request->getVar('gambar_awal');
        $filename = $this->request->getFile('gambar');
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


            // session()->setFlashdata('error', $this->validator);
            return redirect()->to(base_url() . '/lapangan/edit/' . (string)($id))->withInput()->with('errors', $this->validator->getErrors());
        } else {
        }
        if ($filename->getError() == 4) {
            $nameGambar = $nameGambar;
        } else {
            if ($nameGambar == 'default.jpg') {
                $nameGambar = $filename->getRandomName();
                $filename->move('img', $nameGambar);
            } else {
                unlink('img/' . $nameGambar);
                $nameGambar = $filename->getRandomName();
                $filename->move('img', $nameGambar);
            }

            $id = $this->request->getVar('id');
            $data = [
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'gambar' => $nameGambar,
                'harga' => $harga,
                'jenis' => $jenis,
                'status' => $status
            ];

            $this->lapanganModel->update($id, $data);

            return redirect()->to(base_url() . '/lapangan');
        }
    }
}
