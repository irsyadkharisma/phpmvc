<?php

class User_model
{

    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        //jika Mahasiswa_model dipanggil, maka dia akan memanggil
        //class Database (controller Database.php)
    }

    // public function authUser()
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table);
    //     return $this->db->resultSet();
    // }

    public function authUser($nim)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nim=:nim');
        // pakai id=:id adalah metode binding, agar tidak kena sql injection
        $this->db->bind('nim', $nim);
        return $this->db->single();
    }

    public function addUser($data)
    {

        if ($data['password'] !== $data['password2']) {
            return 0;
        } else {

            // masukan query add student dulu
            $query = 'INSERT INTO ' . $this->table . ' VALUES (:id, :nim, :password, :cookie, :is_active)';
            $this->db->query($query);

            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            // lalu bind masing-masing values di dalamnya,
            // contoh $this->db->bind('nim), $data['nim'];
            $this->db->bind('id', '');
            $this->db->bind('nim', $data['nim']);
            $this->db->bind('password', $data['password']);
            $this->db->bind('cookie', '');
            $this->db->bind('is_active', '1');

            // execute query tersebut di atas
            $this->db->execute();
            return $this->db->rowCount();
            // jika ada ada yang ke-insert akan muncul jumlah row yang di add ke tables
            // output dari fungsi ini, akan mentrigger flasher di controller students
        }

    }

}
