<?php
$_SESSION = [];
session_destroy();
$_GET["url"] === "home/index";
header("refresh:1; url=http://localhost/mvcfinal/main");
