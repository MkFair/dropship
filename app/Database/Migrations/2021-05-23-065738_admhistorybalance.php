<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admhistorybalance extends Migration
{
	public function up()
	{
		$this->forge->addField([
            "id"=>[
                "type"=>"int",
                "unsigned" => true,
                "auto_increment" => true
            ],
            "user_id" => [
                "type"=>"int",
                "unsigned" => true,
            ], 
            "changed" => [
                "type"=>"datetime",
            ],
            "money" => [
                "type"=>"decimal",
                "constraing"=>"10,2",
            ],
        ]);
        $this->forge->addKey("id",true);
        $this->forge->createTable("adm_changes_balance");
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
