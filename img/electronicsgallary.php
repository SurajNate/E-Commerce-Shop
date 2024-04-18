<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <title>SHOP / electronics</title>
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
    <script src="../js/mainjs2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<style>
    .product-card {
        box-shadow: 0 12px 17px rgba(129, 140, 151, 0.1);
        text-decoration: none;
    }

    .product-card .product-image {
        height: 220px;
        position: relative;
        cursor: pointer
    }

    .product-card .product-image .product-thumbnail {
        width: 84%;
        height: 90%;
        margin: 10% 8% 0;
    }

    .product-card .product-details a {
        text-decoration: none;
        color: #0062cc;
    }

    .product-card a {
        text-decoration: none;
    }

    .product-image {
        transition: .6s ease;
    }

    .product-image:hover {
        transform: scale(1.1)
    }
</style>

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
    <!----------------------header cloased --------------->

    <!---------------------------Add to Cart-------------------------->
    <div class="mt-5 pt-5 me-0 me-lg-2 position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast hide bg-success border border-success" role="alert" aria-live="assertive" aria-atomic="true">
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
            <div class="toast-body text-light p-4 ">
                Product added successfully !
            </div>
        </div>
    </div>

    <!----------------------thambnail started --------------->
    <div class="container-fluid px-0">
        <div class="col-lg-12">
            <div class="hero__item border border-muted" style="background: url(../img/electronicsbanner.jpg)center/cover no-repeat;cursor: pointer;height:95vh">
                <div class="hero__text">
                    <span>ELECTRONICS</span>
                    <h2 class="text-light">NEW <br />ARRIALS</h2>
                    <p class="text-light">Free Pickup and Delivery Available</p>
                    <button class="btn btn-lg btn-success"><a href="#shopnow" class="link-light" style="text-decoration: none;">SHOP
                            NOW</a></button>
                </div>
            </div>
        </div>
    </div>
    <!----------------------thambnail cloased --------------->
    <hr id="shopnow" class="my-5">
    <!----------------------products started --------------->
    <section class="products">
        <div class="container mt-5">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control outline-dark" placeholder="Search product">
                                <div class="input-group-append">
                                    <button type="button" class="btn border bg-dark text-light">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <a class="btn btn-outline-dark" style="font-weight: 600;" href="adminlogin4.php" type="button">
                            Add <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </a>

                    </div>
                </div>
            </div>
            <h2 class="text-center pb-4">ELECTRONICS</h2>
            <div class="row">
                <?PHP

                $con = mysqli_connect('localhost', 'root');
                mysqli_select_db($con, 'mainshop');

                // if($con){
                // 	echo "connection succussful";
                // }else{
                // 	echo "no connection";
                // }


                $query = " SELECT `name`, `img`, `brand` , `price`, `delprice` ,`discount`, `ratings` FROM `electronics` order by id ASC ";

                $queryfire = mysqli_query($con, $query);

                $num = mysqli_num_rows($queryfire);

                if ($num > 0) {
                    while ($product = mysqli_fetch_array($queryfire)) {
                ?>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <form action="manage_cart.php" method="POST">
                                <div class="product-card bg-light mb-4 overflow-hidden rounded position-relative border border-dark m-0 p-0">
                                    <div class="product-image">
                                        <img src="<?php echo
                                                    $product['img'];  ?>" width="100%" alt="" class="product-thumbnail rounded">
                                    </div>
                                    <div class="p-4">
                                        <h6 class="font-weight-bold d-flex justify-content-between">
                                            <a href="#" class="text-dark">
                                                <?php echo
                                                $product['name'];  ?>
                                            </a>
                                            <p class="text-light mt-1"><i style="color: red;cursor:pointer" id="heart" class="fa fa-heart-o" onclick="wishlist()"></i></p>
                                        </h6>
                                        <a href="#" class="col-12 text-uppercase py-0 px-2 rounded border mb-2 d-inline-block">
                                            <small class="badge bg-success text-light mb-1" style="font-weight: 700;"><?php echo
                                                                                                                        $product['brand'];  ?></small>
                                            <h6 class="badge bg-warning text-light my-1" style="float:right"><?php echo
                                                                                                                $product['ratings'];  ?> <i class="fa fa-star"> </i> </h6>
                                        </a>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex align-items-baseline mb-2">
                                                <h5 class="mr-2 pe-2">&#8377; <?php echo $product['price'];  ?></h5>
                                                <h6 class="text-striked text-muted mr-3 font-weight-regular"><del>&#8377; <?php echo $product['delprice'];  ?></del><span class="text-success">- <?php echo $product['discount'];  ?>% off</span></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <button type="submit" class="col-lg-8 col-md-7 col-sm-8 btn btn-dark m-1 py-1" name="productsdetails"> <i class="fa fa-eye" aria-hidden="true"></i> Details</button>
                                            <button type="submit" class="col-lg-3 col-md-3 col-sm-3 btn btn-outline-dark m-1 py-1" name="addtocart" id="liveToastBtn" onclick="showtost(),toasttime()"><i class="fa fa-shopping-cart"></i></button>
                                            <input type="hidden" name="Item_Name" value=" <?php echo $product['name'];  ?>">
                                            <input type="hidden" name="Item_Img" value=" <?php echo $product['img'];  ?>">
                                            <input type="hidden" name="Item_brand" value=" <?php echo $product['brand'];  ?>">
                                            <input type="hidden" name="Item_ratings" value=" <?php echo $product['ratings'];  ?>">
                                            <input type="hidden" name="Item_price" value=" <?php echo $product['price'];  ?>">
                                            <input type="hidden" name="Item_delprice" value=" <?php echo $product['delprice'];  ?>">
                                            <input type="hidden" name="Item_discount" value=" <?php echo $product['discount'];  ?>">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="container-fluid mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link text-dark" href="mainshop.php"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a></li>
                    <li class="page-item"><a class="page-link text-dark" href="mainshop.php">1</a></li>
                    <li class="page-item"><a class="page-link bg-dark text-light" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                    <li class="page-item"><a class="page-link text-dark" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        </div>

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