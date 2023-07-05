<?php

namespace App\Controllers;

use App\Models\user;
use App\Models\expert;
use CodeIgniter\Session\Session;

class ask extends BaseController
{
    protected $session;
    public function index($param = null)
    {
        $session = session();
        $expModel = new expert();
        $isi = $expModel->joinexp();
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
        $isi = $expModel->getslug($expert);
        if (!$session->has('id')) {
            $data = [
                'title' => 'Ask Expert',
                'isi' => $isi
            ];
            echo view("ask/tam2", $data);
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

            echo view("ask/tam2", $data);
        }
    }
    public function index3($expert)
    {
        $session = session();
        $expModel = new expert();
        $isi = $expModel->getslug($expert);
        if (!$session->has('id')) {
            $data = [
                'title' => 'Ask Expert',
                'isi' => $isi
            ];
            echo view("ask/bayar", $data);
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

            echo view("ask/bayar", $data);
        }
    }
    public function kat($param)
    {
        $ket = str_replace('_', ' ', $param);
        $session = session();
        $expModel = new expert();
        $isi = $expModel->joinexpkat($ket);
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
}