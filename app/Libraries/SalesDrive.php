<?php

namespace App\Libraries;

class SalesDrive{
    
    function upload_products(){
        if( !file_exists("uploads_price/export.yml") ){
            $raw_pricelist = file_get_contents("https://piperlink.salesdrive.me/export/yml/export.yml?publicKey=Pg0KT_c83F8XntdGOUw0JvrBh5fvkHm22yHLClWpfEPIUrgV5TNLga-D7gSIFajc9a");
            file_put_contents("uploads_price/export.yml",$raw_pricelist);
        }else{
            $raw_pricelist = file_get_contents("uploads_price/export.yml");
        }
        $pricelist = simplexml_load_string($raw_pricelist);
        return $pricelist;
    }
    
}
