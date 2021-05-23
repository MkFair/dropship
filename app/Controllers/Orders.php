<?php
namespace App\Controllers;

class Orders extends BaseController{
    function index(){
        
        $this->display("account/orders.php");
    }
    
} 
