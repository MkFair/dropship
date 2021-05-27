<?php

namespace App\Libraries;

class Curl{
    protected $curl = null;
    protected $headers = [];
    function __construct( string $url){
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curl, CURLOPT_URL,  $url);
        //curl_setopt($this->curl, CURLOPT_SAFE_UPLOAD, true);
        //curl_setopt($this->curl, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($this->curl, CURLOPT_POST, 1);
        //curl_setopt($this->curl, CURLOPT_TIMEOUT, 10);
        //$headers[] = 'Content-Type:application/json';
    }
    function set_headers( string $header ){
        $headers[] = $header;
    }
    function set_data( array $data ){
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, json_encode($data));
    }
    function exec(){
        if( !empty($this->headers) )
            curl_setopt($this->curl, CURLOPT_HTTPHEADER, $this->headers);
        $this->result = curl_exec($this->curl);
        $this->errno = curl_errno($this->curl);
        if ($this->errno or $this->result != "") {
            $this->error = 1;
        }
        if ( isset($this->error) ) {
            return false;
        }
        else{
            return true;
        }
    }
}
