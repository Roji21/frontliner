<?php

namespace App\Controllers;

use App\Models\user;
use App\Models\expert;
use CodeIgniter\Session\Session;

class ask extends BaseController
{
    protected $session;
    public function index()
    {
        $session = session();
        $expModel = new expert();
        $isi = $expModel->getuser();
        if (!$session->has('id')) {
            $data = [
                'title' => 'Ask Expert',
                'isi' => $isi
            ];
            echo view("ask/tam1", $data);
        } else {
            $session = session();
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'user' => $user,
                'title' => "Ask Expert",
                'isi' => $isi
            ];
            echo view("ask/tam1", $data);
        }
    }
    public function index2($expert)
    {
        $session = session();
        $expModel = new expert();
        $isi = $expModel->getexpertslug($expert);
        if (!$session->has('id')) {
            $data = [
                'title' => 'Ask Expert',
                'isi' => $isi,
                'laa' => $expert
            ];
            echo view("ask/tam2", $data);
        } else {
            $session = session();
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'user' => $user,
                'title' => 'Ask Expert',
                'isi' => $isi
            ];
            echo view("ask/tam2", $data);
        }
    }

}