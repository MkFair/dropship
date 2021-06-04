<?php
namespace App\Models;

class Orders extends \CodeIgniter\Model {
    protected $table = "orders";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowedFields = ["phone","fName","lName","city_delivery_id","warehouse_delivery_id","created_on","payeer_delivery","COD"];
    
}
