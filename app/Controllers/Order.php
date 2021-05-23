<?php
namespace App\Controllers;

class Order extends BaseController{
    function index(){
        
        $this->display("account/order.php");
    }
    
} 
