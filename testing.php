<!DOCTYPE html>
<html lang="en">
<?php session_start(); 

$con = new mysqli("localhost","root","","mainshop");
if($con->connect_error){
    die("connection Failed" - $con->connect_error);
}
?>


<head>
    <title>Shopping</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="suraj nate, Nate">

    <!-- Css Styles -->
    <link rel="icon" href="../img/favicon.ico" type="image/ico" sizes="200x150">
    <link rel="stylesheet" href="../CSS/shop.css">
    <link rel="stylesheet" href="../CSS/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
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
                            <a class="nav-link active" aria-current="page" href="./img/mainshop.php">Shop</a>
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

    <!-- Hero Section Begin -->
    <section class="hero mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="hero__categories">
                        <div class="accordion" id="accordionExample">
                            <!---------------------------accordion1--------------------------->
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingOne">
                                    <button class="accordion-button bg-dark text-light link-light" style="font-size: large;font-weight: 700;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        All Categories
                                    </button>
                                </h4>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="p-0" style="border: none">
                                        <?php 
                                        $sql = "SELECT DISTINCT brand FROM all_products ORDER BY brand"
                                        ?>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="freshfood" id="freshfood" checked>
                                                    <label class="form-check-label" for="freshfood">
                                                        Fresh Food
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">9</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="grocery" id="grocery">
                                                    <label class="form-check-label" for="grocery">
                                                        Grocery
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">12</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="fashion" id="fashion">
                                                    <label class="form-check-label" for="fashion">
                                                        Fashion
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">26</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="electronics" id="electronics">
                                                    <label class="form-check-label" for="electronics">
                                                        Electronics
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">7</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="mobiles" id="mobiles">
                                                    <label class="form-check-label" for="mobiles">
                                                        Mobiles
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">4</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="beauty" id="beauty">
                                                    <label class="form-check-label" for="beauty">
                                                        Beauty
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">2</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="sports" id="sports">
                                                    <label class="form-check-label" for="sports">
                                                        Sports
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">19</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="appliances" id="appliances">
                                                    <label class="form-check-label" for="appliances">
                                                        Appliances
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">14</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="shoes" id="shoes">
                                                    <label class="form-check-label" for="shoes">
                                                        Shoes
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">22</span>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!---------------------------accordion2--------------------------->
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button bg-dark text-light link-light" style="font-size: large;font-weight: 700;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                        Price
                                    </button>
                                </h4>
                                <div id="collapsetwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="p-0" style="border: none">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        $0 - $200
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">200</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        $0 - $200
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">36</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        $0 - $200
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">48</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        $0 - $200
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">69</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        $0 - $200
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">29</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        $0 - $200
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">18</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!---------------------------accordion3--------------------------->
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingThree">
                                    <button class="accordion-button bg-dark text-light link-light" style="font-size: large;font-weight: 700;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
                                        Color
                                    </button>
                                </h4>
                                <div id="collapsethree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="p-0" style="border: none">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        All Sizes
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">200</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Extra Small
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">36</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Small
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">48</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Medium
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">69</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Large
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">29</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Extra Large
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">18</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!---------------------------accordion4--------------------------->
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingFour">
                                    <button class="accordion-button bg-dark text-light link-light" style="font-size: large;font-weight: 700;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                        Customer Ratings
                                    </button>
                                </h4>
                                <div id="collapsefour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="p-0" style="border: none">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        1★ & above
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">200</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        2★ & above
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">36</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        3★ & above
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">48</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        4★ & above
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">69</span>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!---------------------------accordion5--------------------------->
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingFive">
                                    <button class="accordion-button bg-dark text-light link-light" style="font-size: large;font-weight: 700;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                        Discount
                                    </button>
                                </h4>
                                <div id="collapsefive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="p-0" style="border: none">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        10% and more
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">200</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        20% and more
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">36</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        30% and more
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">48</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        40% and more
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">69</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        50% and more
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">69</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        70% and more
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">69</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        80% to 90%
                                                    </label>
                                                    <span class="badge bg-dark rounded-pill float-end">69</span>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---------------------------products--------------------------->

                <div class="col-lg-9 col-md-8">
                    <div class="row mt-3 mx-0">
                        <div class="col-12 pb-1">
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

                                <div class="dropdown ps-1">
                                    <button class="btn btn-outline-dark dropdown-toggle" style="font-weight: 600;" type="button" id="dropstartMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sort by
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropstartMenuButton">
                                        <li><a class="dropdown-item" href="#">Latest</a></li>
                                        <li><a class="dropdown-item" href="#">Popularity</a></li>
                                        <li><a class="dropdown-item" href="#">Best Rating</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                        <?PHP

                        $con = mysqli_connect('localhost', 'root');
                        mysqli_select_db($con, 'mainshop');

                        // if($con){
                        // 	echo "connection succussful";
                        // }else{
                        // 	echo "no connection";
                        // }


                        $query = " SELECT `name`, `img`, `brand` , `price`, `delprice` ,`discount`, `ratings` FROM `freshfood` order by id ASC ";

                        $queryfire = mysqli_query($con, $query);

                        $num = mysqli_num_rows($queryfire);

                        if ($num > 0) {
                            while ($product = mysqli_fetch_array($queryfire)) {
                        ?>

                                <div class="col-lg-4 col-md-6 col-sm-6 mx-0">
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
                                                    <small class="badge bg-success text-light mb-1" style="font-weight: 700;"><?php echo $product['brand'];  ?></small>
                                                    <h6 class="badge bg-warning text-light my-1" style="float:right"><?php echo $product['ratings'];  ?> <i class="fa fa-star"> </i> </h6>
                                                </a>
                                                <div class="row">
                                                    <div class="col-lg-12 d-flex align-items-baseline mb-2">
                                                        <h5 class="mr-2 pe-2">&#8377; <?php echo $product['price'];  ?></h5>
                                                        <h6 class="text-striked text-muted mr-3 font-weight-regular"><del>&#8377; <?php echo $product['delprice'];  ?></del><span class="text-success">- <?php echo $product['discount'];  ?>% off</span></h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <button type="button" class="col-lg-8 col-md-7 col-sm-8 btn btn-dark m-1 py-1"> <i class="fa fa-eye" aria-hidden="true"></i> Details</button>
                                                    <button type="submit" class="col-lg-3 col-md-3 col-sm-3 btn btn-outline-dark m-1 py-1" name="addtocart" id="liveToastBtn" onclick="showtost(),toasttime()"><i class="fa fa-shopping-cart"></i></button>
                                                    <input type="hidden" name="Item_Name" value=" <?php echo $product['name'];  ?>">
                                                    <input type="hidden" name="Item_price" value=" <?php echo $product['price'];  ?>">
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
                            <li class="page-item"><a class="page-link text-dark" href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a></li>
                            <li class="page-item"><a class="page-link bg-dark text-light" href="#">1</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="freshfoodgallary.php">2</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="freshfoodgallary.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
    </section>
    <!-- Hero Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo text-center">
                            <a class="navbar-brand text-dark" style="font-weight: bold;font-size:xx-large;" href="#">Shop <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This
                                template is made
                                with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="./payment-item.png" alt=""></div>
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