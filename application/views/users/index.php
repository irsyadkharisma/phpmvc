
<div class="container">

<h3>Daftar Mahasiswa</h3>
<div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>

<div style="width: 25%; float:left; margin: 5px"></div>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-dark">

        <tr>
            <th>NIM</th>
            <th>Active?</th>
            <th>Available Menu</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data['users'] as $user): ?>
        <tr>
        <td><?=$user['nim']?></td>
        <td scope="row">
        <?php
if ($user['is_active'] == 1) {
    echo "Active";
} else {
    echo "Not Active";
}

;?>

        </td>

        <td>
            <a href="<?=BASEURL;?>/users/detail/<?=$user['nim']?>"><button type="button" name="detail" id="view" class="btn btn-primary" btn-lg btn-block">Detail</button></a>
            <a href="" class="btn btn-warning float-right ml-1 showModalUpdate" data-toggle="modal" data-target="#addStudentModal" data-id="<?=$user['nim']?>">Update</a>
            <a href="<?=BASEURL;?>/users/delete/<?=$user['nim']?>"><button type="button" name="delete" id="delete" class="btn btn-danger buttonhapus" btn-lg btn-block">Delete</button></a>

        </td>
        </tr>
        <?php endforeach;?>
        </tbody>


</table>






</div>