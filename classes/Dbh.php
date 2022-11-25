<?php

class Dbh{
    private $db_server = "localhost";
    private $db_user = "root";
    private $db_pass = "az879593";
    private $db_name = "useraccount";
    private $conn;

    protected function __construct(){
        try{
            $dsn = "mysql:host=$this->db_server;dbname=$this->db_name; charset = utf-8";
            $this->conn = new PDO($dsn, $this->db_user, $this->db_pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Connection failed" . $e->getMessage();
        }
    }
}

?>