<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: chat.php");
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cola dating</title>
    <link rel="stylesheet" href="css/homestyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Playfair+Display&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <nav>
            <p class="logo">COLA</p>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="match.html">Match</a></li>
                <li><a href="message.html">Chat</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="signin.php">Login</a></li>
            </ul>
        </nav>

        <div class="text-box">
            <h1>For Whom <br>In Need Of Love.</h1>
            <!--<p class="content">Point the "Match" button to find your Mr.right!</p>-->
            <button type="button" class="btn" onclick="goToSignup()">Tap to register</button>
        </div>

    </div>



</body>

</html>

<script src="js/index.js"></script>