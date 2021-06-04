<?php
namespace App\Controllers;

class Remains extends BaseController{
    
    function index(){
        $ak= new \App\Models\ApiKey();
        $this->data["api_key"] = ($ak->get_by_user($this->data["user"]->id)?$ak->get_by_user($this->data["user"]->id)->key:"");
        if( !$this->data["api_key"] ){
            $ak->regenerate($this->data["user"]->id);
            $this->data["api_key"] = $ak->get_by_user($this->data["user"]->id)->key;
        }
        $this->display("account/remains.php");
    }
    
} 
