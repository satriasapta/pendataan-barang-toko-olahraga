<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login EA Sport'
        ];

        return view('login/index', $data);
    }

    public function auth()
    {
        $session = session();
        $adminModel = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $adminModel->where('username', $username)->first();

        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id_admin'       => $data['id_admin'],
                    'nama_admin'     => $data['nama_admin'],
                    'username'       => $data['username'],
                    'logged_in'      => TRUE,
                ];
                $session->set($ses_data);
                return redirect()->to('/');
            } else {
                $session->setFlashdata('msg', 'Password Salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email Tidak Ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
