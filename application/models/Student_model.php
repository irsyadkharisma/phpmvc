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

}
