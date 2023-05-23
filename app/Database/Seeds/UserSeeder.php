<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'          =>  'Muhammad Iqbal',
                'password' =>  'orangtuadihormati69'
            ],
            [
                'username'          =>  'AbiyyuTsaqif',
                'password' =>  'estetikadalahjalanku33'
            ],
            [
                'username'          =>  'Meyden',
                'password' =>  'lawaklawaklawak'
            ]
        ];
        $this->db->table('user')->insertBatch($data);
    }
}
