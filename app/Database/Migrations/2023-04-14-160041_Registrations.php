<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Registrations extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5, 
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'First_Name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Last_Name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Re_type_password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'about_us' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ], 
        ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('Registrations');
    }

    public function down()
    {
        $this->forge->dropTable('Registrations');
        // $this->dbforge->drop_table('Registrations');
    }
}
