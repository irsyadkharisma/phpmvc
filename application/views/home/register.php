<div class="container">

<form>
<div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" class="form-control" id="nim" aria-describedby="nimHelp" placeholder="Input NIM">
    <small id="nimHelp" class="form-text text-muted">Please enter designated NIM.</small>
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Input Name">
    <small id="nameHelp" class="form-text text-muted">Please enter student name.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group" >
    <label for="" id="department">Departement</label>
    <select class="custom-select" id="department">
        <option selected>Pilih...</option>
        <option value="GIS">GIS</option>
        <option value="Geomatics">Geomatics</option>
        <option value="Geoinformation">Geoinformation</option>
     </select>
    <small id="departementHelp" class="select">Please enter student departement.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="passwordConfirmation">Password Confirmation</label>
    <input type="password" class="form-control" id="passwordConfirmation" placeholder="Password Confirmation">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Count me in!</button>
</form>
</div>