<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">       
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="navbar bg-first m-3">
            <div class="navbar-brand m-auto">
            <div class="navbar-brand">
                    <a href="../index.php">
                        <img src="../photos/design/logo.png" alt="Logo">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-3">  
                <!-- button section -->
                <div class="option m-3">
                    <div class="login-option m-2">
                        <button class="btn btn-login bg-first form-control my-2">Login</button>
                    </div>
                    <div class="register-option m-2">
                        <button class="btn btn-register bg-first form-control">Register</button>
                    </div>
                    <div class="back-home m-2 ">
                    <a href="../index.php"> <button class="btn btn-home bg-first form-control my-2">Back To Home</button></a>
                    </div>
                </div>
                <!-- button section -->
            </div>

            <!-- form section -->
            <div class="col-9 ">
                <!-- login-->
                <div class="adm-login col-9  m-auto">
                    <div class="form b-color m-3">
                        <form action="signin.php" method="POST">
                            <div class="text-center bg-first m-3 p-1">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="inputs text-center">
                                <div class="userid col-8 m-auto">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control" name="email" required>
                                </div>
                                <div class="password col-8 m-auto">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                                <div class="btn-Asignin m-auto my-3 col-5">
                                    <button class="btn bg-first form-control" type="submit" name="submit">signin</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- login-->

                <!-- Register-->
                <div class="adm-register col-9 m-auto">
                    <div class="form b-color m-3">
                        <form action="register.php" method="POST">
                            <div class="text-center m-3 p-1 bg-first">
                                <h4>Register</h4>
                            </div>
                            <div class="inputs text-center">
                                <div class="name col-8 m-auto">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" class="form-control" name="fullName" required>
                                </div>
                                <div class="email col-8 m-auto">
                                    <label for="rEmail">Email</label>
                                    <input type="email" id="rEmail" class="form-control" name="email" required>
                                </div>
                                <div class="phone col-8 m-auto">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" id="phone" class="form-control" name="phoneNo" required>
                                </div>
                                <div class="address col-8 m-auto">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" class="form-control" name="address" required>
                                </div>
                                <div class="password col-8 m-auto">
                                    <label for="rpassword">Password</label>
                                    <input type="password" id="rpassword" class="form-control" name="password" required>
                                </div>
                                <div class="confirm-password col-8 m-auto">
                                    <label for="rcPassword">Confirm Password</label>
                                    <input type="password" id="rcPassword" class="form-control"  required>
                                </div>
                                <div class="show-error col-8 m-auto">
                                </div>
                            </div>
                            <div class="btn-Asignin col-7 m-auto my-3">
                                <button id="registerBtn" class="btn bg-first form-control" type="submit" name="reg-submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Register-->
            </div>
            <!-- form section -->
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    <script src="javascript/login.js"></script>
</body>
</html>