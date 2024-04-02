<?php

namespace App\Controllers;

use App\Models\UlasanModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home',
            'menu' => 'Home',
            'isi' => 'home',
            'db' => new UlasanModel(),
        ];

        $data['review'] = $data['db']->getReviewHome(3);

        return view('layouts/layout_home', $data);
    }
}
