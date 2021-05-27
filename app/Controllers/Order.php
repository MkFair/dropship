<?php
namespace App\Controllers;

class Order extends BaseController{
    function index(){
        
        $this->display("account/order.php");
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
