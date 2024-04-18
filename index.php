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
        <a class="navbar-brand" style="font-weight: bold;font-size:xx-large;" href="#">Shop <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto my-2">
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="./login.php">Shop</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="./login.php">About us</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="./login.php">Contact</a>
            </li>
          </ul>

          <form class="d-flex">
            <a class="btn btn-success mx-1" href="./login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in </a>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <!---------------------------Corausar--------------------------->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators pb-1">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner pb-3">
      <div class="carousel-item active">
        <img src="./img/mensclothingbaner.jpg" alt="banner1">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Register</h1>
            <p class="bg-success py-1 px-2 rounded" style="width:fit-content">"Fashion is about dressing according to what’s fashionable. Style is more about being yourself."</p>
            <p><a class="btn btn-lg btn-danger" href="register.php">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/electronicsbannershop.jpg" alt="banner2">

        <div class="container">
          <div class="carousel-caption">
            <h1>Customer Care</h1>
            <p class="bg-secondary w-100 rounded py-1">We believe the best way deliver a great user experience is by deeply understanding what people want and love. </p>
            <p><a class="btn btn-lg btn-success" href="login.php">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/shoesbanner.jpg" alt="banner3">

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Connect Us</h1>
            <p class="bg-success py-1 px-2 rounded">Hey guys, If you have any questions or queries, we will always be happy to help. we will be sure to get back to you as soon as possible.</p>
            <p><a class="btn btn-lg btn-primary" href="login.php">Contact</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Hero Section Begin -->
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="hero__categories">
            <div class="hero__categories__all bg-success">
              <i class="fa fa-bars"></i>
              <span>All Categories <span style="font-size:15px" class="badge bg-light rounded-pill float-end text-success">new</span></span>
            </div>
            <ul>
              <li><a href="./login.php">Fresh Food <span class="badge bg-success rounded-pill float-end me-3">9</span></a></li>
              <li><a href="./login.php">Grocery <span class="badge bg-success rounded-pill float-end me-3">12</span></a></li>
              <li><a href="./login.php">Fashion <span class="badge bg-success rounded-pill float-end me-3">26</span></a></li>
              <li><a href="./login.php">Electronics <span class="badge bg-success rounded-pill float-end me-3">7</span></a></li>
              <li><a href="./login.php">Mobiles <span class="badge bg-success rounded-pill float-end me-3">4</span></a></li>
              <li><a href="./login.php">Beauty <span class="badge bg-success rounded-pill float-end me-3">2</span></a></li>
              <li><a href="./login.php">Sports <span class="badge bg-success rounded-pill float-end me-3">19</span></a></li>
              <li><a href="./login.php">Appliances <span class="badge bg-success rounded-pill float-end me-3">14</span></a></li>
              <li><a href="./login.php">Shoes <span class="badge bg-success rounded-pill float-end me-3">22</span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="hero__item" style="background: url(./img/hero/banner.jpg);">
            <div class="hero__text">
              <span>FRUIT FRESH</span>
              <h2>Vegetable <br />100% Organic</h2>
              <p>Free Pickup and Delivery Available</p>
              <button class="btn btn-lg btn-success"><a href="shop.php" class="link-light" style="text-decoration: none;">SHOP
                  NOW</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->

  <!-- Featured Start -->
  <div class="container pb-5">
    <div class="row py-5">
      <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
          <h1 class="fa fa-check fa-3x text-dark m-0 mr-3 ps-2"></h1>
          <h5 class="ps-4 m-0">Quality Product</h5>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
          <h1 class="fa fa-truck fa-3x text-dark m-0 mr-3 ps-2"></h1>
          <h5 class="ps-4 m-0">Free Shipping</h5>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
          <h1 class="fa fa-exchange fa-3x text-dark m-0 mr-3 ps-2"></h1>
          <h5 class="ps-4 m-0">14-Day Return</h5>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
          <h1 class="fa fa-volume-control-phone fa-3x text-dark m-0 mr-3 ps-2"></h1>
          <h5 class="ps-4 m-0">24/7 Support</h5>
        </div>
      </div>
    </div>
  </div>
  <!-- Featured End -->

  <!-- Categories Section Begin -->
  <section class="categories bg-light" id="products">
    <h1 class="text-center py-5">FEATURED PRODUCTS
      <hr class="mx-5">
    </h1>
    <div class="container">
      <div class="row">
        <div class="categories__slider owl-carousel">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="categories__item bg-dark w-100 rounded">
                <img src="./img/categories/freshfood.png" alt="" width="100%">
                <h5><a href="./login.php">Fresh Food</a></h5>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="categories__item bg-dark w-100 rounded">
                <img src="./img/categories/Grocery.png" alt="" width="100%">
                <h5><a href="./login.php">Grocery</a></h5>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="categories__item bg-dark w-100 rounded">
                <img src="./img/categories/fashion-removebg-preview.png" alt="" width="100%" height="100%">
                <h5><a href="./login.php">Fashion</a></h5>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="categories__item bg-dark w-100 rounded">
                <img src="./img/categories/electronics-removebg-preview.png" alt="" width="100%" height="85%">
                <h5><a href="./login.php">Electronics</a></h5>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="categories__item bg-dark w-100 rounded">
                <img src="./img/categories/mobile-removebg-preview.png" alt="" width="100%" height="100%">
                <h5><a href="./login.php">Mobiles</a></h5>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="categories__item bg-dark w-100 rounded">
                <img src="./img/categories/beauty-removebg-preview.png" alt="" width="100%" height="85%">
                <h5><a href="./login.php">Beauty</a></h5>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="categories__item bg-dark w-100 rounded">
                <img src="./img/categories/sports-removebg-preview.png" alt="" width="100%" height="100%">
                <h5><a href="./login.php">Sports</a></h5>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="categories__item bg-dark w-100 rounded">
                <img src="./img/categories/appliances-removebg-preview.png" alt="" width="100%" height="100%">
                <h5><a href="./login.php">Appliances</a></h5>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="categories__item bg-dark w-100 rounded">
                <img src="./img/categories/shoe-removebg-preview.png" alt="" width="60%" height="80%" style="margin: 10px 20% 0;">
                <h5><a href="./login.php">Shoes</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Categories Section End -->

  <!-- Banner Begin -->
  <div class="container my-5">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="banner__pic">
          <img src="img/banner/banner-1.jpg" alt="" width="100%">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="banner__pic">
          <img src="img/banner/banner-2.jpg" alt="" width="100%">
        </div>
      </div>
    </div>
  </div>
  <!-- Banner End -->

  <!------------------custom cards-------------------->
  <div class="container-fluid bg-light">
    <div class="container px-4 py-5" id="custom-cards">
      <h2 class="pb-2 border-bottom text-center">Developers</h2>

      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
            <div class="d-flex flex-column h-100 p-5 text-white text-shadow-1">
              <img src="./img/team/suraj.jpg" class="rounded">
              <h2 class="pt-4 mb-4 fw-bold">Suraj Nate</h2>
              <ul class="d-flex list-unstyled mt-auto mb-0">
                <li class="me-auto">
                  <a href="https://instagram.com/surajnate___?igshid=YmMyMTA2M2Y="><img src="./img/instagram.png" width="32" height="32" class="mx-1 rounded-circle"></a>
                  <a href="https://www.snapchat.com/add/natesuraj?share_id=5H_jgbPMd6Q&locale=en-IN"><img src="./img/snapchat.png" width="32" height="32" class="mx-1 rounded-circle"></a>
                  <a href="https://www.facebook.com/suraj.nate.75"><img src="./img/facebook.png" width="32" height="32" class="mx-1 rounded-circle"></a>
                </li>

                <li class="d-flex align-items-center">
                  <small>Borivali (w)</small>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
            <div class="d-flex flex-column h-100 p-5 text-white text-shadow-1">
              <img src="./img/team/hemant.jpg" class="rounded">
              <h2 class="pt-4 mb-4 fw-bold">Hemant Bhagat</h2>
              <ul class="d-flex list-unstyled mt-auto mb-0">
                <li class="me-auto">
                  <a href="https://instagram.com/hemant_bhagat_51?igshid=YmMyMTA2M2Y="><img src="./img/instagram.png" width="32" height="32" class="mx-1 rounded-circle"></a>
                  <a href="https://www.snapchat.com/add/hbhagat.51?share_id=LMRGEk6B5jo&locale=en-GB"><img src="./img/snapchat.png" width="32" height="32" class="mx-1 rounded-circle"></a>
                  <a href="https://www.facebook.com/profile.php?id=100043134034074"><img src="./img/facebook.png" width="32" height="32" class="mx-1 rounded-circle"></a>
                </li>

                <li class="d-flex align-items-center">
                  <small>Vile Parle (w)</small>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
            <div class="d-flex flex-column h-100 p-5 text-white text-shadow-1">
              <img src="./img/team/satbir.jpeg" class="rounded">
              <h2 class="pt-4 mb-4 fw-bold">Satbir Singh</h2>
              <ul class="d-flex list-unstyled mt-auto mb-0">
                <li class="me-auto">
                  <a href="https://instagram.com/sunnysinghmusic?igshid=YmMyMTA2M2Y="><img src="./img/instagram.png" width="32" height="32" class="mx-1 rounded-circle"></a>
                  <a href="https://www.snapchat.com/add/sunnysinghmusic?share_id=gX1sVLK3e8s&locale=en-GB"><img src="./img/snapchat.png" width="32" height="32" class="mx-1 rounded-circle"></a>
                  <a href="https://www.facebook.com/profile.php?id=100010037255025"><img src="./img/facebook.png" width="32" height="32" class="mx-1 rounded-circle"></a>
                </li>

                <li class="d-flex align-items-center">
                  <small>Malad (w)</small>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!--------------------------delivery process start-------------------->
  <div class="container-fluid mt-5 py-5">
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
            <ul>
              <li><strong> Address : </strong> India, Maharashtra, Borivali (W), Mum-92.</li>
              <li><strong> Phone : </strong> +91 89288 96469</li>
              <li><strong> Email : </strong> surajnate29@gmail.com</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
          <a class="navbar-brand text-dark" style="font-weight: bold;font-size:xx-large;" href="#">Shop <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
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