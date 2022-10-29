<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisBarang extends Seeder
{
    public function run()
    {
        $data = [
            [
                'jenis_barang' => 'Bola',
            ],
            [
                'jenis_barang' => 'Kaos Kaki',
            ],
            [
                'jenis_barang' => 'Jersey',
            ],
            [
                'jenis_barang' => 'Raket',
            ],
            [
                'jenis_barang' => 'Tas',
            ],
            [
                'jenis_barang' => 'Sepatu',
            ],

        ];
        $this->db->table('jenis_barang')->insertBatch($data);
    }
}
