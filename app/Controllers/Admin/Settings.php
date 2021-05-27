<?php
namespace App\Controllers\Admin;

class Settings extends AdminController{
    function index(){
        $this->display("admin/settings.php");
    }
    
}
