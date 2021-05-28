<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Replenishment extends Migration
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
            "amount" => [
                "type"=>"decimal",
                "constraint" => "10,2",
            ],
            "status" => [
                "type"=>"int",
                "default" => 0,
                "unsigned" => true,
                "constraint" => 2,
            ],
            "user_id" => [
                "type"=>"int",
                "constraint" => 7,
            ],
            "created_on"=>[
                "type"=>"datetime",
            ]
        ]);
        $this->forge->addKey("id",true);
        $this->forge->createTable("replenishment");
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable("replenishment");
	}
}
