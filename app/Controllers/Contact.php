<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kontak Kami',
            'menu' => 'Contact',
            'isi' => 'kontak'
        ];

        return view('layouts/layout_home', $data);
    }

    public function kritik_saran()
    {
        $db = new ContactModel();
        $tambah = $db->save([
            'nama_ks' => $this->request->getVar('nama_ks'),
            'email_ks' => $this->request->getVar('email_ks'),
            'dsc_ks' => $this->request->getVar('dsc_ks'),
        ]);
        session()->setFlashdata('pesan', 'Terima kasih telah menghubungi kami. Pesan dari anda sangat berarti bagi kami.');
        return redirect()->to('contact');
    }

    
}
