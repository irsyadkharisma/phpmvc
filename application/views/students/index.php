
<div class="container">

<h3>Daftar Mahasiswa</h3>
<div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>
<div class="row-md-9">
<button type="button" name="addStudent" id="addStudent" class="btn btn-primary"  data-toggle='modal' data-target='#addStudentModal'>Add New Student</button>
</div>
<div style="width: 25%; float:left; margin: 5px"></div>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-dark">

        <tr>
            <th>NIM</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Department</th>
            <th>Available Menu</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data['students'] as $student): ?>
        <tr>
        <td scope="row"><?=$student['nim']?></td>
        <td><?=$student['name']?></td>
        <td><?=$student['email']?></td>
        <td><?=$student['department']?></td>
        <td>
            <a href="<?=BASEURL;?>/students/detail/<?=$student['nim']?>"><button type="button" name="detail" id="view" class="btn btn-primary" btn-lg btn-block">Detail</button></a>
            <a href="" class="btn btn-warning float-right ml-1 showModalUpdate" data-toggle="modal" data-target="#addStudentModal" data-id="<?=$student['nim']?>">Update</a>
            <a href="<?=BASEURL;?>/students/delete/<?=$student['nim']?>"><button type="button" name="delete" id="delete" class="btn btn-danger" btn-lg btn-block">Delete</button></a>

        </td>
        </tr>
        <?php endforeach;?>
        </tbody>


</table>






</div>