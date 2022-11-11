<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'supplier';
    protected $primaryKey       = 'id_supplier';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_supplier', 'nama_supplier', 'alamat_supplier'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getByID($id)
    {
        $data = $this->db->table($this->table)->where(['id_supplier' => $id])->get()->getResultArray();

        return $data;
    }

    public function getLast()
    {
        $data = $this->db->table($this->table)
            ->get()
            ->getLastRow();

        // dd($data->kode_supplier);
        return $data;
    }
}
