<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'barang';
    protected $primaryKey       = 'id_barang';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['kode_barang', 'nama_barang', 'jumlah_barang', 'id_kategori'];

    public function getBarang()
    {
        $dataBarang = $this->db->table($this->table)
            ->join('kategori', 'kategori.id_kategori = barang.id_kategori')
            ->get()
            ->getResultArray();

        return $dataBarang;
    }

    public function getByID($id)
    {
        $data = $this->db->table('barang')
            ->where(['id_barang' => $id])
            ->get()
            ->getResultArray();

        return $data;
    }

    public function getLast()
    {
        $data = $this->db->table($this->table)
            ->get()
            ->getLastRow();

        return $data;
    }
}
