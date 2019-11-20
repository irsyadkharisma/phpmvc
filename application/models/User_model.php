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

    public function authUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

}
