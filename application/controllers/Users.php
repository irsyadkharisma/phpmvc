<?php

class Users extends Controller
{

    public function index()
    {
        $this->view('templates/header');
        $this->view('home/index');
        $this->view('templates/footer');

    }

    public function register()
    {
        $data['title'] = 'Register';
        $this->view('templates/header');
        $this->view('users/register');
        $this->view('templates/footer');
    }

    public function login()
    {
        $data['title'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('users/login');
        $this->view('templates/footer');

        if (isset($_POST["login"])) {
            $nim = $_POST["nim"];
            $password = $_POST["password"];

        }
    }

    public function authUser()
    {
        $data["title"] = 'success';
        $data['nim'] = $this->model('User_model')->authUser();
        $password = $_POST["password"];

        if (($_POST['nim']) === $data['nim'][0]['nim']) {

            if (password_verify($password, $data['nim'][1]['password'])) {
                // set session
                $_SESSION["login"] = true;
                header("Location:" . BASEURL . "/students");
                exit;
            }

            // $this->view('templates/header_success', $data);
            // echo "Selamat Datang";
            // print_r($data['nim'][0]['nim']);
            // $this->view('templates/footer');
        } else {
            echo "gagal";
        }
    }

    public function logout()
    {
        $data['title'] = 'Logout';
        $this->view('templates/header');
        $this->view('users/logout');
        $this->view('templates/footer');
    }

}
