<?php
namespace App\Controllers;

class Products extends BaseController{
    function index(){
        $m = new \App\Models\Product();
        $this->data["products"] = $m->findAll();
        $this->display("account/products.php");
    }
    function clean_cart(){
        $ctl = new \App\Libraries\Cart();
        $ctl->clean();
    }
    function add_to_cart(){
        if( $this->request->getGet("product_id") ){
            $product_id = intval($this->request->getGet("product_id"));
            $m = new \App\Models\Product();
            $product = $m->find($product_id);
            if( $product ){
                $ctl = new \App\Libraries\Cart();
                $ctl->add($product_id);
            }
        }
    }
    function remove_from_card(){
        
    }
}
