<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <title>Shopping</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="suraj nate, Nate">

    <!-- Css Styles -->
    <link rel="icon" href="./img/favicon.ico" type="image/ico" sizes="200x150">
    <link rel="stylesheet" href="./CSS/shop.css">
    <link rel="stylesheet" href="./CSS/jquery-ui.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/mainjs2.js"></script>
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
                <a class="navbar-brand" style="font-weight: bold;font-size:xx-large;" href="shop.php">Shop <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
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
                            <a class="nav-link" href="about.php">About us</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                        </li>
                    </ul>

                    <form class="d-flex">
                        <?php
                        $count = 0;

                        if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                        }
                        ?>
                        <a class="btn btn-outline-success mx-1" href="./img/cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart ( <?php echo $count; ?> )</a>

                        <a class="btn btn-success  mx-1" href="./login.php"><i class="fa fa-user" aria-hidden="true"> </i><?php echo "  " . $_SESSION['username'] ?></a>

                        <a class="btn btn-success  mx-1" href="./logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>

                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section pt-5 mt-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h1 style="font-size: 3rem;font-weight: bolder;">CONTACT US</h1>
                        <hr>
                        <div class="breadcrumb__option">
                            <a href="./shop.php" style="text-decoration: none;font-weight: bolder">Home - </a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row" style="width: 90%;display: inline-flex;margin: 0 5%;">
                <div class="col-lg-3 col-md-6 col-sm-6 text-center bg-dark p-5 rounded-start">
                    <div class="contact__widget text-light">
                        <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                        <h4 class="text-light">Phone</h4>
                        <p class="text-light">+91 89288 96469</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center bg-dark p-5">
                    <div class="contact__widget text-light">
                        <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
                        <h4 class="text-light">Address</h4>
                        <p class="text-light">India, Maharashtra, Borivali (W), Mum-92.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center bg-dark p-5">
                    <div class="contact__widget text-light">
                        <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
                        <h4 class="text-light">Open time</h4>
                        <p class="text-light">10:00 am to 23:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center bg-dark p-5 rounded-end">
                    <div class="contact__widget text-light">
                        <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
                        <h4 class="text-light">Email</h4>
                        <p class="text-light">surajnate29@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Form Begin -->
    <!---------------------------After send-------------------------->
    <div class="mt-5 pt-5 me-0 me-lg-2 position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast show bg-success border border-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <svg style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                </svg>
                <svg class="bi flex-shrink-0 me-2 text-success" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <strong class="me-auto text-success">Shop</strong>
                <small id="toasttime"></small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-light p-3">
                we will be sure to get back to you as soon as possible.
            </div>
        </div>
    </div>

    <div class="contact-form spad bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="pb-3 text-center">CONTACT US</h1>
                    <hr>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <h2 class="py-3">Get in Touch</h2>
                            <div class="col-lg-10 col-md-6">
                                <p style="font-size: large;">If you have any quations or quaries, We will always be
                                    happy to help. feel free to contact us by telephone or Email and We will be sure to
                                    get back to you as soon as possible.</p>
                            </div>
                        </div>
                        <div class="row">
                            <h3 class="py-3">Our Team</h3>
                            <div class="col-lg-12 col-md-6" style="display: flex;">
                                <div class="col-lg-3 p-2">
                                    <a href="http://surajnate.unaux.com" style="text-decoration: none;" class="text-dark">
                                        <img src="./img/team/suraj.jpg" alt="" width="100%">
                                        <h5 class="py-3">Suraj Nate</h5>
                                    </a>
                                </div>
                                <div class="col-lg-3 p-2">
                                    <a href="" style="text-decoration: none;" class="text-dark">
                                        <img src="./img/team/hemant.jpg" alt="" width="100%">
                                        <h5 class="py-3">Hemant Bhagat</h5>
                                    </a>
                                </div>
                                <div class="col-lg-3 p-2">
                                    <a href="" style="text-decoration: none;" class="text-dark">
                                        <img src="./img/team/satbir.jpeg" alt="" width="100%">
                                        <h5 class="py-3">Satbir Singh</h5>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="py-3">Message Us</h2>
                        <form action="#" method="post" class="needs-validation" novalidate>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Your name" required>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="col-lg-12 text-center">
                                <textarea placeholder="Your message" class="form-control" required></textarea>
                                <button type="submit" class="btn btn-lg btn-outline-success">SEND MESSAGE</button>

                            </div>
                        </form>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Map Begin -->
    <div class="container pt-5">
        <h1 class="py-5 text-center">LOCATE US</h1>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1883.5690089243144!2d72.84725455154134!3d19.232815798838214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b126374fb0ab%3A0x48642df021e97369!2sSodawala%20Ln%2C%20Govind%20Nagar%2C%20Borivali%20West%2C%20Mumbai%2C%20Maharashtra%20400091!5e0!3m2!1sen!2sin!4v1634569802488!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Suraj Nate</h4>
                <ul>
                    <li>Phone: +91 89288 96469</li>
                    <li>Add: Eksar Dongri, Govind nagar,
                        Sodawala lane, Borivali (W), Mum-92.</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->


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