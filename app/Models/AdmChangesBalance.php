<?php
namespace App\Models;
class AdmhangesBalance extends \CodeIgniter\Model{
    protected $table = "adm_changes_balance";
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ["user_id","money","changed"];
    
}
