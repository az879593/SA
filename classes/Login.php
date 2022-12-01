<?php

class Login extends Dbh{
    protected function getUser($username, $password){
        $sql = "CALL sp_Login(?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$username, $password]);

        if(!$result){
            $stmt = null;
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            return "2";
            exit();
        }

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        session_start();
        $_SESSION['username'] = $user['username'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['nickname'] = $user['nickname'];
        $_SESSION['email'] = $user['email'];
        $stmt = null;
        return "1";
        
        
    }
}

?>