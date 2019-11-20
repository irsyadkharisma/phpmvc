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

}
