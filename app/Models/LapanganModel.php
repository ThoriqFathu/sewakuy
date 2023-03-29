<?php

namespace App\Models;

use CodeIgniter\Model;

class LapanganModel extends Model
{
    protected $table = 'lapangan';
    protected $primaryKey = 'id_lapangan';
    protected $allowedFields = ['nama', 'username', 'alamat', 'gambar', 'harga', 'jenis', 'status'];

    public function getData($username)
    {
        $builder = $this->table('lapangan');
        $builder->where('username', $username);
        $query = $builder->get();
        // dd($builder);
        return $query->getResultArray();
    }
}
