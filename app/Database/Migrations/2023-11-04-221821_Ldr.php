<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ldr extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nombre'                => ['type' => 'varchar', 'constraint' => 50],
            'ip'                    => ['type' => 'varchar', 'constraint' => 15],
            'red_wifi'              => ['type' => 'varchar', 'constraint' => 50],
            'voltaje'               => ['type' => 'float', 'null' => true],
            'valorLDR'              => ['type' => 'int', 'default' => 0],
            'umbral'                => ['type' => 'int', 'default' => 950],
            'nivel_iluminacion'     => ['type' => 'float', 'default' => 950],
            'iluminacion_relativa'  => ['type' => 'float', 'null' => true],
            'created_at'            => ['type' => 'datetime'],
            'updated_at'            => ['type' => 'datetime', 'null' => true],
            'deleted_at'            => ['type' => 'datetime', 'null' => true]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('ldr', true);
    }


    // https://www.luisllamas.es/medir-nivel-luz-con-arduino-y-fotoresistencia-ldr/

    public function down()
    {
        $this->forge->dropTable('ldr', true);
    }
}
