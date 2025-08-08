<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddReportTextColumnToReportsTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('reports', [
            'report_text' => [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'doctor',
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('reports', 'report_text');
    }
}
