<?php
namespace App\Controllers;

class Products extends BaseController{
    function index(){
        $m = new \App\Models\Product();
        $this->data["products"] = $m->findAll();
        $this->display("account/products.php");
    }
    
}
