<?php
if (!isset($_SESSION["login"])) {
    header("Location: http://localhost/mvcfinal/main/users/login");
}
