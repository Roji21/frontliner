<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        // Validasi input
        $validationRules = [
            'email' => 'required|valid_email',
            'password' => 'required'
        ];

        if ($this->validate($validationRules)) {
            // Ambil data input
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            // Query ke database untuk mencocokkan email dan password
            $userModel = new UserModel();
            $user = $userModel->getUserByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                // Login berhasil, simpan informasi pengguna ke dalam session
                $session = session();
                $session->set([
                    'user_id' => $user['id'],
                    'email' => $user['email'],
                    // Informasi lain yang dibutuhkan
                ]);

                return redirect()->to('/');
            } else {
                // Login gagal, tampilkan pesan error
                $data['error'] = 'Email atau password salah.';
                return view('laa', $data);
            }
        } else {
            // Tampilkan form login
            return view('laa');
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
