<?php
namespace App\Controllers\Admin;

class Settings extends AdminController{
    function index(){
        $model = new \App\Models\Settings();
        $this->data["s"] = $model->where(["id"=>1])->first();
        
        $this->display("admin/settings.php");
    }
    function handler(){
        if( $this->request->getMethod() == "post" ){
            $model = new \App\Models\Settings();
            if( $model->countAllResults() ){
                $model->update(1,$this->request->getPost());
            }else{
                $model->insert($this->request->getPost());
            }
        }
        return redirect()->to("/admin/settings");
    }
}
