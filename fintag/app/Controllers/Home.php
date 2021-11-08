<?php

namespace App\Controllers;

use CodeIgniter\Controller;
class Home extends Controller
{
    public function index()
    {
        $data['title']     = 'Home Page';
 
        echo view('header', $data);
        echo view('home', $data);
        echo view('footer', $data);
    }
}
