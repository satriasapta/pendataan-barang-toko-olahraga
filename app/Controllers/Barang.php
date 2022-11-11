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

    public function index()
    {
        $data = [
            'barang' => $this->barangModel->getBarang(),
        ];

        return view('barang/index', $data);
    }

    public function create()
    {
        $barang = new BarangModel();

        $data = [
            'last_barang' => $barang->getLast(),
            'dataKategori' => $this->kategoriModel->findAll()
        ];
        return view('barang/create', $data);
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('barang')->getWhere(['id_barang' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data = [
                    'dataKategori' => $this->kategoriModel->findAll(),
                    'barang' => $query->getRow()
                ];
                return view('barang/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);
        $this->db->table('barang')->where(['id_barang' => $id])->update($data);

        return redirect()->to(site_url('barang'))->with('success', 'Data Berhasil Diupdate');
    }

    public function save()
    {
        $data = [
            'kode_barang' => $this->request->getVar('kode_barang'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'id_kategori' => $this->request->getVar('id_kategori')
        ];

        $this->barangModel->insert($data);

        session()->setFlashdata('msg', 'Data berhasil ditambahkan');

        return redirect()->to('/barang');
    }

    public function destroy($id)
    {
        $this->db->table('barang')->where(['id_barang' => $id])->delete();

        return redirect()->to(site_url('barang'))->with('success', 'Data Berhasil Dihapus');
    }
}
