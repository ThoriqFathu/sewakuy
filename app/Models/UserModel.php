<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'username';
    protected $allowedFields = ['email', 'nama', 'password', 'jenis_kelamin', 'nomor_telepon', 'id_level'];

    public function login($username, $password)
    {
        $builder = $this->table('user');
        $builder->where('username', $username);
        $builder->where('password', $password);
        $query = $builder->get();
        return $query->getResultArray();
    }
}
