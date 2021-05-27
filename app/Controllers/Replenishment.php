<?php
namespace App\Controllers;

class Replenishment extends BaseController{
    function index(){
        
        $this->display("account/replenishment.php");
    }
    function handler(){
        $l = new \App\Libraries\LiqPay();
        echo $l->get_payform(100);
    }
} 
