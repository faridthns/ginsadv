<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunModel extends Model
{
    protected $table = "akun";
    protected $primaryKey = "userid";
    protected $allowedFields = ['userid', 'username', 'nama', 'password', 'role'];

    public function getAkun($userid = false)
    {
        if ($userid == false) {
            return $this->findAll();
        }
        return $this->where(['userid' => $userid])->first();
    }

    public function deleteAkun($userid)
    {
        $query = $this->db->table('akun')->delete(array('userid' => $userid));
        return $query;
    }
}
