<?php

namespace App\Library;

class SalesDrive{
    function upload_products(){
        $pricelist = file_get_contents("https://piperlink.salesdrive.me/export/yml/export.yml?publicKey=Pg0KT_c83F8XntdGOUw0JvrBh5fvkHm22yHLClWpfEPIUrgV5TNLga-D7gSIFajc9a");
        file_put_contents("uploads_price/export.yml",$pricelist);
    }
    
}
