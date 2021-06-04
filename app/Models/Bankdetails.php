<?php
namespace App\Models;

class Bankdetails extends \CodeIgniter\Model{
    protected $table ="bankdetails";
    protected $returnType ="object";
    protected $allowedFields = ["name","code","invoice","IBAN","bank_code","bank_name"];
} 
