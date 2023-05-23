<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\user;

class login extends BaseController
{
    public function index()
    {
        $data['title'] = 'Log In';
        echo view("login", $data);
    }
    public function index2()
    {
        $data['title'] = 'Sign Up';
        echo view("create", $data);
    }
    public function add()
    {
        $model = new user;
        $data = array(
            'nama' => $this->request->getPost("nama"),
            'email' => $this->request->getPost("email"),
            'no_tel'  => $this->request->getPost("note"),
            'password'  => $this->request->getPost("password"),
            'jenis'  => $this->request->getPost("jenis")
        );
        $model->saveuser($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data ");
                window.location="' . base_url('/') . '"
            </script>';
    }

}