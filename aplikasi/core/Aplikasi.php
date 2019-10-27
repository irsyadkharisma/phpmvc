<?php

class Aplikasi { #membuat class aplikasi
    public function __construct(){ #membuat fungsi yang public dengan nama __construct/global function dari php
        $url=$this->parse_url(); #mendefinisikan variable dengan nama 'url'
        var_dump($url); 
    }

    public function parse_url(){ #membuat function publik dengan nama 'parse_url'
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/'); #right trim '/'
            $url = filter_var($url, FILTER_SANITIZE_URL); #membersihkan url dari karakter aneh-aneh, biar secure
            $url = explode('/', $url);
            return $url;
        }
    }
}


?>