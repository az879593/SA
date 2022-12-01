<?php

class Registration extends Dbh{
    // protected function checkUser($username, $phonenumber, $email){
    //     $sql = "CALL sp_UserCheck(?, ?, ?, ?, ?)";
    //     $stmt = $this->connect()->prepare($sql);
    //     $result = $stmt->execute([$username,  $phonenumber, $email]);
    // }

    protected function setUser($username, $password, $nickname, $phonenumber, $email){
        $sql = "CALL sp_UserRegister(?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$username, $password, $nickname, $phonenumber, $email]);
        $stmt = null;
    }
}

?>