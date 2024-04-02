<?php

namespace App\Controllers;

use App\Models\AkunModel;
use App\Models\ProductModel;
use App\Models\UlasanModel;
use App\Models\ContactModel;

class Admin extends BaseController
{

    protected $akun;

    public function __construct()
    {
        $this->akun = new AkunModel();
        if (session()->get('role') != "Admin") {
            echo '<center>Access denied</center>';
            exit;
        }
    }

    public function index()
    {
        $data = [
            'title' => "Admin Dashboard",
        ];
        return view('Admin/Dashboard', $data);
    }

    public function Logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/Auth');
    }

    public function daftar_produk()
    {
        $data = [
            'title' => "Daftar Produk",
            'db' => new ProductModel()
        ];

        $data['currentPage'] = $this->request->getVar('page_daftar_produk') ? $this->request->getVar('page_daftar_produk') : 1; 

        $data['produk'] = $data['db']->paginate(5, 'daftar_produk');
        $data['pager'] = $data['db']->pager;

        return view('Admin/daftar_produk', $data);
    }

    public function review()
    {
        $data = [
            'title' => 'Review Produk',
            'menu' => 'Review Product',
            'isi' => 'review_product',
            'db' => new UlasanModel(),
            'keyword' => $this->request->getVar('keyword'),
        ];

        $data['currentPage'] = $this->request->getVar('page_review_produk') ? $this->request->getVar('page_review_produk') : 1; 

        if($data['keyword']) {
            $data['review'] = $data['db']->searchReview($data['keyword'], 5);
            if ($data['review'] == null) {
                session()->setFlashdata('pesan', 'Produk yang anda cari tidak ada');
            }
        }
        else {
            $data['review'] = $data['db']->getReview(5);
        }

        $data['pager'] = $data['db']->pager;

        return view('Admin/review_produk', $data);
    }

    // tambah produk
    public function tambah()
    {
        $db = new ProductModel();

        $foto = $this->request->getFile('foto_produk');
        if ($foto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            $namaFoto = $foto->getName();
            $foto->move('assets/image');
        }
        $tambah = $db->save([
            'nama_produk' => $this->request->getVar('nama_produk'),
            'dsc_produk' => $this->request->getVar('dsc_produk'),
            'stok_produk' => $this->request->getVar('stok_produk'),
            'harga_produk' => $this->request->getVar('harga_produk'),
            'foto_produk' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambah');
        return redirect()->to('daftar_produk');
    }

    // edit produk
    public function edit()
    {
        $db = new ProductModel();

        $fotoLama = $this->request->getVar('fotoLama');
        $fotoBaru = $this->request->getFile('foto_produk');
        if ($fotoBaru->getError() == 4) {
            $namaFoto = $fotoLama;
        } else {
            $namaFoto = $fotoBaru->getName();
            $fotoBaru->move('assets/image');
            if ($fotoLama != "default.png") {
                unlink('assets/image/' . $fotoLama);
            }
        }

        $id = $this->request->getVar('id_produk');
        $simpan = $db->update($id, [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'dsc_produk' => $this->request->getVar('dsc_produk'),
            'stok_produk' => $this->request->getVar('stok_produk'),
            'harga_produk' => $this->request->getVar('harga_produk'),
            'foto_produk' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('daftar_produk');

    }

    // hapus produk
    public function hapusProduk($id)
    {
        $guest = new ProductModel();
        $review = new UlasanModel();
        $deleteReview =  $review->where("id_produk", $id)->delete();
        $delete = $guest->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('daftar_produk');
    }

    public function hapusUlasanProduk($id)
    {
        $guest = new UlasanModel();
        $delete = $guest->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('review_produk');
    }

    public function kritikSaran()
    {
        
        $data = [
            'title' => "Kritik dan Saran",
            'db' => new ContactModel(),
            
        ];
        
        $data['currentPage'] = $this->request->getVar('page_kritik&saran') ? $this->request->getVar('page_kritik&saran') : 1; 

        $data['kontak'] = $data['db']->orderBy('id_ks', 'desc')->paginate(5, 'kritik&saran');
        $data['pager'] = $data['db']->pager;

        return view('Admin/kritik_saran', $data);
    }

    public function hapusKs($id)
    {
        $guest = new ContactModel();
        $delete = $guest->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('kritik_saran');
    }
}
