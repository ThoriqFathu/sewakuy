<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'username';
    protected $allowedFields = ['email', 'nama', 'password', 'jenis_kelamin', 'nomor_telepon', 'id_level'];

    public function getData($username)
    {
        $builder = $this->table('lapangan');
        $builder->where('username', $username);
        $query = $builder->get();
        // dd($builder);
        return $query->getResultArray();
    }
    public function getId($id)
    {
        return $this->find($id);
    }
}
