<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signup_style.css">
</head>

<body>


    <form action="../classes/RegistrationInc.php" method="POST" class = "vh-100">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card " id="card">
                        <div class="card-body d-flex flex-column" id="cardbody">
                            <h1 class="mb-4">Registeration</h1>
                            
                            <div class="form-floating">
                                <input class="form-control mb-2" type="text" id="username" name = "username" placeholder="d" required>
                                <label for="username ">Username</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control mb-2" type="password" id="password" name = "password" placeholder="d" required>
                                <label for="password ">Password</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control mb-2" type="password" id="passwordconfirm" name = "passwordconfirm" placeholder="d" required>
                                <label for="passwordconfirm ">Password Confirmation</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control mb-2" type="text" id="nickname" name = "nickname" placeholder="d" required>
                                <label for="nickname ">Nickname</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control mb-2" type="text" id="phonenumber" name = "phonenumber" placeholder="d" required>
                                <label for="phonenumber ">Phonenumber</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input class="form-control" type="email" id="email" name = "email" placeholder="d" required>
                                <label for="email ">Email</label>
                            </div>

                            <div class="mb-2">
                                <button class="btn btn-outline-primary mt-3 w-100" type="submit" name="submit" id="register">Sign Up</button>
                            </div>

                            <div>Already have an account?
                                <br>
                                <a href="signin.php" class="link-primary">Sign In</a>
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
<script src="js/register.js"></script>
</body>

</html>