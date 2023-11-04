<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Hcsr04 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nombre'            => ['type' => 'varchar', 'constraint' => 50],
            'ip'                => ['type' => 'varchar', 'constraint' => 15],
            'red_wifi'          => ['type' => 'varchar', 'constraint' => 50],
            'voltaje'           => ['type' => 'float', 'null' => true],
            'distancia'         => ['type' => 'float', 'default' => 0],
            'created_at'        => ['type' => 'datetime'],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('hcsr04', true);
    }


    public function down()
    {
        $this->forge->dropTable('hcsr04', true);
    }
}
