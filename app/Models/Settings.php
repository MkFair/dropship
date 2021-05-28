<?php

namespace App\Models;
class Settings extends \CodeIgniter\Model{
    protected $table = "settings";
    protected $primaryKey = "id";
    protected $returnType = 'object';
    protected $allowedFields = ["liqpay_public_key","liqpay_private_key","novaposhta_private_key"];
    
}
