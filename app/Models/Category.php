<?php

namespace App\Models;
class Category extends \CodeIgniter\Model{
    protected $table = "categories";
    protected $primaryKey = "id";
    protected $returnType = 'object';
    protected $allowedFields = ["name","cat_id"];
    function add( object $category ){
        $this->insert([
            "name"=>$category,
            "cat_id"=>$category->attributes()["id"],
        ]);
    }
}
