<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
				'constraint' => '5',
				'auto_increment' => true
            ],
            'nama' => [
                'type' => 'VARCHAR',
				'constraint' => '255',
            ],
            'stok' => [
                'type' => 'INT',
				'constraint' => '255',
            ],
            'gambar' => [
                'type' => 'VARCHAR',
				'constraint' => '255',
            ]
        ]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('barang', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
