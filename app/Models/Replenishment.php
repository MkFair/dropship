<?php
namespace App\Models;
class Replenishment extends \CodeIgniter\Model{
    protected $table="replenishment";
    protected $primaryKey="id";
    protected $returnType="object";
    protected $allowedFields=["amount","status","user_id","created_on"];
    
    
}
