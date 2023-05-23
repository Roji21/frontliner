<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $user = new UserModel();
        $data['userdata'] = $user->orderBy('username', 'asc')->findAll();
        echo view('user', $data);
    }
}
