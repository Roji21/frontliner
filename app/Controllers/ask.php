<?php

namespace App\Controllers;

class ask extends BaseController
{
    public function index()
    {
        $data['title'] = 'Ask Expert';
        echo view("ask/tam1", $data);
    }
    public function index2()
    {
        $data['title'] = 'Coba';
        echo view("coba", $data);
    }

}