<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddReportTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'patient' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'birth_date' => [
                'type' => 'DATE',
            ],
            'exam' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'doctor' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'status' => [
                'type' => 'INT',
                'default' => 1,
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('reports', true);
    }

    public function down()
    {
        $this->forge->dropTable('report');
    }
}
