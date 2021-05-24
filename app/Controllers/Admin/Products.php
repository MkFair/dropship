<?php
namespace App\Controllers\Admin;

class Products extends AdminController{
    
    function import(){
        $sdl = new \App\Libraries\SalesDrive();
        $sdl->upload_products();
        
    }
    
}
