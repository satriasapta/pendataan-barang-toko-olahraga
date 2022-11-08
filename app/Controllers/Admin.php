<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{
    public function index()
    {
        $adminModel = new AdminModel();

        $data = [
            'title' => 'Data Admin',
            'admin' => $adminModel->findAll(),
        ];

        return view('admin/index', $data);
    }

    public function create()
    {
        helper(['form']);

        $data = [
            'title' => 'Tambah Data Admin'
        ];

        return view('admin/create', $data);
    }

    public function save()
    {
        helper(['form']);

        $adminModel = new AdminModel();

        $data = [
            'nama_admin' => $this->request->getVar('nama_admin'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];

        // dd($data);

        $adminModel->insert($data);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/data_admin');
    }
}
