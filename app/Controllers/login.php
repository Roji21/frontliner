<?php

namespace App\Controllers;

use CodeIgniter\Session\Session;

use CodeIgniter\Controller;
use App\Models\user;

class login extends BaseController
{
    protected $session;
    public function index()
    {
        $session = session();
        if (!$session->has('id')) {
            
            $data = [
                'title' => 'Log In'
            ];
            echo view("login", $data);
        } else {
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'user' => $user,
                'title' => 'Log In'
            ];
            echo view("login", $data);
        }
    }
    public function index2()
    {
        $session = session();
        if (!$session->has('id')) {
            $data = [
                'title' => 'Sign Up'
            ];
            echo view("create", $data);
        } else {
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'user' => $user,
                'title' => 'Sign Up'
            ];
            echo view("create", $data);
        }
    }
    public function add()
    {
        $model = new user;
        $data = array(
            'nama' => $this->request->getPost("nama"),
            'email' => $this->request->getPost("email"),
            'no_tel' => $this->request->getPost("note"),
            'password' => $this->request->getPost("password"),
            'jenis' => 2
        );
        $model->saveuser($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data ");
                window.location="' . base_url('/') . '"
            </script>';
    }
    public function login()
    {
        // $validationRules = [
        //     'email' => 'required|valid_email',
        //     'password' => 'required'
        // ];

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $userModel = new user();
        $user = $userModel->getUserByEmail($email);
        if ($user['email'] == $email && $user['password'] == $password) {
            // Login berhasil, simpan informasi pengguna ke dalam session
            $session = session();
            $session->set('id', $user['id_user']);
            return redirect()->to(base_url('/'));
        } else {
            $data['error'] = 'Email atau password salah.';
            return redirect()->to(base_url('/login'));
        }
    }
    public function logout()
    {
        // Hapus informasi pengguna dari session saat logout
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('/'));
    }

}