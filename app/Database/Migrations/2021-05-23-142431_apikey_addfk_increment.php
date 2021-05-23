<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ApikeyAddfkIncrement extends Migration
{
	public function up()
	{
		$this->forge->modifyColumn("api_keys",[
            "id"=>[
                "auto_inrement" => true
            ]
        ]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
