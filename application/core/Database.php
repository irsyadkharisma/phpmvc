<?php

class Database {

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;
    private $dbh;// dbh : database handle | sth : statement handle
    private $stmt; //statement

    public function __construct(){

        //panggil sumber data Data Source Name = dsn
        $dsn = 'mysql:host=' . $this->host . ';dbname='. $this->db_name ;

        //opsi pdo (kita pakai pdo, bukan mysqli) PHP Data Object (PDO)
        // ATTR_PERSISTEN = membuat koneksi ke DB terjaga terus
        // ERRMODE_EXCEPTION = menampilkan error code and error information

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];


        //cek koneksi, apakah tersambung ke db atau gagal
        //try catch method adalah untuk penganganan
        //error 
        //try - A function using an exception should be in a 
        //"try" block. If the exception does not trigger, 
        //the code will continue as normal. 
        //However if the exception triggers, an exception is "thrown"

        try {$this->dbh = new PDO ($dsn, $this->user, $this->pass, $option);
        } catch(PDOException $error_gan){
            die($error_gan->getMessage());
        }
    }
    
        //klo gak ada apa apa di try&catch di atas, lanjut
        //buat query generic (wrapper) dengan parameter $query

        public function query($query){
            $this->stmt = $this->dbh->prepare($query);
        }

        //binding data dalam query parameternya apa, valuenya apa, type nya apa
        //fungsi binding ini adalah untuk membersihkan query dulu
        //sebelum dieksekusi, agar bersih dulu
        public function bind($param, $value, $type= null){ //sengaja dibuat isinya seolah null, buar mentriger conditional di bawahnya
            if(is_null($type)){  // klo tipe nya null, di switch ke true, biar jalan
                switch(true){
                    case is_int($value): //trus cek apakah integer, dst....
                        $type= PDO::PARAM_INT;
                    break;
                    case is_bool($value):
                        $type=PDO::PARAM_BOOL;
                    break;
                    case is_null($value):
                        $type=PDO::PARAM_NULL;
                    break;
                    default:
                    $type=PDO::PARAM_STR;
                }
            }
            $this->stmt->bindValue($param, $value, $type); // sekarang di gabung semua
        }


        //selanjutnya kita jalankan atau execute
        public function execute(){
            $this->stmt->execute();
        }

        //lalu tampilkan hasilnya, klo all fetchAll, 
        //klo selain itu (pake where blabla) 
        //pakainya fetch ajah
        public function resultSet(){
            $this->execute(); // function execute di atas
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function single(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        }

        //lalu hitung jumlah baris yang muncul
        public function rowCount(){
            return $this->stmt->rowCount();
        }

        //function untuk cek session login
        public function cek_session(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        }

    }
    

