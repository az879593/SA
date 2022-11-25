<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../userlogin/login.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header("Location: ../userlogin/login.php");
}

echo "welcome bitxch";

?>

<a href= "index.php?logout=true">logout</a>