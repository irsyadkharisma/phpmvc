<?php

class Students extends Controller
{
    public function index()
    {

        // variable data extend dari controller utama
        // buat lempar array
        $data['title'] = 'Daftar Mahasiswa';
        $data['students'] = $this->model('Student_model')->getAllStudents();

        $this->view('templates/session');
        $this->view('templates/header');
        $this->view('students/index', $data);
        $this->view('templates/footer');
    }

    public function detail($nim)
    {
        $data['title'] = 'Detail';
        $data['students'] = $this->model('Student_model')->getStudent($nim);
        $this->view('templates/session');
        $this->view('templates/header');
        $this->view('students/detail', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model('Student_model')->addStudent($_POST) > 0) {
            echo "data berhasil ditambahkan";
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location:' . BASEURL . '/students');
            exit;
        } else {
            echo "data gagal ditambahkan";
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location:' . BASEURL . '/students');
            exit;
        }

    }

    public function delete($nim)
    {
        if ($this->model('Student_model')->deleteStudent($nim) > 0) {
            // echo "data berhasil dihapus";
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location:' . BASEURL . '/students');
            exit;
        } else {
            // echo "data berhasil dihapus";
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location:' . BASEURL . '/students');
            exit;
        }

    }

    public function getUpdate()
    {
        echo json_encode($this->model('Student_model')->getStudent($_POST['nim']));
    }

    public function edit()
    {

        if ($this->model('Student_model')->updateStudent($_POST) > 0) {
            // echo "data berhasil dihapus";
            Flasher::setFlash('Berhasil', 'Update Data', 'success');
            header('Location:' . BASEURL . '/students');
            exit;
        } else {
            // echo "data berhasil dihapus";
            Flasher::setFlash('Gagal', 'Update Data', 'danger');
            header('Location:' . BASEURL . '/students');
            exit;
        }

    }

}
