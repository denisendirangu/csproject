<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class Role extends Migration
{
    public function up()
    {
        
        $this->forge->addField([
            'role_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            /*'role_id' => [
                'type' => 'BIGINT',
                'constraint' => 11,
                'unsigned' => true,
                'default' => 1,
                //'null' => true,
            ],*/


            'role_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                //'null' => true,
            ],
            'role_description' => [
                'type' => 'VARCHAR',
                'constraint' => '155',
                //'null' => true,
            ],
            'role_status' => [
                'type' => 'INT',
                'constraint'=>1,
            ],
        ]);
        $this->forge->addPrimaryKey('role_id', true);
        $this->forge->createTable('role');
    }

    public function down()
    {
        $this->forge->dropTable('role');
    }
}
