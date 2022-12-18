<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Administrator extends Migration
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
            'password' => [
                'type' => 'VARCHAR',
				'constraint' => '255',
            ]
        ]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('administrator', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('administrator');
    }
}
