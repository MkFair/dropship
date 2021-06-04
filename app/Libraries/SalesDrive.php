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
    function create_order( array $recipient_info, array $products){
        $url = "https://piperlink.salesdrive.me/handler/";
        var_dump($recipient_info);
        var_dump($products);
       /* $products = [];
            
$products[0]["id"] = ""; // id товара
$products[0]["name"] = ""; // название товара
$products[0]["costPerItem"] = ""; // цена
$products[0]["amount"] = ""; // количество
$products[0]["description"] = ""; // описание товарной позиции в заявке
$products[0]["discount"] = ""; // скидка, задается в % или в абсолютной величине
$products[0]["sku"] = ""; // артикул (SKU) товара*/
$_salesdrive_values = [
    "form" => "BZCyQEVhNdKSc2x6PDNZgp4_6MvVfw9_BeYKYmVhwYbMuriY0F3QBHMPPT1ydVHcrTqawO",
    "getResultData" => "", // Получать данные созданной заявки (0 - не получать, 1 - получать)
    "products"=>$products, //Товары/Услуги
    "comment"=>"", // Комментарий
    "fName"=>$recipient_info["fName"], // Имя
    "lName"=>$recipient_info["lName"], // Фамилия
    "phone"=>$recipient_info["phone"], // Телефон
    "email"=>"", // Email
    "company"=>"", // Компания
    "con_comment"=>"", // Комментарий
    "prodex24source_full"=>isset($_COOKIE["prodex24source_full"])?$_COOKIE["prodex24source_full"]:"",
    "prodex24source"=>isset($_COOKIE["prodex24source"])?$_COOKIE["prodex24source"]:"",
    "prodex24medium"=>isset($_COOKIE["prodex24medium"])?$_COOKIE["prodex24medium"]:"",
    "prodex24campaign"=>isset($_COOKIE["prodex24campaign"])?$_COOKIE["prodex24campaign"]:"",
    "prodex24content"=>isset($_COOKIE["prodex24content"])?$_COOKIE["prodex24content"]:"",
    "prodex24term"=>isset($_COOKIE["prodex24term"])?$_COOKIE["prodex24term"]:"",
    "prodex24page"=>isset($_SERVER["HTTP_REFERER"])?$_SERVER["HTTP_REFERER"]:"",
];
    $curll = new Curl($url);
    $curll->set_data($_salesdrive_values);
    return $curll->exec();
    }
}
