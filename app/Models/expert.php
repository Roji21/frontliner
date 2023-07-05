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
    protected $allowedFields = ['slug', 'Nama']; // Kolom yang dapat diisi pada tabel pengguna

    public function getslug($slug)
    {
        $query = $this->db->table('user')
            ->select('*')
            ->join('expert', 'user.ID_USER = expert.FK_ID_USER ' , 'inner')
            ->where('expert.SLUG', $slug)
            ->get();
        return  $query->getResult();
    }
    public function joinexp()
    {
        $query = $this->db->table('user')
            ->select('*')
            ->join('expert', 'user.ID_USER = expert.FK_ID_USER', 'inner')
            ->get();
        return  $query->getResult();
    }
    public function joinexpkat($kat)
    {
        $query = $this->db->table('user')
            ->select('*')
            ->join('expert', 'user.ID_USER = expert.FK_ID_USER', 'inner')
            ->like('expert.ahli_Skill', $kat)
            ->get();
        return  $query->getResult();
    }

}