<?php

namespace App\Controllers;

class NewsController extends BaseController
{
    public function index()
    {
        return view('news');
    }
}