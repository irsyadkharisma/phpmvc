$(function () {

    $('.logout').on('click', function () {
        $.post('users/logout', function () {

            window.location = 'http://localhost/mvcfinal/main';
        });
    });

    $('.register').on('click', function () {
        $('#password2').attr('type', 'password');
        $('#passwdHelp2').html('Please Enter Your Password');
        $('.modal-body form').attr('action', 'http://localhost/mvcfinal/main/users/add')
        $('.modal-title').html('Daftar')
        $('.modal-footer input[value="Login"]').val('Daftar Pengguna Baru');
    });

    $('.login').on('click', function () { // $('.divpassword2 label[class=labeldivpassword2]').html('');
        $('#password2').attr('type', 'hidden');
        $('#passwdHelp2').html('');
        $('.modal-body form').attr('action', 'http://localhost/mvcfinal/main/users/authUser')
        $('.modal-title').html('Login')
        $('.modal-footer input[value="Daftar Pengguna Baru"]').val('Login');
    });

    $('#addStudent').on('click', function () {
        $('#idadd').val('');
        $('#nimadd').val('');
        $('#nameadd').val('');
        $('#emailadd').val('');
        $('#departmentadd').val('');

        $('.modal-title').html('Tambah Data Mahasiswa')

    });

    $('.showModalUpdate').on('click', function () {

        $('.modal-title').html('Update Data Mahasiswa');
        $('#nimadd').attr('readonly', 'readonly');
        $('.modal-footer input[type=submit]').val('Save Update')
        $('.modal-body form').attr('action', 'http://localhost/mvcfinal/main/students/edit')
        const nim = $(this).data('id');
        console.log(nim);

        $.ajax({
            url: 'http://localhost/mvcfinal/main/students/getUpdate',
            data: {
                nim: nim
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log('ok');
                $('#idadd').val(data.id);
                $('#nimadd').val(data.nim);
                $('#nameadd').val(data.name);
                $('#emailadd').val(data.email);
                $('#departmentadd').val(data.department);
            }
        });


    });


});
