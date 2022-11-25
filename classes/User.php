<?php
session_start();
class User extends Dbh{

    private $username = $_POST['username'];
    private $password = sha1($_POST['password']);
    private $nickname = $_POST['nickname'];
    private $phonenumber = $_POST['phonenumber'];
    private $email = $_POST['email'];

    public function get(){
        
    }

    $sql = "CALL sp_Login(?, ?)";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute([$username, $password]);

    if($result){
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0){
            echo "1";
            $_SESSION['username'] = $user['username'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['nickname'] = $user['nickname'];
            $_SESSION['email'] = $user['email'];
        }else{
            echo "2";
        }
        
}
}

?>