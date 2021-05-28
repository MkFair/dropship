<?php
namespace App\Controllers;

class Payments extends BaseController{
    
    function index(){
        $this->display("account/payments.php");
    }
    
} 
