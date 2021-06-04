<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bankdetail extends Migration
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
                "constraint" => "300",
            ],
            "code" => [
                "type"=>"varchar",
                "constraint" => "100",
            ],
            "invoice" => [
                "type"=>"varchar",
                "constraint" => "130",
            ],
            "IBAN" => [
                "type"=>"varchar",
                "constraint" => "160",
            ],
            "bank_code" => [
                "type"=>"varchar",
                "constraint" => "160",
            ],
            "bank_name" => [
                "type"=>"varchar",
                "constraint" => "360",
            ],
           
            
        ]);
        $this->forge->addKey("id",true);
        $this->forge->createTable("bankdetails");
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable("bankdetails");
	}
}
