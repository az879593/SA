<?php

if (!empty(isset($_POST["submit"]))) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $nickname = $_POST['nickname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    include "Dbh.php";
    include "Registration.php";
    include "RegistrationController.php";
    $Registration = new RegistrationController($username, $password, $nickname, $phonenumber, $email);
    $Registration->UserRegister();
}else{
    echo "No data";
}
?>