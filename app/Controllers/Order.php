<?php
namespace App\Controllers;

class Order extends BaseController{
    function index(){
        $cart_lib = new \App\Libraries\Cart();
        $this->data["cart_products"] = $cart_lib->products();
        $this->display("account/order.php");
    }
    private function to_crm_format( array $products ){
        $result = [];
        foreach($products as $product){
            $result[] = [
                "id"=>$product->id,
                "name"=>$product->name,
                "costPerItem"=>$product->price,
                "amount"=>$product->number,
                "sku"=>$product->offer_id,
            ];
        }
        return $result;
    }
    function handler(){
        if($this->request->getMethod() == "post"){
            if( $this->request->getPost("fName") and $this->request->getPost("phone")){
                $sd = new \App\Libraries\SalesDrive();
                $cartl = new \App\Libraries\Cart();
                $products = $cartl->products();
                if($products){
                    $products = $this->to_crm_format($products);
                    var_dump($sd->create_order(
                        ["fName"=>$this->request->getPost("fName"),"lName"=>$this->request->getPost("lName"),"phone"=>$this->request->getPost("phone")],
                        $products
                    )); 
                }
            }
        }
    }
    function test(){
        $sd = new \App\Libraries\SalesDrive();
        var_dump($sd->create_order()); 
    }
    function search_warehouses(){
        $request = \Config\Services::request();
        if( $request->getGet("search_warehouses") ){
            $np = new \App\Libraries\NovaPoshta();
            $result = $np->search_warehouses($request->getGet("search_warehouses"));
            $res = json_decode($result);
            //var_dump($result);
            if($res->data){
                $result_points = ["results"=>[],"more"=>false];
                foreach($res->data as $k=>$point_info){
                    if( mb_stripos($point_info->ShortAddress , $request->getGet("name_filter"))!==FALSE )
                        $result_points["results"][] = ["text"=>$point_info->ShortAddress,"id"=>$point_info->Ref];
                }
                return $this->response->setJSON($result_points);
            }
        }
    }
    function city_search(){
        $request = \Config\Services::request();
        if(strlen($request->getGet("search_city"))>2){
            $np = new \App\Libraries\NovaPoshta();
            $result = $np->search($request->getGet("search_city"));
            $res = json_decode($result);
            if($res->data[0]->Addresses){
                $result_points = ["results"=>[],"more"=>false];
                foreach($res->data[0]->Addresses as $k=>$point_info){
                    $result_points["results"][] = ["id"=>$point_info->Ref,"text"=>$point_info->Present];
                }
                return $this->response->setJSON($result_points);
            }
        }
    }
} 
