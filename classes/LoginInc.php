<?php

if (!empty(isset($_POST["submit"]))) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    include "Dbh.php";
    include "Login.php";
    include "LoginController.php";
    // $Registration = new RegistrationController($username, $password, $nickname, $phonenumber, $email);
    // $Registration->UserRegister();
    $Login = new LoginController($username, $password);
    echo $Login->UserLogin();
    
}else{
    echo "No data";
}

?>