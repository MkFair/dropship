<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFieldStattimeToUser extends Migration
{
	public function up()
	{
        $fields = [
            "stat_time" =>[
                "type" => "int",
                
            ]
        ];
		$this->forge->addColumn("users",$fields);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
