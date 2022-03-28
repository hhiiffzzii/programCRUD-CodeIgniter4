<?php

namespace App\Models;

use CodeIgniter\Model;

class crudModel extends Model
{
    protected $table      = 'databarang';
    protected $primaryKey = 'id';

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = ['nama', 'jenis', 'stok'];

    public function getDetail($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
