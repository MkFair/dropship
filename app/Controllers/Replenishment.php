<?php
namespace App\Controllers;

class Replenishment extends BaseController{
    function index(){
        
        $this->display("account/replenishment.php");
    }
    function handler(){
        if( $this->request->getPost("amount") > 0 ){
            $m = new \App\Models\Replenishment();
            $order_id = $m->insert([
                            "user_id"=>$this->data["user"]->id,
                            "status"=>0,
                            "amount"=>(float)$this->request->getPost("amount"),
                            "created_on"=>date("Y-m-d H:i:s")
                        ]);
            $l = new \App\Libraries\LiqPay();
            echo $l->get_payform($order_id,(float)$this->request->getPost("amount"));
        }
    }
} 
