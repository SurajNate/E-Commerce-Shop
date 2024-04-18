<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
  <title>SHOP / Product-details</title>
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

  <script>
    function clickme(smallImg) {
      var fullImg = document.getElementById("imagebox");
      fullImg.src = smallImg.src;
    }
  </script>

</head>

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

            <a class="btn btn-success  mx-1" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>

          </form>
        </div>
      </div>
    </nav>
  </header>
  <!----------------------header cloased --------------->

  <!----------------------details started --------------->
  <section class="products-details pt-1 mt-5">
  <form action="manage_cart.php" method="POST">
    <div class="container mt-5">
      <div class="row">
        <?php 
        $con = mysqli_connect('localhost', 'root');
        mysqli_select_db($con, 'mainshop');

        // if($con){
        // 	echo "connection succussful";
        // }else{
        // 	echo "no connection";
        // }


        $sql = " SELECT `name`, `img`, `brand` , `price`, `delprice` ,`discount`, `ratings` FROM `all_products` order by name ";
        $queryfire = mysqli_query($con, $sql);
        $product = mysqli_fetch_array($queryfire)
         ?>
         <?php 
         foreach ($_SESSION['details'] as $key => $value) {
          $product['Item_Img'] = $value['Item_Img'];
            echo"
              <div class='col-lg-6'>
                <div class='col-lg-12 col-md-12 col-sm-12 preview'>
                  <img class='p-1' src=$product[Item_Img] width='100%' margin='0 5%' height='520px' id='imagebox' style='cursor: pointer;'>
                </div>
                <!-----
                <div class='row'>
                  <ul style='list-style-type: none;' class='d-flex'>
                    <li class='w-25'><img class='p-1' src='./deatailed5.1.jpeg' width='100%' height='130px' onclick='clickme(this)' style='cursor: pointer;'></li>
                    <li class='w-25'><img class='p-1' src='./deatailed2.1.jpeg' width='100%' height='130px' onclick='clickme(this)' style='cursor: pointer;'></li>
                    <li class='w-25'><img class='p-1' src='./deatailed3.1.jpeg' width='100%' height='130px' onclick='clickme(this)' style='cursor: pointer;'></li>
                    <li class='w-25'><img class='p-1' src='./deatailed4.1.jpeg' width='100%' height='130px' onclick='clickme(this)' style='cursor: pointer;'></li>
                  </ul>
                </div> --->
              </div>
              <div class='col-lg-6 p-5 mt-2'>

                <p class='bg-success rounded text-light px-2' style='width:fit-content'>Brand : <strong>$value[Item_brand]</strong></p>

                <h2>$value[Item_Name]</h2><br>

                <h6 class='badge bg-warning text-light my-1'> $value[Item_ratings] <i class='fa fa-star'> </i> </h6><br>

                <p><del style='font-size: 1.8em;'>₹ $value[Item_delprice]</del> <br> <strong>₹ $value[Item_price]</strong></p>

                <h4>$value[Item_discount]% off</h4><br>
                 
                <br>

                <button type='submit' name='addtocart' class='btn btn-success w-100'>Add to Cart <i class='fa fa-shopping-cart'></i></button>
                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                <input type='hidden' name='Item_price' value='$value[Item_price]'>
              </div>";
         
         }
         ?>
      </div>
    </div>
  </form>
  </section>

  <!-- Footer Section Begin -->
  <footer class="footer mt-3">
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