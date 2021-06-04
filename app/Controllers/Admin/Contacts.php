<?php

namespace App\Controllers\Admin;

class Contacts extends AdminController{

	function index(){
        
        $this->display("admin/contacts.php");
	}
    function handler(){
        if( $this->request->getMethod() == "post" ){
            
        }
    }
}
