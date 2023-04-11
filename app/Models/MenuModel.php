<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id_menu';
    protected $allowedFields = ['nama_menu', 'nama_controller'];
    public function getIdmenu($id)
    {
        return $this->find($id);
    }
}
