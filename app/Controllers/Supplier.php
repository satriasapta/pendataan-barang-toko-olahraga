<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SupplierModel;

class Supplier extends BaseController
{
    public function index()
    {
        $supplier = new SupplierModel();

        $data = [
            'title' => 'Data Supplier',
            'supplier' => $supplier->findAll(),
        ];

        return view('supplier/index', $data);
    }

    public function create()
    {
        $supplier = new SupplierModel();

        $data = [
            'title' => 'Tambah Data Supplier',
            'last_supplier' => $supplier->getLast(),
        ];

        return view('supplier/create', $data);
    }

    public function save()
    {
        $supplier = new SupplierModel();

        $data = [
            'kode_supplier' => $this->request->getVar('kode_supplier'),
            'nama_supplier' => $this->request->getVar('nama_supplier'),
            'alamat_supplier' => $this->request->getVar('alamat_supplier')
        ];

        $supplier->insert($data);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/data_supplier');
    }

    public function edit($id)
    {
        $supplier = new SupplierModel();

        $data = [
            'title' => 'Edit Data Supplier',
            'supplier' => $supplier->getByID($id)
        ];

        return view('supplier/edit', $data);
    }

    public function update($id)
    {
        $supplier = new SupplierModel();

        $supplier->update($id, [
            'nama_supplier' => $this->request->getVar('nama_supplier'),
            'alamat_supplier' => $this->request->getVar('alamat_supplier')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/data_supplier');
    }

    public function delete($id)
    {
        $supplier = new SupplierModel();

        $supplier->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/data_supplier');
    }
}
