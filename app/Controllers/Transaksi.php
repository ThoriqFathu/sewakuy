<?php

namespace App\Controllers;

use App\Models\transaksiModel;

class Transaksi extends BaseController
{
    protected $transaksiModel;
    public function __construct()
    {
        $this->transaksiModel = new transaksiModel;
    }

    public function index()
    {
        $transaksi = $this->transaksiModel->getData('daffakuy');
        $data = [
            'judul' => 'Daftar Transaksi',
            'transaksi' => $transaksi
        ];
        return view('pemilik/kelola_transaksi', $data);
    }
}
