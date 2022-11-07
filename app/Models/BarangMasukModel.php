<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangMasukModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'barang_masuk';
    protected $primaryKey       = 'id_transaksi';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_barang', 'nama_barang', 'jumlah_masuk', 'id_supplier', 'tanggal_masuk'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getBarangMasuk()
    {
        $data = $this->db->table($this->table)
            ->join('barang', 'barang.id_barang = barang_masuk.id_barang')
            ->join('supplier', 'supplier.id_supplier = barang_masuk.id_supplier')
            ->get()
            ->getResultArray();

        // dd($data);
        return $data;
    }
}
