<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddProductRawId extends Migration
{
	public function up()
	{
		$this->forge->addColumn("products",[
            "offer_id" => [
                "type"=>"int",
                "constraint" =>10,
                "unsigned" => true
            ]
        ]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
