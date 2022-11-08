<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();

        $data = [
            'nama_login' => $session->get('nama_admin')
        ];

        return view('home', $data);
    }
}
