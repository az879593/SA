<?php

class User extends Dbh{

    protected function getUserNickName(){
        $sql = "SELECT nickname FROM tbl_users WHERE nickname = 'gxc'";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = null;
        return $user['nickname'];
    }

    protected function getUserId(){
        $sql = "SELECT id FROM tbl_users WHERE nickname = 'gxc'";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = null;
        return $user['id'];
    }

}

?>