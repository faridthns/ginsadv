<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\UlasanModel;

class Product extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Produk',
            'menu' => 'Product',
            'isi' => 'product',
            'db' => new ProductModel(),
            'keyword' => $this->request->getVar('keyword'),
        ];

        if($data['keyword']) {
            $data['produk'] = $data['db']->search($data['keyword']);
            if ($data['produk'] == null) {
                session()->setFlashdata('pesan', 'Produk yang anda cari tidak ada');
            }
        }
        else {
            $data['produk'] = $data['db']->findAll();
        }

        return view('layouts/layout_home', $data);
    }

    

    public function details($id)
    {
        $data = [
            'title' => 'Detail Produk',
            'menu' => 'Detail Product',
            'isi' => 'details_product',
            'db' => new ProductModel()
        ];

        $data['produk'] = $data['db']->getDetail($id);

        return view('layouts/layout_home', $data);
    }

    public function ulasan()
    {
        $db = new UlasanModel();
        $nama = $this->request->getVar('nama_produk');
        $simpan = $db->save([
            'id_produk' => $this->request->getVar('id_produk'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'rating' => $this->request->getVar('rating'),
            'desc' => $this->request->getVar('desc')
        ]);
        session()->setFlashdata('pesan', 'Terimakasih telah memberi ulasan');
        return redirect()->to('product/' . $nama);
    }
}
