<?php

namespace App\Controllers;

use App\Models\user;
use CodeIgniter\Session\Session;

class ask extends BaseController
{
    protected $session;
    public function index()
    {
        $session = session();
        if (!$session->has('id')) {
            $data = [
                'title' => 'Ask Expert'
            ];
            echo view("ask/tam1", $data);
        } else {
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'nama' => $user['nama'],
                'title' => 'Ask Expert'
            ];
            echo view("ask/tam1", $data);
        }

    }
    public function index2()
    {
        $data['title'] = 'Coba';
        echo view("coba", $data);
    }

}