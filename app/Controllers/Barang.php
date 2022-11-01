<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;
use App\Models\BarangModel;

class Barang extends BaseController
{
    public function __construct()
    {
        $this->barangModel = new BarangModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function create()
    {
        $data = [
            'dataKategori' => $this->kategoriModel->findAll()
        ];
        return view('barang/create', $data);
    }

    public function save()
    {
        $data = [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'id_kategori' => $this->request->getVar('id_kategori')
        ];

        $this->barangModel->insert($data);

        return redirect()->to('/barang/create');
    }
}