<?php

// membuat controller utama yang dengan method view untuk 
// mengarahkan request ke  direktori ../application/views/ .. 


class Controller {
    public function view($view, $data=[]){
        require_once '../application/views/' . $view . '.php';
    }
}

?>