<?php
namespace App\Models;

class ApiKey extends \CodeIgniter\Model{
    protected $table = "api_keys";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowedFields = ["key","user_id"];
    private function generate(){
        return "000000000000000";
    }
    function get_by_user( int $user_id ){
        $c = $this->where(["user_id"=>$user_id])->first();
        return $c;
    }
    function regenerate( int $user_id){
        $c = $this->where(["user_id"=>$user_id])->countAllResults();
        $key = $this->generate();
        if($c){
            $this->set(["key"=>$key])->where(["user_id"=>$user_id])->update();
        }else{
            $this->insert(["key"=>$key,"user_id"=>$user_id]);
        }
    }
}
