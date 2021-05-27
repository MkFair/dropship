<?php
namespace App\Controllers;

class Signin extends BaseController{
    function index(){
        $session = session();
        if( $session->has("user_id") )
            return redirect()->to("/orders");
        return view("login/signin.php");
    }
    function handler(){
        $resp = "error";
        $request = \Config\Services::request();
        if( $request->getMethod()=="post" ){
            $formdata = $request->getPost();
            if( !empty($formdata["phone"]) and !empty($formdata["password"]) ){
                $model = new \App\Models\User();
                $user = $model->where(["phone"=>$formdata["phone"]])->first();
                if( $user and $formdata["password"]==$user->password ){
                    $session = session();
                    $session->set("user_id",$user->id);
                    $resp = "ok";
                }
            }
        }
        echo $resp ;
    }
}
