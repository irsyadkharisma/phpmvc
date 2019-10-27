<?php

class Controller {
   public function view($view, $data=[]){
    require_once '../aplikasi/views/' . $view . '.php';
   }
}

?>