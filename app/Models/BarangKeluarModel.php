<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangKeluarModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'barang_keluar';
    protected $primaryKey       = 'id_transaksi';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_transaksi', 'id_barang', 'jumlah_keluar', 'tanggal_keluar', 'tujuan'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getBarangKeluar()
    {
        $data = $this->db->table($this->table)
            ->join('barang', 'barang.id_barang = barang_keluar.id_barang')
            ->get()
            ->getResultArray();

        // dd($data);
        return $data;
    }

    public function getLast()
    {
        $data = $this->db->table($this->table)
            ->get()
            ->getLastRow();

        // dd($data);
        return $data;
    }
}
