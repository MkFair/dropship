<?php

namespace App\Libraries;

class NovaPoshta{
    protected $apikey = "87f2cb93def465a011c50f783c6971e0";
    function search($word){
        $url = "https://api.novaposhta.ua/v2.0/json/";
        $curl = new \App\Libraries\Curl($url);
        $request_data = [
            "apiKey"=>$this->apikey,
            "modelName"=>"Address",
            "calledMethod"=>"searchSettlements",
            "methodProperties"=>[
                    "CityName"=>$word,
                    "Limit"=>6
                ]
            ];
        $curl->set_data($request_data);
        $curl->exec();
        return $curl->result;
    }
    function search_warehouses( string $geopoint_id){
        $url = "https://api.novaposhta.ua/v2.0/json/";
        $curl = new \App\Libraries\Curl($url);
        $request_data = [
            "apiKey"=>$this->apikey,
            "modelName"=>"Address",
            "calledMethod"=>"getWarehouses",
            "methodProperties"=>[
                    "SettlementRef"=>$geopoint_id,
                    "Limit"=>450,
                ]
            ];
        
        $curl->set_data($request_data);
        $curl->exec();
        return $curl->result;
    }
    
}
