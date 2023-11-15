<?php

namespace App\Models;

use CodeIgniter\Model;

class AlamatTinggalModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'alamat_tinggal';
    protected $primaryKey       = 'kode';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["jalan", "kelurahan", "rt_rw", "Kode_pos"];
}
