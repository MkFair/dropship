<?php

namespace App\Controllers\Admin;

class Bankdetails extends AdminController{

	function index(){
        $m = new \App\Models\Bankdetails();
        $this->data["bankdetails"] = $m->find(1);
        $this->display("admin/bankdetails.php");
	}
    function handler(){
        
        if( $this->request->getMethod() == "post" ){
            $m = new \App\Models\Bankdetails();
            if( $m->countAllResults() )
                $m->update(1,$this->request->getPost());
            else{
                $m->insert($this->request->getPost());
                
            }
        }
        return redirect()->to("/admin/bankdetails");
    }
}
