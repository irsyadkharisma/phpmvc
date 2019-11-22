<?php

class Student_model
{
    //definisikan tabel mana yang akan dibaca oleh model ini

    private $table = 'students';
    private $db;

    // buat class construct (global)
    public function __construct()
    {
        $this->db = new Database;
        //jika Mahasiswa_model dipanggil, maka dia akan memanggil
        //class Database (controller Database.php)
    }

    // buat fungsi dengan method untuk membaca semua data
    // select * from mahasiswa
    public function getAllStudents()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getStudent($nim)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nim=:nim');
        // pakai id=:id adalah metode binding, agar tidak kena sql injection
        $this->db->bind('nim', $nim);
        return $this->db->single();
    }

    public function addStudent($data)
    {

        // masukan query add student dulu
        $query = 'INSERT INTO ' . $this->table . ' VALUES (:id, :nim, :name, :email, :department)';
        $this->db->query($query);

        // lalu bind masing-masing values di dalamnya,
        // contoh $this->db->bind('nim), $data['nim'];
        $this->db->bind('id', '');
        $this->db->bind('nim', $data['nimadd']);
        $this->db->bind('name', $data['nameadd']);
        $this->db->bind('email', $data['emailadd']);
        $this->db->bind('department', $data['departmentadd']);

        // execute query tersebut di atas
        $this->db->execute();
        return $this->db->rowCount();
        // jika ada ada yang ke-insert akan muncul jumlah row yang di add ke tables
        // output dari fungsi ini, akan mentrigger flasher di controller students

    }

    public function deleteStudent($nim)
    {
        $this->db->query('DELETE FROM students WHERE nim=:nim');
        $this->db->bind('nim', $nim);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateStudent($data)
    {

        $query = "UPDATE students SET name=:name, email=:email, department=:department WHERE nim=:nim";
        $this->db->query($query);
        // binding nya harus urut

        $this->db->bind('name', $data['nameadd']);
        $this->db->bind('email', $data['emailadd']);
        $this->db->bind('department', $data['departmentadd']);
        $this->db->bind('nim', $data['nimadd']);
        $this->db->execute();
        return $this->db->rowCount();

    }

}
