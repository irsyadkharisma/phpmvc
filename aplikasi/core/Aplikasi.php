<?php

class Aplikasi {
    public function __construct(){
        $url=$this->parse_url();
        var_dump($url);
    }

    public function parse_url(){
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            return $url;
        }
    }
}


?>