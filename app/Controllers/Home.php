<?php

namespace App\Controllers;


use CodeIgniter\Session\Session;
use App\Models\user;

class Home extends BaseController
{
    protected $session;
    public function index()
    {
        $session = session();
        if (!$session->has('id')) {
            $data = [
                'title' => "Home"
            ];
            echo view("home", $data);
        } else {
            $session = session();
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'user' => $user,
                'title' => "Home"
            ];
            echo view("home", $data);
        }

    }
    public function profil(){
        $session = session();
        if (!$session->has('id')) {
            $data = [
                'title' => "Profil"
            ];
            echo view("profil", $data);
        } else {
            $session = session();
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'user' => $user,
                'title' => "Profil"
            ];
            echo view("profil", $data);
        }
    }

}