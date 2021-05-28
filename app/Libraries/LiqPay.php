<?php
namespace App\Libraries;
class LiqPay{
    protected $public_key = "sandbox_i99902494325";
    protected $private_key = "sandbox_Ggki7SB47FM3MF1lFLOZI36cC82HLfAopZ3tV97u";
    function get_payform(int $order_id, float $amount){
        $liqpay = new \LiqPay($this->public_key, $this->private_key);
        $html = $liqpay->cnb_form(array(
        'action'         => 'pay',
        'amount'         => $amount,
        'currency'       => 'UAH',
        'description'    => 'description text',
        'order_id'       => 'order_id_1',
        'version'        => '3'
        ));
        return $html."<script>document.getElementsByTagName('form')[0].submit()</script>";
    }
    function check_callback($data,$s){
        $sign = base64_encode( sha1( 
            $this->private_key .  
            $data . 
            $this->private_key 
            , 1 
        ));
        return $sign==$s;
    }
}
