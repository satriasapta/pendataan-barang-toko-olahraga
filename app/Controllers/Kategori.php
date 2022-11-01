<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kategori extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('kategori');
        $query   = $builder->get();

        $data['kategori'] = $query->getResult();
        return view('jenisbarang/index', $data);
    }

    public function create()
    {
        return view('jenisbarang/create');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->db->table('kategori')->insert($data);

        return redirect()->to(site_url('jenisbarang'))->with('success', 'Data Berhasil Disimpan');
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('kategori')->getWhere(['id_kategori' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['kategori'] = $query->getRow();
                return view('jenisbarang/edit', $data);
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
        $this->db->table('kategori')->where(['id_kategori' => $id])->update($data);

        return redirect()->to(site_url('jenisbarang'))->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $this->db->table('kategori')->where(['id_kategori' => $id])->delete();

        return redirect()->to(site_url('jenisbarang'))->with('success', 'Data Berhasil Dihapus');
    }
}
