<?php

namespace App\Database\Seeds;

use App\Models\AdminModel;
use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $adminModel = new AdminModel();

        $data = [
            'nama_admin' => 'Admin',
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
        ];

        $adminModel->insert($data);
    }
}
