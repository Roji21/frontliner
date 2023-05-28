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
            'no_tel' => $this->request->getPost("note"),
            'password' => $this->request->getPost("password"),
            'jenis' => $this->request->getPost("jenis")
        );
        $model->saveuser($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data ");
                window.location="' . base_url('/') . '"
            </script>';
    }
    public function login()
    {
        // Proses login
        $data['title'] = 'Log In';
        echo view("login", $data);
        // Validasi input
        $validationRules = [
            'username' => 'required',
            'password' => 'required'
        ];

        if ($this->validate($validationRules)) {
            // Ambil data input
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Query ke database untuk mencocokkan username dan password
            $userModel = new user();
            $user = $userModel->emwhere($username)->first();

            if ($user && password_verify($password, $user['password'])) {
                // Login berhasil, simpan informasi pengguna ke dalam session
                echo '<script>
                    alert("Username atau password salah.");
                </script>';
                $session = session();
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['email'],
                    // Informasi lain yang dibutuhkan
                ]);
                
                return redirect()->to('/');
            } else {
                echo '<script>
                    alert("Username atau password salah.");
                </script>';
                
                return view('/login', $data);
            }
        } else {
            // Tampilkan form login
            return view('/');
        }

    }
    public function logout()
    {
        // Hapus informasi pengguna dari session saat logout
        $session = session();
        $session->destroy();

        return redirect()->to('/login');
    }

}