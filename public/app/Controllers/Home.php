<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index1()
    {
        return view('welcome_message');
    }
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
}
