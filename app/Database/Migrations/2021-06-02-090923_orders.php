<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
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
            "fName" =>[
                'type'           => 'VARCHAR',
                'constraint' => '100',
            ],
            "lName" =>[
                'type'           => 'VARCHAR',
                'constraint' => '100',
            ],
            "city_delivery_id" =>[
                'type'           => 'VARCHAR',
                'constraint' => '100',
            ],
            "warehouse_delivery_id" =>[
                'type'           => 'VARCHAR',
                'constraint' => '100',
            ],
            "created_on" =>[
                'type'           => 'datetime',
            ],
            'payeer_delivery'          => [
                'type'           => 'INT',
                'constraint'     =>1,
                'unsigned'       => true,
            ],
            'COD'          => [
                'type'           => 'BOOLEAN',
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('orders');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('orders');
	}
}
