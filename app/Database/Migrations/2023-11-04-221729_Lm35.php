<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lm35 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nombre'            => ['type' => 'varchar', 'constraint' => 50],
            'ip'                => ['type' => 'varchar', 'constraint' => 15],
            'red_wifi'          => ['type' => 'varchar', 'constraint' => 50],
            'voltaje'           => ['type' => 'float', 'null' => true],
            'temperatura'       => ['type' => 'float', 'default' => 0],
            'created_at'        => ['type' => 'datetime'],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('lm35', true);
    }


    public function down()
    {
        $this->forge->dropTable('lm35', true);
    }
}
