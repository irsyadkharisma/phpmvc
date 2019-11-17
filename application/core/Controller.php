<?php

// membuat controller utama yang dengan method view untuk 
// mengarahkan request ke  direktori ../application/views/ .. 


class Controller {
    public function view($view, $data=[]){
        require_once '../application/views/' . $view . '.php';
    }

    //JANGAN LUPA MASUKAN MODELLLL
    
    public function model($model){
        require_once '../application/models/' . $model . '.php';
        //karena dia kelas, harus diinstansiasi dulu
        //agar bisa dipakai
        return new $model;
    }
    
}

?>