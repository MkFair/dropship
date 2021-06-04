<?php
namespace App\Models;

class OrdersProducts extends \CodeIgniter\Model {
    protected $table = "ordersproducts";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowedFields = ["order_id","user_id"];
    
}
