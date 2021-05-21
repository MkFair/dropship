<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
        $column =[
            "balance" =>[
                "type"=>"decimal",
                "constraint"=>"10,2",
                "default"=>0
            ]
        ];
		$this->forge->addColumn("users",$column);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
