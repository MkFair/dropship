<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ApiKeyTb extends Migration
{
	public function up()
	{
		$this->forge->addField([
            "id" =>[
                "type"=>"int",
                "constraint"=>"10",
                "unsigned"=>true,
                "auto_increment"=>true
            ],
            "user_id"=>[
                "type"=>"int",
                "unsigned"=>true,
            ],
            "key"=>[
                "type"=>"varchar",
                "constraint"=>"40",
            ]
        ]);
        $this->forge->addKey("id",true);
        $this->forge->createTable("api_keys");
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable("api_keys");
	}
}
