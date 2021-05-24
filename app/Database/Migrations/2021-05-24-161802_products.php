<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
	public function up()
	{
		$this->forge->addField([
            "id" => [
                "type" => "int",
                "constraint" => 8,
                "auto_inrement" => true,
                "unsigned" => true
            ],
            "name" => [
                "type" => "varchar",
                "constraint" => 80,
            ],
            "description" => [
                "type" => "text",
            ]
            "price" => [
                "type" => "decimal",
                "constraint" => "10,2",
            ]
            "currencyId" => [
                "type" => "varchar",
                "constraint" => 6,
            ]
            "categoryId" => [
                "type" => "int",
                "constraint" => 6,
                "unsigned" => true,
                "default" => 0
            ]
        ]);
        $this->forge->addKey("id",true);
        $this->forge->createTable("products");
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->createTable("drop");
	}
}
