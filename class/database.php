<?php
class Database{
    private $host = "localhost";
    private $db_name = "db_ujian";
    private $username = "root";
    private $password = "";
    public $conn;

    public function dbConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $e){
            echo "Connection Error : " . $e->getMessage();
        }
        return $this->conn;
    }
}
?>