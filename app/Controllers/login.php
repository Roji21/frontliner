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
            'USER_NAMA' => $this->request->getPost("nama"),
            'USER_EMAIL' => $this->request->getPost("email"),
            'USER_TELP' => $this->request->getPost("note"),
            'USER_PASS' => $this->request->getPost("password"),
            'USER_IDFOTO' => 'defimg.png',
            'USER_JOIN' => date("Y:m:d")
        );
        $model->saveuser($data);
        return redirect()->to(base_url('/login'));
    }
    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $userModel = new user();
        $user = $userModel->getUserByEmail($email);
        if (is_null($user)) {
            echo '<script>
                alert("Email atau password salah.");
                window.location.href = "/login";
            </script>';
        } else {
            if ($user['USER_EMAIL'] == $email && $user['USER_PASS'] == $password) {
                // Login berhasil, simpan informasi pengguna ke dalam session
                $session = session();
                $session->set('id', $user['ID_USER']);
                return redirect()->to(base_url('/'));
            } else {
                $data['error'] = 'Email atau password salah.';
                return redirect()->to(base_url('/login'));
            }
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