<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'produk';
    protected $primaryKey       = 'id_produk';
    protected $allowedFields    = ['id_produk', 'nama_produk', 'dsc_produk', 'stok_produk', 'harga_produk', 'foto_produk'];

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
}
