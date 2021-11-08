<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        $data['title']     = 'Login Page';
 
        echo view('header', $data);
        echo view('login', $data);
        echo view('footer', $data);
    }
}
