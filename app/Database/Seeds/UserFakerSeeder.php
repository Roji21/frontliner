<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserFakerSeeder extends Seeder
{
    public function run()
    {
    //     // $faker = \Faker\Factory::create('id_ID');

    //     for ($i = 0; $i < 100; $i++) {
	// 		$jk = $faker->randomElement(['pria', 'wanita']);

	// 		if ($jk == "pria") {
	// 			$gender = "male";
	// 		} else {
	// 			$gender = "female";
	// 		}

    //         $data = [
	// 			'username' => $faker->name($gender),
	// 			'password' => $faker->phoneNumber
	// 		];

    //         $this->db->table('user')->insert($data);

    // }
    
    // FAKER TIDAK BISA DI INSTALL KARENA MENGGUNAKAN PHP 8, fzanonotto/faker require php 5.3-7.0
}
}