<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangMasukModel;
use App\Models\BarangModel;
use App\Models\SupplierModel;

class BarangMasuk extends BaseController
{
    public function __construct()
    {
        $this->barangMasukModel = new BarangMasukModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Barang Masuk',
            'barangMasuk' => $this->barangMasukModel->getBarangMasuk(),
        ];

        return view('barang_masuk/index', $data);
    }

    public function create()
    {
        $barang = new BarangModel();
        $supplier = new SupplierModel();
        $barangMasuk = new BarangMasukModel();

        $data = [
            'title' => 'Tambah Barang Masuk',
            'barang' => $barang->findAll(),
            'last_transaksi' => $barangMasuk->getLast(),
            'supplier' => $supplier->findAll()
        ];

        return view('barang_masuk/create', $data);
    }

    public function save()
    {
        $barang = new BarangModel();
        $barangLama = $barang->getByID($this->request->getVar('id_barang'));

        $barangMasuk = new BarangMasukModel();

        $data = [
            'kode_transaksi' => $this->request->getVar('kode_transaksi'),
            'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
            'id_barang' => $this->request->getVar('id_barang'),
            'jumlah_masuk' => $this->request->getVar('jumlah_masuk'),
            'id_supplier' => $this->request->getVar('id_supplier'),
        ];

        $barangMasuk->insert($data);

        $barang->update($this->request->getVar('id_barang'), [
            'jumlah_barang' => $barangLama[0]['jumlah_barang'] + $this->request->getVar('jumlah_masuk')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/barang_masuk');
    }

    public function delete($id)
    {
        $barangMasuk = new BarangMasukModel();

        $barangMasuk->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/barang_masuk');
    }

    public function export_barang_masuk()
    {
        $data = [
            'title' => 'Export Barang Masuk',
            'barangMasuk' => $this->barangMasukModel->getBarangMasuk(),
        ];

        return view('barang_masuk/export_barang_masuk', $data);
    }
}
