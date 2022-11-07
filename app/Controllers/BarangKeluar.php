<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangKeluarModel;
use App\Models\BarangModel;

class BarangKeluar extends BaseController
{
    public function index()
    {
        $barangKeluar = new BarangKeluarModel();

        $data = [
            'title' => 'Data Barang Keluar',
            'barangKeluar' => $barangKeluar->getBarangKeluar()
        ];

        return view('barang_keluar/index', $data);
    }

    public function create()
    {
        $barang = new BarangModel();

        $data = [
            'title' => 'Tambah Barang Masuk',
            'barang' => $barang->findAll(),
        ];

        return view('barang_keluar/create', $data);
    }

    public function save()
    {
        $barang = new BarangModel();
        $barangLama = $barang->getByID($this->request->getVar('id_barang'));

        $barangKeluar = new BarangKeluarModel();

        if ($this->request->getVar('jumlah_keluar') > $barangLama[0]['jumlah_barang']) {
            session()->setFlashdata('pesan', 'Gagal menambahkan data transaksi karena stok tidak memenuhi. Silakan cek stok barang pada menu Data Barang !');

            return redirect()->to('/barang_keluar');
        }

        $data = [
            'tanggal_keluar' => $this->request->getVar('tanggal_keluar'),
            'id_barang' => $this->request->getVar('id_barang'),
            'jumlah_keluar' => $this->request->getVar('jumlah_keluar'),
            'tujuan' => $this->request->getVar('tujuan'),
        ];

        $barangKeluar->insert($data);

        $barang->update($this->request->getVar('id_barang'), [
            'jumlah_barang' => $barangLama[0]['jumlah_barang'] - $this->request->getVar('jumlah_keluar')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/barang_keluar');
    }

    public function delete($id)
    {
        $barangKeluar = new BarangKeluarModel();

        $barangKeluar->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/barang_keluar');
    }
}
