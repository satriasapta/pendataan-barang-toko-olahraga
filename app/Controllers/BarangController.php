<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BarangController extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function jenisbarang()
    {
        $builder = $this->db->table('jenis_barang');
        $query   = $builder->get();

        $data['jenisbarang'] = $query->getResult();
        return view('jenisBarang',$data);
    }
}
