<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style-message.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Playfair+Display&family=Poppins:wght@200&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Cola</title>
</head>

<body>
    <div class="container">
        <div class="side">
            <div class="header">
                <div class="avatar">
                    <img src="img/peo.jpg" alt="This is the photo" width="60%">
                </div>

                <div class="title"><?php echo $_SESSION['nickname'] ?></div>

                <div class="icon" align="right">
                    <img src="img/search.png" alt="This is a icon">
                    <img src="img/home.png" alt="This is a icon">
                    <img src="img/user.png" alt="This is a icon">
                </div>
            </div>

            <div class="menu">
                <ul>
                    <li>Match
                    <li>
                    <li class="active">Chat
                    <li>
                </ul>
            </div>

            <div class="message">
                <div class="avatar">
                    <img src="img/alien.jpg" alt="This is the photo">
                </div>
                <div class="friend">
                    <div class="user">Alien</div>
                    <div class="text">Hello</div>
                </div>
            </div>


            <div class="message">
                <div class="avatar">
                    <img src="img/pooh.jpg" alt="This is the photo">
                </div>
                <div class="friend">
                    <div class="user">Pooh</div>
                    <div class="text">Do you want to take some honey?</div>
                </div>
            </div>

            <div class="message">
                <div class="avatar">
                    <img src="img/woody.webp" alt="This is the photo">
                </div>
                <div class="friend">
                    <div class="user">Woody</div>
                    <div class="text">There is a snake in your boot!</div>
                </div>
            </div>
        </div>


        <div class = "content">
            
        </div>
    </div>


    <a href="../classes/LogoutInc.php">logout</a>
</body>

</html>