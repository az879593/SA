<?php

session_start();
if (isset($_SESSION['username'])) {
    header("Location: ../mainpage/index.php");
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="login.php" method="POST" class="vh-100">
        <div class="container h-100">
            <div class="row justify-content-evenly align-items-center" id="cardrow">
                <div class="col-auto">
                    <img src="./pic/yeh.jpg" alt="">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card" id="card">
                        <div class="card-body d-flex flex-column" id="cardbody">
                            <h1 class="mb-4">Login</h1>

                            <div class="form-floating">
                                <input class="form-control mb-2" type="text" id="username" placeholder="d" required>
                                <label for="username ">Username</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control mb-2" type="password" id="password" placeholder="d" required>
                                <label for="password ">Password</label>
                            </div>
                            <span  class = "mt-1 w-100" id="message"></span>
                            <div class="mb-2">
                                <button class="btn btn-outline-primary mt-3 w-100" type="submit" name="button" id="login">Sign In</button>
                            </div>


                            <div>Don't have an account?
                                <br>
                                <a href="../useraccount/registeration.php" class="link-primary">Sign Up</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(function() {
        $('#login').click(function(e) {
            var valid = this.form.checkValidity();

            if (valid) {
                var username = $('#username').val();
                var password = $('#password').val();
            

                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'jslogin.php',
                    data: {
                        username: username,
                        password: password
                    },

                    success: function(data) {
                        if ($.trim(data) == "1") {
                            window.location.href = "../mainpage/index.php"
                        }
                        if ($.trim(data) == "2"){
                            $('#message').html("帳號或密碼錯誤");
                        }
                    },
                    error: function(data) {
                    }
                });
            }
        })
    });
</script>