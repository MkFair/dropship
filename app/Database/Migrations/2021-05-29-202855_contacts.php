<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contacts extends Migration
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
            "departament" => [
                "type"=>"varchar",
                "constraint" => "100",
            ],
            "fio" => [
                "type"=>"varchar",
                "constraint" => "100",
            ],
            "phone" => [
                "type"=>"varchar",
                "constraint" => "30",
            ],
            "details" => [
                "type"=>"varchar",
                "constraint" => "130",
            ],
           
            
        ]);
        $this->forge->addKey("id",true);
        $this->forge->createTable("contacts");
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable("contacts");
	}
}
