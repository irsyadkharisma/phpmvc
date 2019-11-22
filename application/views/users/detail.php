<div class="container mt-3">
  <h3>Detail Users</h3>
<div class="row " style="margin-bottom:25px">
<div class="col-md-4">
<img src="https://via.placeholder.com/300/09f/fff.png" alt="Propic">
</div>
<div class="col-md-8">
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        </thead>
        <tbody>
            <tr>
                <td scope="row"><strong>Nama</strong></td>
                <td>:</td>
                <td><?=$data['users']['nim'];?></td>
            </tr>
            <tr>
                <td scope="row"><strong>E-Mail</strong></td>
                <td>:</td>
                <td><?=$data['users']['is_active'];?></td>
            </tr>
            <tr>
                <td scope="row"><strong>Department</strong></td>
                <td>:</td>
                <td><?=$data['users']['cookie'];?></td>
            </tr>
        </tbody>

</table>
</div>
</div>

<a href="<?=BASEURL;?>/users/index" class=" btn button btn-info btn-lg" role="button">Kembali</a>
<a href="" class="btn button btn-warning btn-lg ml-1 showModalUpdate" data-toggle="modal" data-target="#addStudentModal" data-id="<?=$data['users']['nim'];?>">Update</a>



</div>
</div>

