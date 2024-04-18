<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <title>Shopping</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="suraj nate, Nate, and Bootstrap contributors">

    <!-- Css Styles -->
    <link rel="icon" href="" type="image/ico" sizes="150x150">
    <link rel="stylesheet" href="./CSS/shop.css">
    <link rel="stylesheet" href="./CSS/jquery-ui.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Confetti  JS-->
    <script src="./js/confetti.js"></script>

    <script>
        const start = () => {
            setTimeout(function() {
                confetti.start()
            }, 1000); // 1000 is time that after 1 second start the confetti ( 1000 = 1 sec)
        };

        //  Stop

        const stop = () => {
            setTimeout(function() {
                confetti.stop()
            }, 5000); // 5000 is time that after 5 second stop the confetti ( 5000 = 5 sec)
        };

        start();
        stop();
    </script>
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
                <a class="navbar-brand" style="font-weight: bold;font-size:xx-large;" href="./shop.php">Shop <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto my-2">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="./shop.php">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="./img/mainshop.php">Shop</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="./about.php">About us</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" aria-current="page" href="./contact.php">Contact</a>
                        </li>
                    </ul>

                    <form class="d-flex">

                        <a class="btn btn-success  mx-1" href="./login.php"><i class="fa fa-user" aria-hidden="true"> </i><?php echo "  " . $_SESSION['username'] ?></a>

                        <a class="btn btn-success  mx-1" href="./logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>

                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section pt-5 mt-5">
        <div class="container-fluid pt-3 bg-light">
            <div class="row pb-5">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h1 style="font-size: 3rem;font-weight: bolder;">THANK YOU</h1>
                        <hr>
                        <div class="container w-100 py-2">
                            <video width="100%" height="240" autoplay muted>
                                <source src="./img/delivery.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

 <!--------------------------delivery process start-------------------->
 <div class="container-fluid py-5">
    <h2 class="title text-center">OUR SHIPPING PROCESS</h2>
    <div class="container">
      <div class="row mt-lg-5">
        <div class="col-lg-4">
          <img src="./img/deliveryimg/deliveryimg.jpg" style="width: 100%; height: 250px;" class="shippingimg">
          <br>
          <h2 class="text-center mt-4" style="font-size: 1.5rem;"><span style="color: #6f42c1;">REGISTER</span> WITH US
          </h2>
          <p class="text-center">Fill the Contact form, and our client onboarding team will contact you.</p>
        </div>
        <div class="col-lg-4">
          <img src="./img/deliveryimg/deliveryimg2.jpg" style="width: 100%; height: 250px;" class="shippingimg">
          <br>
          <h2 class="text-center mt-4" style="font-size: 1.5rem;">CHOOSE YOUR <span class="text-info">PRODUCT</span>
          </h2>
          <p class="text-center">Choose the product that you like and wants to order, Add the product into Cart.</p>
        </div>
        <div class="col-lg-4">
          <img src="./img/deliveryimg/deliveryimg3.gif" style="width: 100%; height: 250px;" class="shippingimg">
          <br>
          <h2 class="text-center mt-4" style="font-size: 1.5rem;">START <span class="text-danger">SHIPPING</span>
          </h2>
          <p class="text-center">Simply hand over the Products from your preferred location.</p>
        </div>
      </div>
    </div>
  </div>
  <!--------------------------delivery process end-------------------->

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
                        <h6 class="text-center">Useful Links</h6>
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
    </section>
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

</body>

</html>