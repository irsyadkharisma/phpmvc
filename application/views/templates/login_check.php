<?php
$conn = mysqli_connect("localhost", "root", "", "campus_mvc");

if (isset($_POST["login"])) {

    echo "clicked daftar";
    $nim = $_POST["nim"];
    $password = $_POST["password"];

    $hasil = mysqli_query($conn, "SELECT * FROM users WHERE nim='$nim'");
    // print_r($hasil);

    if (mysqli_num_rows($hasil) === 1) {

        $baris = mysqli_fetch_assoc($hasil);
        // var_dump($baris);
        if (password_verify($password, $baris["password"])) {
            // set session
            $_SESSION["login"] = true;
            header("Location: http://localhost/mvcfinal/main/students");
        }
    }
    echo "gagal";

    $gagal = true;
}
