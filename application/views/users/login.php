
<div class="container">

<h3>Login page</h3>
<form  action="<?=BASEURL;?>/users/authUser/" method="POST">
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" class="form-control" id="nim" name="nim" aria-describedby="nimHelp" placeholder="Input NIM" required>
    <small id="nimHelp" class="form-text text-muted">Please enter designated NIM.</small>
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    <small id="nimHelp" class="form-text text-muted">Please enter your password.</small>
  </div>


  <input type="submit" value ="Login" id ="login" name="login" class="btn btn-primary">
  </form>


</div>
