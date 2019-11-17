<?php

class Student extends Controller {
    public function index(){
        
        // variable data extend dari controller utama
        // buat lempar array
        $data['title']= 'Daftar Mahasiswa';
        $data['students'] = $this->model('Student_model')->getAllStudents();
        
        $this->view('student/index', $data);

    }

}