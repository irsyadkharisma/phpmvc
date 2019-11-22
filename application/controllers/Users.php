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
        $nim = $_POST["nim"];
        $password = $_POST["password"];
        // $data["title"] = 'success';
        $data['nim'] = $this->model('User_model')->authUser($nim);
        $data['passwd'] = $this->model('User_model')->authUser($nim);
        $data['nama'] = $this->model('Student_model')->getStudent($nim);

        // echo $nim = $_POST["nim"];
        // echo "<br>";
        // echo $password = $_POST["password"];
        // echo "<br>";
        // echo $data['nim']['nim'];
        // echo "<br>";
        // echo $data['passwd']['password'];
        // echo "<br>";

        if ($nim == $data['nim']['nim']) {
            if ($data['nim']['is_active'] == 1) {
                if (password_verify($password, $data['passwd']['password'])) {
                    // echo "matched";
                    if ($data['nim']['is_active'] == 1) {
                        // set session
                        $_SESSION["login"] = true;
                        echo "Selamat datang <strong>  Mr./Mrs. " . $data['nama']['name'] . "</strong>";
                        // header("Location:" . BASEURL . "/users/success");
                        header("refresh:2; url= http://localhost/mvcfinal/main/students");
                        exit;
                    }
                }
            } else {
                echo "users is not activated";
                header("refresh:2; url= http://localhost/mvcfinal/main/students");
                exit;
            }

        } else {
            echo "user is not found";
            header("refresh:2; url= http://localhost/mvcfinal/main/students");
            exit;
        }
    }

    public function success()
    {
        $data['title'] = 'Logout';
        $this->view('templates/header');
        $this->view('users/success');
        $this->view('templates/footer');
    }
    public function logout()
    {
        $data['title'] = 'Logout';
        $this->view('templates/header');
        $this->view('users/logout');
        $this->view('templates/footer');
    }

    public function add()
    {

        if ($this->model('User_model')->addUser($_POST) > 0) {
            // echo "data berhasil dihapus";
            echo "berhasil";
            header("refresh:2;url= http://localhost/mvcfinal/main/students");
            exit;
        } else {
            echo "gagal";

            Flasher::setFlash('Gagal', 'Daftar', 'danger');
            header('Location:' . BASEURL . '/students');
            exit;
        }

    }

}
