<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gudang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_gudang' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_barang' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_barang' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jumlah' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->forge->addKey('id_gudang', true);
        // $this->forge->addForeignKey('jenis_barang', 'jenis_barang','id');
        $this->forge->createTable('gudang');
    }

    public function down()
    {
        $this->forge->dropTable('gudang');
    }
}
