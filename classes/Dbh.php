<?php

class Dbh{


    private $db_server = "localhost:3307";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "useraccount";

    protected function connect(){
        try{
            $dsn = "mysql:host=$this->db_server;dbname=$this->db_name; charset = utf-8";
            $conn = new PDO($dsn, $this->db_user, $this->db_pass);
            return $conn;
        }catch(PDOException $e){
            echo "Connection failed" . $e->getMessage();
        }
    }
}

?>