<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Gudang extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('gudang');
        $query   = $builder->get();
    
        $data['gudang'] = $query->getResult();
        return view('gudang/index',$data);
    }
}
