<?php

// di file ini, adalah file utama sebagai core aplikasi ini
// semua method akan didefinisikan di dalam class 
// Application ini


class Application { 
    // buat property class ini, dengan controller-method-params defaultnya
    // apabila url yang diakses propertinya tidak ketemu, maka
    // request akan di arahkan ke controller dan method default ini
    // dengan parameter kosong

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];


    public function __construct(){
        // function parseURL() ini berfungsi untuk menganalisa url
        // yang masuk, dan memecahkan untuk proses lebih lanjut
        $url=$this->parseURL();  
        // jika file yang dimaksud pada url (yang diarahkan ke 
        // folder dan file yang disebut pada Constroller.php) ada, maka
        // method yang dipanggil adalah index pertama (ke 0)
        if(file_exists('../application/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0]; //controller di protected ditimpa dengan yang ini.
            unset($url[0]); 
            
            
        }
        // controller : jika matched di atas, maka file yang dimaksud dipanggil sekali ajah
        require_once '../application/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        // lalu panggil method nya, karena ada di index ke-1, maka,
        // cari cek di url[1]
        if(isset($url[1])){ // jika methodnya ada, maka... 
            if(method_exists($this->controller, $url[1])) { // controller + method
                $this->method = $url[1];
                unset($url[1]);
            } 
        }

        // selanjutnya parameternya dicek
        if(!empty($url)){
            $this->params = array_values($url);
        }
        //lalu, jalankan controller yang dimaksud jika parameternya ada
        
        call_user_func_array([$this->controller, $this->method], $this->params);
        // sekarang function parseURL nya kita definisikan


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