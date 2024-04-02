<?php

namespace App\Models;

use CodeIgniter\Model;

class UlasanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ulasan_produk';
    protected $primaryKey       = 'id_ulasan';
    protected $allowedFields    = ['id_ulasan', 'id_produk', 'nama', 'email', 'rating', 'desc'];

    public function getDetail($id)
    {
        return $this
         ->select('*')
         ->where('nama_produk', $id)
         ->get()->getRowArray();
    }

    public function search($keyword)
    {
        return $this
         ->select('*')
         ->like('nama_produk', $keyword)
         ->get()->getResultArray();
    }

    public function getReview(int $perPage)
    {
        return $this
         ->select('*')
         ->join('produk', 'produk.id_produk=ulasan_produk.id_produk', 'left')
         ->orderBy('id_ulasan', 'desc')
         ->paginate($perPage, 'review_produk');
    }

    public function getReviewHome(int $perPage)
    {
        return $this
         ->select('*')
         ->join('produk', 'produk.id_produk=ulasan_produk.id_produk', 'left')
         ->where('rating', 5)
         ->orderBy('id_ulasan', 'desc')
         ->paginate($perPage, 'review_produk');
    }

    public function searchReview($keyword, int $perPage)
    {
        return $this
         ->select('*')
         ->join('produk', 'produk.id_produk=ulasan_produk.id_produk', 'left')
         ->orderBy('id_ulasan', 'desc')
         ->like('nama_produk', $keyword)
         ->paginate($perPage, 'review_produk');
    }
}
