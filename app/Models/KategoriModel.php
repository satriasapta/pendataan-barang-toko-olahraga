<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kategori';
    protected $primaryKey       = 'id_kategori';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['kode_jenis', 'jenis_barang'];

    public function getLast()
    {
        $data = $this->db->table($this->table)
            ->get()
            ->getLastRow();

        // dd($data);
        return $data;
    }
}
