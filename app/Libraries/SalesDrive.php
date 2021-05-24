<?php

namespace App\Libraries;

class SalesDrive{
    function upload_products(){
        $raw_pricelist = file_get_contents("https://piperlink.salesdrive.me/export/yml/export.yml?publicKey=Pg0KT_c83F8XntdGOUw0JvrBh5fvkHm22yHLClWpfEPIUrgV5TNLga-D7gSIFajc9a");
        file_put_contents("uploads_price/export.yml",$raw_pricelist);
        $pricelist = yaml_parse($raw_pricelist);
        var_dump($pricelist);
    }
    
}
