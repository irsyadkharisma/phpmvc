<?php

// Jika session tidak ada, makan jalankan session baru
if (!session_id()) {
    session_start();
}

// Buka file ../application/init.php,ini adalah metode bootstraping
// agar tidak langsung ngarah ke langsung ke folder application
require_once '../application/init.php';

// instantiate variable baru dengan nama aplikasi dan value Application

$application = new Application;
