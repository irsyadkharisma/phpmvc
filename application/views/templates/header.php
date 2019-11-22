<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        <?php if (isset($_SESSION['login'])) {
    echo "<a class='nav-link' href=" . BASEURL . "/students>Students</a>";
}
?>


      <?php if (!isset($_SESSION['login'])) {
    echo "</li>";
    echo "<li class='nav-item'>";
    echo "<a class='register nav-link' href='' data-toggle='modal' data-target='#loginmodal'>Register</a>";
    echo "</li>";

    echo "<li class='nav-item'>";
    echo "<a href='href=" . BASEURL . "/home/index' class='login nav-link' data-toggle='modal' data-target='#loginmodal'>Login</a>";
    echo "</li>";
} else {
    echo "<li class='nav-item'>";
    echo "<a class='logout nav-link' href=''>Logout</a>";
    echo "</li>";

}

?>

<!-- Modal LOGIN -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginmodalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <form  action="<?=BASEURL;?>/users/authUser" method="POST">
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" aria-describedby="nimHelp" placeholder="Input NIM" required>
            <small id="nimHelp" class="form-text text-muted">Please enter designated NIM.</small>
          </div>

          <div class="form-group password">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" required>
            <small id="passwdHelp" class="form-text text-muted">Please enter your password.</small>
          </div>

          <div class="form-group">
            <input id="password2" type="password" class="password2 form-control divpassword2"  name="password2" placeholder="Password Confirmation" autocomplete="off" required>
            <small id="passwdHelp2" class="form-text text-muted">Please enter your password.</small>
          </div>
          <!-- cookie  -->
          <input type="hidden" name="cookie" id="cookie">
          <!-- end of cookie -->
      </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" value ="Login" id ="login" name="login" class="btn btn-primary">
              </div>
              </form>

    </div>
  </div>
</div>



    <!-- MODAL Add user-->
    <div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="addStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addStudentModallabel">Tambah Data Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formid" action="<?=BASEURL;?>/students/add" method="post">
                        <input type="hidden" name="id" id="id"> <!-- id di hidden ini maksudnya untuk meng-include-data id, karena di tables db ada, meskikun value nya dibuat '' karena auto increment dari db -->

                        <div class="form-group">
                            <label for="NIM">NIM</label>
                            <input type="text" class="form-control" id="nimadd" name="nimadd" placeholder="Isikan NIM" required>
                        </div>

                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control" id="nameadd" name="nameadd" placeholder="Isikan name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control required" id="emailadd" name="emailadd" placeholder="Isikan Email" required>
                        </div>

                        <div class="form-group">
                            <label for="Department">Department</label>
                            <select class="form-control required" id="departmentadd" name="departmentadd" required>
                                <option value=""> -Pilih Department- </option>
                                <option value="Geodesy">Geodesy</option>
                                <option value="Transport & Geoinformation Technology">Transport & Geoinformation Technology</option>
                                <option value="Carthography">Carthography</option>
                                <option value="Geography">Geography</option>
                                <option value="Data Science">Data Science</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" value ="Submit" id ="submit" name="submit" class="btn btn-primary">
                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- end of MODAL -->






      </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

</nav>

  </div>