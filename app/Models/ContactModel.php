<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kritik_saran';
    protected $primaryKey       = 'id_ks';
    protected $allowedFields    = ['id_ks', 'nama_ks', 'email_ks', 'dsc_ks'];

    
}
