<?php
session_start();
require_once('config.php');


$username = $_POST['username'];
$password = sha1($_POST['password']);

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

?>

