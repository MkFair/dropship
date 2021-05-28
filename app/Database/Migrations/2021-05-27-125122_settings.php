<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Settings extends Migration
{
	public function up()
	{
		$this->forge->addField([
            "id" => [
                "type"=>"int",
                "constraint"=>"2",
                "auto_increment"=>true,
                "unsigned"=>true,
            ],
            "liqpay_public_key"=>[
                "type"=>"varchar",
                "constraint"=>"200",
            ],
            "liqpay_private_key"=>[
                "type"=>"varchar",
                "constraint"=>"200",
            ],
            "novaposhta_private_key"=>[
                "type"=>"varchar",
                "constraint"=>"200",
            ],
        ]);
        $this->forge->addKey("id",true);
        $this->forge->createTable("settings");
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable("settings");
	}
}
