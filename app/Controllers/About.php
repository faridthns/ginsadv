<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tentang Kami',
            'menu' => 'Tentang Kami',
            'isi' => 'tentang_kami'
        ];

        return view('layouts/layout_home', $data);
    }
}
