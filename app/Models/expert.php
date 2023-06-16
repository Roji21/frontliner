<?php

namespace App\Models;

use CodeIgniter\Model;

class expert extends Model
{
    protected $table = 'expert';

    public function getuser($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_expert' => $id]);
        }
    }

    public function saveuser($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    protected $primaryKey = 'id_Expert'; // Primary key tabel pengguna
    protected $allowedFields = [ 'slug', 'Nama']; // Kolom yang dapat diisi pada tabel pengguna

    public function getexpertslug($slug)
    {
        return $this->where('slug', $slug)->first();
    }
    
}