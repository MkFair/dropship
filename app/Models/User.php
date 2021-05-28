<?php
namespace App\Models;

use \CodeIgniter\Model;

class User extends Model{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['phone', 'password',"balance"];
    public function update_user( int $user_id,array $data ){
        if( isset($data["password"]) and empty($data["password"]) )
            unset($data["password"]);
        $u = $this->where(["id"=>$user_id])->first();
        if( $u->balance != $data["balance"] ){
           $m = new AdmChangesBalance();
            $m->insert(["user_id"=>$user_id,"changed"=>date("Y-m-d H:i:s"),"money"=>$data["balance"]-$u->balance]);
        }
        $this->update($user_id,$data);
    }
    public function create_user($phone,$password){
        return $this->insert(['phone'=>$phone, 'password'=>$password]);
        
    }
    public function change_password( int $user_id, string $password){
        $this->where(["user_id"=>$user_id])->update(["password"=>$password]);
    }
}
