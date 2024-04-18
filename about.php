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
  <link rel="stylesheet" href="./CSS/nice-select.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Js Plugins -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>

  <script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
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
              <a class="nav-link" href="shop.php">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="./img/mainshop.php">Shop</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="about.php">About us</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="contact.php">Contact</a>
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
            <h1 style="font-size: 3rem;font-weight: bolder;">ABOUT US</h1>
            <hr>
            <div class="breadcrumb__option">
              <a href="shop.html" style="text-decoration: none;font-weight: bolder">Home - </a>
              <span>About Us</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- About Section End -->
  <div class="container">
    <main>
      <div class="container py-4">
        <div class="p-5 mb-4 bg-light rounded-3 border">
          <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold mb-2">Our Intended</h1>
            <p class="col-md-8 col-sm-12 fs-5">We believe the best way deliver a great user experience is by deeply understanding what people want and love. Then deliver the features, messages, and content that are most helpful, relevant and timely. That's what makes users happy and loyal.</p>
            <a href="shop.php" class="btn btn-success btn-lg mt-4" type="button">Get to the Shop</a>
          </div>
        </div>

        <div class="row align-items-md-stretch">
          <div class="col-md-6 col-sm-12">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
              <h2>Customer Care</h2>
              <p>Shop strives to deliver the tools and support that helps companies deliver that great experience. We want our customers customers to be happy, so then our customers are
                happy and that makes us happy.</p>
              <a href="shop.php" class="btn btn-outline-light" type="button">Get to the Shop</a>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="h-100 p-5 bg-light border rounded-3">
              <h2>Contact</h2>
              <p>
                "Fashion is about dressing according to what’s fashionable.
                Style is more about being yourself."
                Hey guys, If you have any questions or queries, we will always be happy to help. Feel free to contact us
                by Telephone Or Email and I will be sure to get back to you as soon as possible.</p>
              <a class="btn btn-outline-success" type="button">Message Us</a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <div class="container pt-5">
    <div class="row">
      <h1 class="text-center">Our Partners/ Our Clients</h1>
      <section class="col-lg-12 py-5" style="display:inline-flex">
        <div class="col-lg-3 p-4"><img src="./img/partners/partner1.png" width="100%"></div>
        <div class="col-lg-3 p-4"><img src="./img/partners/partner1.png" width="100%"></div>
        <div class="col-lg-3 p-4"><img src="./img/partners/partner1.png" width="100%"></div>
        <div class="col-lg-3 p-4"><img src="./img/partners/partner1.png" width="100%"></div>
      </section>

    </div>
  </div>
  <!-- About Section End -->


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