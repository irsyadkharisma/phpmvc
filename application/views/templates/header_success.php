<?php

// if ($this->view('students/index')) {
//     require 'session.php';
// }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Refresh" content="2;url=http://localhost/mvcfinal/main/students" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="http://localhost/mvcfinal/main/css/bootstrap.css">
    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="<?=BASEURL;?>/home">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=BASEURL;?>/home">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=BASEURL;?>/students">Students</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=BASEURL;?>/users/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=BASEURL;?>/users/login">Login</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?=BASEURL;?>/users/logout">Logout</a>

      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

</nav>

  </div>