<?php

require_once('config.php');

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <form action="registeration.php" method="POST" class = "vh-100">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card " id="card">
                        <div class="card-body d-flex flex-column" id="cardbody">
                            <h1 class="mb-4">Registeration</h1>
                            
                            <div class="form-floating">
                                <input class="form-control mb-2" type="text" id="username" placeholder="d" required>
                                <label for="username ">Username</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control mb-2" type="password" id="password" placeholder="d" required>
                                <label for="password ">Password</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control mb-2" type="password" id="passwordconfirm" placeholder="d" required>
                                <label for="passwordconfirm ">Password Confirmation</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control mb-2" type="text" id="nickname" placeholder="d" required>
                                <label for="nickname ">Nickname</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control mb-2" type="text" id="phonenumber" placeholder="d" required>
                                <label for="phonenumber ">Phonenumber</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input class="form-control" type="email" id="email" placeholder="d" required>
                                <label for="email ">Email</label>
                            </div>

                            <div class="mb-2">
                                <button class="btn btn-outline-primary mt-3 w-100" type="submit" name="button" id="register">Sign Up</button>
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
        $('#register').click(function(e) {

            var valid = this.form.checkValidity();

            if (valid) {
                var username = $('#username').val();
                var password = $('#password').val();
                var nickname = $('#nickname').val();
                var phonenumber = $('#phonenumber').val();
                var email = $('#email').val();

                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'process.php',
                    data: {
                        username: username,
                        password: password,
                        nickname: nickname,
                        phonenumber: phonenumber,
                        email: email
                    },

                    success: function(data) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Sucessfully sign up',
                            showConfirmButton: true,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "../userlogin/login.php"
                            }
                        })
                    },
                    error: function(data) {
                        Swal.fire(
                            'Error',
                            'There were errors while saving the data.',
                            'error'
                        )
                    }
                });
            }

        });

    })
</script>
</body>

</html>