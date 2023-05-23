<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title']   = 'Home';
        echo view("Layout/header");
        echo view("welcome_message",$data);
        echo view("Layout/footer");
    }
    
}
