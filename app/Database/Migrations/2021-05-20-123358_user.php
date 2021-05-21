<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            "phone" =>[
                'type'           => 'VARCHAR',
                'constraint' => '30',
            ],
            "password" =>[
                'type'           => 'VARCHAR',
                'constraint' => '100',
            ],
            "role_id" =>[
                'type'           => 'INT',
                'constraint' => '1',
                'default' => 0
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
