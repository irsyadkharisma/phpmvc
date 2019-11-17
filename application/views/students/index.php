
<div class="container">

<h3>Daftar Mahasiswa</h3>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-dark">
    
        <tr> 
            <th>NIM</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Major</th>
            <th>Available Menu</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data['students'] as $student ) :?>  
        <tr>
        <td scope="row"><?= $student['nim'] ?></td> 
        <td><?= $student['name'] ?></td>
        <td><?= $student['email'] ?></td>
        <td><?= $student['major'] ?></td>
        <td>
            <a href="<?= BASEURL;?>/students/detail/<?= $student['nim']?>"><button type="button" name="detail" id="view" class="btn btn-primary" btn-lg btn-block">Detail</button></a>
            <a href="<?= BASEURL;?>/students/edit/<?= $student['nim']?>"><button type="button" name="edit" id="edit" class="btn btn-warning" btn-lg btn-block">Edit</button></a>
            <a href="<?= BASEURL;?>/students/delete/"><button type="button" name="delete" id="delete" class="btn btn-danger" btn-lg btn-block">Delete</button></a>
            
        </td>
        </tr>
        <?php endforeach; ?>
        </tbody>


</table>




</div>