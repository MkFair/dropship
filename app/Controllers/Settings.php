<?php
namespace App\Controllers;

class Settings extends BaseController{
    function index(){
        $ak= new \App\Models\ApiKey();
        $this->data["api_key"] = ($ak->get_by_user($this->data["user"]->id)?$ak->get_by_user($this->data["user"]->id)->key:"");
        $this->display("account/settings.php");
    }
    function create_key(){
        $ak= new \App\Models\ApiKey();
        $ak->regenerate($this->data["user"]->id);
        $ap = $ak->get_by_user($this->data["user"]->id);
        echo $ap->key;
    }
    function change_stat_period(){
        $request = \Config\Services::request();
        if( $request->getPost("period")>=1 and  $request->getPost("period")<=5 ){
            $um= new \App\Models\User();
            $um->update_user($this->data["user"]->id,["stat_time"=>$request->getPost("period")]);
            echo "200";
        }
    }
    function change_password(){
        $request = \Config\Services::request();
        if($request->getPost("password") == $request->getPost("confirm_password")){
            $um= new \App\Models\User();
            $um->change_password($this->data["user"]->id, $request->getPost("password"));
            echo "200";
        }
    }
} 
