<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Login',
            'menu' => 'Login',
            'isi' => 'login'
        ];

        return view('layouts/layout_login', $data);
    }
}
