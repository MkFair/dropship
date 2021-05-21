<?php
namespace App\Controllers;

class Test extends BaseController{
    function index(){
        $model = new \App\Models\User();
        $data=[
            "phone" => "+79000000000",
            "password" => "+79000000000"
        ];
        $model->insert($data);
    }
}
