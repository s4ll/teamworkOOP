<?php

class Nilai {

    private $mtk;
    private $pjok;
    private $pipas;
    private $indo;
   
    public function __construct( $mtk, $pjok, $pipas, $indo ) {
       
        $this->mtk = $mtk;
        $this->pjok = $pjok;
        $this->pipas = $pipas;
        $this->indo = $indo;
    }

    public function getTotal() {
        return $this->mtk + $this->pjok + $this->pipas + $this->indo ;
    }

    public function getAverage() {
        $total = 4;
        return $this->getTotal() / $total;
    }

    public function getMax() {
        return max($this->mtk,$this->pjok,$this->pipas,$this->indo);
    }

    public function getMin() {
        return min($this->mtk,$this->pjok,$this->pipas,$this->indo);
    }

    public function getGrade() {
        $rata = $this->getAverage();
        if ($rata >= 90) {
            return "Nilai A";
        } elseif ($rata >= 80) {
            return "Nilai B";
        } elseif ($rata >= 70) {
            return "Nilai C";
        } else {
            return "Nilai D";
        }
    }
}

class Database {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;
    
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    

    public function connect() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        

        if ($this->connection->connect_error) {
            die("Koneksi database gagal: " . $this->connection->connect_error);
        }
    }
    
    
    public function insertData($mtk , $pjok , $pipas , $indo) {
        $query = "INSERT INTO nisiswa (mtk , pjok , pipas , indo)
                  VALUES ('$mtk', '$pjok', '$pipas' , '$indo')";
        
        if ($this->connection->query($query) === true) {
            echo "";
        } else {
            echo "Error: " . $query . "<br>" . $this->connection->error;
        }
    }
    

    public function close() {
        $this->connection->close();
    }
}

$host = "localhost";
$username = "root";
$password = "";
$database = "saldata";

$db = new Database($host, $username, $password, $database);

$db->connect();