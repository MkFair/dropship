<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
	public function up()
	{
		$this->forge->addField([
            "id" => [
                "type"=>"int",
                "constraint" => 8,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "name" => [
                "type"=>"varchar",
                "constraint" => "100",
            ],
            "cat_id" => [
                "type"=>"int",
                "constraint" => 8,
                "unsigned" => true,
            ],
           
            
        ]);
        $this->forge->addKey("id",true);
        $this->forge->createTable("categories");
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable("categories");
	}
}
