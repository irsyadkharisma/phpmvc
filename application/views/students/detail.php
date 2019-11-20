<div class="container mt-3">
  <h3>Detail Mahasiswa : <?=$data['students']['nim'];?></h3>
<div class="row">

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
                <td><?=$data['students']['name'];?></td>
            </tr>
            <tr>
                <td scope="row"><strong>E-Mail</strong></td>
                <td>:</td>
                <td><?=$data['students']['email'];?></td>
            </tr>
            <tr>
                <td scope="row"><strong>Department</strong></td>
                <td>:</td>
                <td><?=$data['students']['major'];?></td>
            </tr>
        </tbody>
</table>
</div>
</div>

  </div>
</div>

<div class="container pt-3">
<a href="<?=BASEURL;?>/students" class="button btn-warning btn-lg" role="button">Kembali</a>

</div>