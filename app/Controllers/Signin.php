<?php
namespace App\Controllers;

class Signin extends BaseController{
    function index(){
        return view("login/signin.php");
    }
    function handler(){
        $resp = "error";
        $request = \Config\Services::request();
        if( $request->method=="post" ){
            $formdata = $request->getPost();
            if( !empty($formdata["phone"]) and !empty($formdata["password"]) ){
                if( $formdata["phone"]=="+79000000000" and $formdata["password"]=="+79000000000" ){
                    $resp = "ok";
                }
            }
        }
        echo $resp ;
    }
}
