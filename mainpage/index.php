<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header("Location: signin.php");
}

echo "welcome " . $_SESSION['username'];

?>

<a href= "index.php?logout=true">logout</a>