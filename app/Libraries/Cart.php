<?php

namespace App\Libraries;

class Cart{
    function clean(){
        session()->remove("products");
    }
    function all(){
        return $s->get("products");
    }
    function add( int $product_id){
        $s = session();
        if( $s->has("products") ){
            $products = $s->get("products");
            if( $products and is_array($products) ){
                if( !empty($products[$product_id]) ){
                    $products[$product_id] += 1;
                }
                else $products[$product_id] = 1;
            }
        }else{
            $products = [$product_id=>1];
        }
        $s->set("products",$products);
    }
    function products(){
        $s = session();
        $products = [];
        if( !empty($s->get("products")) and is_array($s->get("products")) ){
            $ids = array_keys($s->get("products"));
            
            $m = new \App\Models\Product();
            $products = $m->find($ids);
            foreach( $products as $k=>$product){
                $products[$k]->number = $s->get("products")[$product->id];
            }
        }
        return $products;
    }
}
