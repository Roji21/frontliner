<?php

namespace App\Models;

use CodeIgniter\Model;

class user extends Model
{
    protected $table = 'user';

    public function getuser($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function saveuser($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function emwhere($data)
    {
        return $this->getWhere(['email' => $data]);
    }
    
}