<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDatetimeColumnToReportsTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('reports', [
            'created_at' => [
                'type' => 'datetime',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => false,
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        //
    }
}
