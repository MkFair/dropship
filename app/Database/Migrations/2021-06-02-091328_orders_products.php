<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrdersProducts extends Migration
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
            "product_id" =>[
                'type'           => 'INT',
                'constraint' => '5',
            ],
            "order_id" =>[
                'type'           => 'INT',
                'constraint' => '5',
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('orders_products');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->createTable('orders_products');
	}
}
