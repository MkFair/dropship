<?php
namespace App\Controllers\Admin;

class Products extends AdminController{
    
    function import(){
        $sdl = new \App\Libraries\SalesDrive();
        $products_three = $sdl->upload_products();
        var_dump( $products_three->shop->categories );
        $m = new \App\Models\Category();
        foreach( $products_three->shop->categories->category as $category ){
            $m->add($category);
        }
        $model = new \App\Models\Product();
        foreach( $products_three->shop->offers->offer as $product ){
            echo"<br><br>";
            var_dump($product);
            $model->add($product);
        }
    }
    
}
