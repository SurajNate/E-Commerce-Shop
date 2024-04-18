<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

//This script will handle login
session_start();

// check if the user is already logged in
if (isset($_SESSION['admins'])) {
    header("location: electronicsgallary.php"); /* ------------------------------------------------------------------------------------ */
    exit;
}


$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") {


    if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
        $err = "Please enter username + password";
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


    if (empty($err)) {
        $sql = "SELECT id, username, password FROM admin WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;


        // Try to execute this statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        // this means the password is corrct. Allow user to login
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        //Redirect user to welcome page
                        header("location: addelectronics.php"); /* ------------------------------------------------------------------------------------ */
                    } else {
                        echo "<script>alert('Enter valied password')</script>";
                    }
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shopping / log in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="suraj nate, Nate">

    <!-- Css Styles -->
    <link rel="icon" href="../img/favicon.ico" type="image/ico" sizes="200x150">
    <link rel="stylesheet" href="../CSS/shop.css">
    <link rel="stylesheet" href="../CSS/jquery-ui.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!---------------------------Navigations-------------------------->
    <header class="header">
        <nav class="navbar navbar-expand-xl navbar-dark fixed-top bg-dark py-3">
            <div class="container">
                <a class="navbar-brand" style="font-weight: bold;font-size:xx-large;" href="./index.php">Shop <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto my-2">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="../shop.php">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="./about.php">About us</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="./contact.php">Contact</a>
                        </li>
                    </ul>

                    <form class="d-flex">
                    <a class="btn btn-success  mx-1"><i class="fa fa-user" aria-hidden="true"> </i><?php echo "  " . $_SESSION['username'] ?></a>
                    <a class="btn btn-success  mx-1" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="container col-lg-4 col-md-6 col-sm-12 col-12 pt-4 my-5">
        <form action="" method="POST" class="row g-3 needs-validation border border-dark p-4 rounded mt-5" novalidate>
            <h2 class="text-center">Admin Log in</h2>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="mt-4">Username : </h6>
                    <input type="varchar" class="form-control" id="username" placeholder="Enter Username" name="username" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Enter valied user_id
                    </div>
                </div>

                <div class="col-lg-12">
                    <h6 class="mt-4">Password : </h6>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" name='password' required>
                        <div class="valid-feedback">
                            Amezing!
                        </div>
                        <div class="invalid-feedback">
                            Enter Password Properly
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must check before submitting.
                    </div>
                </div>
            </div>

            <div class="col-12">
                <button id="submit" class="btn btn-primary w-100" type="submit">Log in</button>
            </div>
            <p class="text-center">Create an admin account ? <a class="ms-2" href="../contact.php" style="text-decoration: none;">Contact</a></p>

        </form>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

    <!-- Footer Section Begin -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="footer__about">
            <div class="footer__about__logo text-center">
              <a class="navbar-brand text-dark" style="font-weight: bold;font-size:xx-large;" href="#">Shop <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            </div>
            <ul>
              <li><strong> Address : </strong> India, Maharashtra, Borivali (W), Mum-92.</li>
              <li><strong> Phone : </strong> +91 89288 96469</li>
              <li><strong> Email : </strong> surajnate29@gmail.com</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
          <div class="footer__widget">
            <h6>Useful Links</h6>
            <ul>
              <li><a href="about.php" style="text-decoration: none;">About Us</a></li>
              <li><a href="contact.php" style="text-decoration: none;">Contact</a></li>
              <li><a href="#" style="text-decoration: none;">Secure Shopping</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="footer__widget">
            <h6>Join Our Newsletter Now</h6>
            <p>Get E-mail updates about our latest shop and special offers.</p>
            <div class="footer__widget__social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-snapchat"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 py-2">
        <hr>
            <div class="text-center">
            Copyright © 2022 All rights reserved 
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

    <!------============= backtotop section =============------>
    <section class="backtotop">
        <a class="gotop" href="#"><i class="fa fa-arrow-up"></i></a>
        <style>
            /* backto top*/
            .gotop {
                position: fixed;
                width: 50px;
                height: 50px;
                background: black;
                bottom: 30px;
                right: 40px;
                text-decoration: none;
                text-align: center;
                line-height: 50px;
                color: white;
                font-size: 22px;
                border-radius: 10px;
                transition: .9s ease;
            }

            .gotop:hover {
                background-color: white;
                color: black;
                box-shadow: 10px 20px 20px rgba(0, 0, 0, 0.205);
                border: 1px solid #0b2e4e;
            }
        </style>
    </section>


</body>

</html>