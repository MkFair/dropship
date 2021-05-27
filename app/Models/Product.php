<?php
namespace App\Models;

class Product extends \CodeIgniter\Model {
    protected $table = "products";
    protected $primaryKey = "id";
    protected $allowedFields = ["name","price","description","currencyId","categoryId","offer_id"];
    function add( object $offer ){
        
        $this->insert([
            "name"=>$offer->name,
            "price"=>$offer->price,
            "offer_id"=>str_replace("id_","",$offer->attributes()["id"]),
            "description"=>$offer->description,
            "currencyId"=>$offer->currencyId,
            "categoryId"=>$offer->categoryId,
        ]);
        
    }
}
