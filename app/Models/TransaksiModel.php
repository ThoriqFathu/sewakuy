<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id_booking';

    public function getData($username)
    {
        // $builder = $this->table('lapangan');
        // $builder->where('username', $username);
        // $query = $builder->get();
        // return $builder;
        $builder = $this->table('booking')->join('lapangan', 'booking.id_lapangan=lapangan.id_lapangan')->where('username', $username);
        // $builder->where('username', $username);
        $query = $builder->get();
        return $query->getResultArray();
    }
}
