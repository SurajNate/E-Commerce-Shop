<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
  <title>Add Products</title>
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
        <a class="navbar-brand" style="font-weight: bold;font-size:xx-large;" href="../shop.php">Shop <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto my-2">
            <li class="nav-item mx-2">
              <a class="nav-link" href="../shop.php">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="../img/mainshop.php">Shop</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="../about.php">About us</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="../contact.php">Contact</a>
            </li>

          </ul>

          <form class="d-flex">
            <?php
            $count = 0;

            if (isset($_SESSION['cart'])) {
              $count = count($_SESSION['cart']);
            }
            ?>
            <a class="btn btn-outline-success mx-1" href="../img/cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart ( <?php echo $count; ?> )</a>

            <a class="btn btn-success  mx-1" href="../login.php"><i class="fa fa-user" aria-hidden="true"> </i><?php echo "  " . $_SESSION['username'] ?></a>

            <a class="btn btn-success  mx-1" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>

          </form>
        </div>
      </div>
    </nav>
  </header>

  <?php
  /*
    This file contains database configuration assuming you are running mysql using user "root" and password ""
    */

  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'mainshop');

  // Try connecting to the Database
  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  //Check the connection
  if ($conn == false) {
    dir('Error: Cannot connect');
  }

  if (isset($_POST['submit'])) {

    $productname = $_POST['productname'];
    $productimg = $_POST['productimg'];
    $productbrand = $_POST['productbrand'];
    $productprice = $_POST['productprice'];
    $productdelprice = $_POST['productdelprice'];
    $productdiscount = $_POST['productdiscount'];
    $productratings = $_POST['productratings'];

    $sqlquery = "INSERT INTO fashion (name,img,brand,price,delprice,discount,ratings) VALUES ('$productname', '$productimg', '$productbrand', '$productprice', '$productdelprice', '$productdiscount', '$productratings')";


    if (mysqli_query($conn, $sqlquery)) {

      echo "<script>alert('New Product Inserted Successfully.')</script>";
      echo "<script>window.open('fashiongallary.php','_self')</script>";
    } else {
      echo "error :" . mysqli_error($conn);
    }
  }
  ?>

  <!------------- container start ------------->
  <div class="container pt-4 my-5">
    <form action="" method="POST" class="row g-3 needs-validation border border-dark p-4 rounded mt-5" novalidate>
      <h2 class="text-center pb-3">Hello! <?php echo "  " . $_SESSION['username'] ?></h2>
      <hr>
      <div class="row">
        <div class="col-lg-6">
          <h6 class="mt-4">Name of Product : </h6>
          <input type="varchar" class="form-control" id="productname" placeholder="Enter Product Name" name="productname" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Enter Product Name.
          </div>
        </div>

        <div class="col-lg-6">
          <h6 class="mt-4">Image of the Product :</h6>
          <input type="file" class="form-control" id="imgFile" name="productimg" required>
          <div class="valid-feedback">
            Exellent Work!
          </div>
          <div class="invalid-feedback">
            Enter Product Image.
          </div>
        </div>

        <div class="col-lg-4">
          <h6 class="mt-4">Product Brand : </h6>
          <div class="input-group has-validation">
            <input type="varchar" class="form-control" id="productbrand" placeholder="Enter Product Brand" name="productbrand" required>
            <div class="valid-feedback">
              Amezing!
            </div>
            <div class="invalid-feedback">
              Enter Product Brand Name.
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <h6 class="mt-4">Product Price :</h6>
          <div class="input-group mb-3">
            <span class="input-group-text bg-dark text-light">₹</span>
            <input type="number" class="form-control" name="productprice" required>
            <span class="input-group-text bg-dark text-light">.00</span>
          </div>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Enter After Discount Product Price.
          </div>
        </div>

        <div class="col-lg-3">
          <h6 class="mt-4">Original Price : </h6>
          <div class="input-group mb-3">
            <span class="input-group-text bg-dark text-light">₹</span>
            <input type="number" class="form-control" name="productdelprice" required>
            <span class="input-group-text bg-dark text-light">.00</span>
          </div>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please Enter Product Original Price .
          </div>
        </div>

        <div class="col-lg-2">
          <h6 class="mt-4">Product Discount :</h6>
          <div class="input-group mb-3">
            <input type="number" class="form-control" name="productdiscount" required>
            <span class="input-group-text bg-dark text-light">%</span>
          </div>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Enter Discount Rate.
          </div>
        </div>

        <div class="col-lg-2">
          <h6 class="mt-4">Product Ratings :</h6>
          <div class="input-group mb-3">
            <select class="form-select" aria-label="Default select example" name="productratings" required>
              <option selected disabled value="">Ratings</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <span class="input-group-text bg-dark"><i class="fa fa-star" style="color:gold"> </i></span>
          </div>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Select Product Ratings.
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
        <button class="btn btn-dark w-100" type="submit" name="submit">Submit form</button>
      </div>
  </div>
  </div>
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
</body>

</html>