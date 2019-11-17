<?php

class Home extends Controller {
    public function index(){
        $this->view('templates/header');
        $this->view('home/index');
        $this->view('templates/footer');
        
    }

    public function register(){
        $data['title']= 'Register' ;
        
        $this->view('templates/header');
        $this->view('home/register');
        $this->view('templates/footer');
    }
    public function login(){
        $data['title']= 'Register' ;
        
        $this->view('templates/header');
        $this->view('home/login');
        $this->view('templates/footer');
    }

}
