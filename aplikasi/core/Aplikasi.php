<?php

class Aplikasi { //#membuat class aplikasi

    protected $controller = 'Home'; 
    protected $method = 'index';
    protected $params = [];



    public function __construct(){  //membuat fungsi yang public dengan nama __construct/global function dari php
        $url=$this->parseURL(); //mendefinisikan variable dengan nama 'url'
        if(file_exists('../aplikasi/controllers/' . $url[0] . '.php')){ //jika index yang dicari matched dengan nama file yang ada di folder controller, maka...
            $this->controller = $url[0];
            unset($url[0]);
            
        }

            // controller : jika matched di atas, maka file yang dimaksud dipanggil sekali ajah
        require_once '../aplikasi/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        
        
            // method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

            // params
        if(!empty($url)){
            $this->params = array_values($url);
            
        }

    }

    public function parseURL(){ //membuat function publik dengan nama 'parse_url'
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/'); //right trim '/'
            $url = filter_var($url, FILTER_SANITIZE_URL); //membersihkan url dari karakter aneh-aneh, biar secure
            $url = explode('/', $url);
            return $url;
        }
    }
}


?>