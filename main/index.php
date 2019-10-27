<?php
if(!session_id()){
    session_start();
}

require_once '../aplikasi/init.php';
$aplikasi = new Aplikasi;

?>