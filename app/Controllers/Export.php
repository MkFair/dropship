<?php
namespace App\Controllers;

class Export extends BaseController{
    
    function index( $apikey, $format ){
        
        if( strlen($apikey)>0 and in_array( $format, ["json","csv","xml"] ) ){
            $apik_m = new \App\Models\ApiKey();
            $api_res = $apik_m->where(["key"=>$apikey])->first();
            if( $api_res ){
                $method = "to_".$format;
                $result = $this->$method();
                return $result;
            }
            
        }
    }
    protected function to_csv(){
        $data = $this->get_from_db();
        $data = $this->csvstr($data);
        return $this->response->download("export_".date("Y-m-d").".csv",$data);
    }
    protected function to_xml(){
        $encoders = [new \Symfony\Component\Serializer\Encoder\XmlEncoder()];
        $encoders[0]->as_collection=true;
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer()];
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, $encoders);
        $data = $this->get_from_db();
        $data["products"]["product"] = $data["products"];
        $xmlContent = $serializer->serialize($data, 'xml');
        return $this->response->setXML($xmlContent);
    }
    protected function csvstr(array $fields) : string
    {
        $f = fopen('php://memory', 'r+');
        fputs($f, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
        $products_keys = ["id","name","description","price","currencyId","categoryId"];
        
        if (fputcsv($f, $products_keys,";") === false) {
            return false;
        }
        $category_keys ="";
        foreach($fields["products"] as $product){
            $farr = [];
            foreach($products_keys as $key){
                $farr[] = $product->$key;
            }
            if (fputcsv($f, $farr,";") === false) {
                return false;
            }
        }
        rewind($f);
        $csv_line = stream_get_contents($f);
        return rtrim($csv_line);
    }
    protected function get_from_db(){
        $m = new \App\Models\Category();
        $data["categories"] = $m->select("id,name")->findAll();
        $m = new \App\Models\Product();
        $data["products"] = $m->select("id,name,description,price,currencyId,categoryId")->findAll();
        return $data;
    }
    protected function to_json(){
        $data = $this->get_from_db();
        return $this->response->setJSON($data);
    }
} 
