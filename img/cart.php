<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <title>SHOP / cart</title>
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
    <script src="../js/order.js"></script>
    <script src="../js/mainjs2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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

                        <a class="btn btn-success  mx-1" href="../login.php"><i class="fa fa-user" aria-hidden="true"> </i><?php echo "  " . $_SESSION['username'] ?></a>

                        <a class="btn btn-success  mx-1" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>

                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!----------------------header cloased --------------->

    <div class="container my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-12 text-center bg-light rounded border py-3">
                <h1>MY CART</h1>
            </div>

            <div class="col-12">
                <div class="table-responsive-xl">
                    <table class="table mt-3 text-center bg-light table-bordered table-hover">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>Sr.no.</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $key => $value) {

                                    $sr = $key + 1;
                                    $total = $total + $value['Item_price'];
                                    echo "
                                        <tr>
                                        <td>$sr</td>
                                        <td class='text-start' id='itemname'><strong> $value[Item_Name] </strong></td>
                                        <td class='text-start' id='itemvalue'><strong>₹</strong> $value[Item_price]</td>
                                        <td id='itemquantity'><input type='number' class='text-center' value='$value[Quantity]' min='1' max='9'></td>
                                        <td>
                                        <form action='manage_cart.php' method='POST'>
                                        <button class='btn btn-sm btn-danger' name='Remove_Item' ><i class='fa fa-trash fa-2x'></i></button>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                        </td>
                                        </tr>
                                ";
                                }
                            }
                            ?>

                        </tbody>
                        <footer>
                            <tr>
                                <td colspan="5">
                                    <form action='manage_cart.php' method='POST'>
                                        <button class='col-12 btn btn btn-danger' name='Remove_AllItem'>REMOVE ALL</button>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                </td>
                            </tr>
                        </footer>
                    </table>
                </div>
            </div>

            <div class="col-lg-12 mt-3">
                <div class="border bg-light rounded p-4">
                    <h3>Total : </h3>
                    <h5 class="text-end"><strong>₹</strong> <?php echo $total ?></h5>
                    <hr>
                    <style>
                        .paymentrow {
                            width: 100%;
                            height: 50px;
                            padding: 15px 20px 35px 50px;
                            border: 1px solid rgb(150, 150, 150);
                            border-radius: 5px;
                            cursor: pointer;
                        }
                    </style>
                    <form name="myform" action="" onsubmit="return validateform()">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>Payment Methods</h5>
                                <ul style="list-style-type: none">
                                    <li>
                                        <div class="form-check my-4 paymentrow" id="paymentrow">
                                            <input class="form-check-input" type="radio" name="payment" id="btn-1" onclick="dropdown1()" value="Credit Card" checked>
                                            <label class="ps-1 form-check-label">
                                                <strong>Credit Card</strong>
                                            </label>
                                            <img class="col-3 float-end" src="../img/paymentmodes.jpg" width="100%">
                                        </div>
                                        <ul id="card" style="list-style-type: none; border: 1px solid gray; border-radius: 5px">
                                            <li class="pt-4">
                                                <label>Card number</label><br><br>
                                                <div class="paymentrow2" style="width:90% ;border-radius: 5px; border: 1px solid gray; height:40px">
                                                    <input class="col-lg-10" type="number" style="width:90%;border-radius: 5px; border: 0.1px solid gray; height:40px;padding-left:10px" name="cardno" id="cardno" /><img src="../img/visa.png" width="10%" height="40px" style="float:right"><br><br>
                                                </div>
                                                <label>Exapiry date</label><br><br>
                                                <select id="expirymonth" style="border-radius: 5px; border: 1px solid gray; height:40px">
                                                    <option>Month</option>
                                                    <option>January</option>
                                                    <option>Febuary</option>
                                                    <option>March</option>
                                                    <option>April</option>
                                                    <option>May</option>
                                                    <option>June</option>
                                                    <option>July</option>
                                                    <option>August</option>
                                                    <option>September</option>
                                                    <option>October</option>
                                                    <option>November</option>
                                                    <option>December</option>
                                                </select>
                                                <select id="expiryyear" style="border-radius: 5px; border: 1px solid gray; height:40px;width: 100px">
                                                    <option>Year</option>
                                                    <option>2023</option>
                                                    <option>2024</option>
                                                    <option>2025</option>
                                                    <option>2026</option>
                                                    <option>2027</option>
                                                    <option>2028</option>
                                                    <option>2029</option>
                                                    <option>2030</option>
                                                    <option>2031</option>
                                                </select>

                                                <label class="securitycode">Security code</label>
                                                <input style="border-radius: 5px; border: 1px solid gray; height:40px; padding-left:10px" type="number" maxlength="4" placeholder="CVV" class="carddetails" size="4" id="cvvno" />
                                                <button type="button" style="border-radius:50% ;height:29px;width:29px;border:1px solid gray"><a href="https://en.wikipedia.org/wiki/CVV#:~:text=Card%20Verification%20Value%2C%20also%20known,security%20feature%20for%20credit%20cards">?</a></button>
                                                <br><br>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <div class="form-check my-4 paymentrow" id="paymentrow3">
                                            <input class="col-5-lg form-check-input" type="radio" name="payment" id="btn-2" onclick="dropdown2()" value="UPI">
                                            <label class="ps-1 form-check-label">
                                                <strong>UPI</strong>
                                            </label>
                                            <img class="col-2 float-end" src="../img/upi.png" width="100%" height="25px">
                                        </div>
                                        <ul id="upi" style="list-style-type: none; border: 1px solid gray; border-radius: 5px;display:none">
                                            <li class="pt-4">
                                                <label>Enter UPI Id</label><br><br>
                                                <div class="upiblock">
                                                    <input style="border-radius: 5px; border: 1px solid gray; height:40px;padding-left:10px;width:95%" type="varchar" id="upiId" />
                                                </div>
                                                <br>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <div class="form-check my-4 paymentrow" id="paymentrow4">
                                            <input class="col-5-lg form-check-input" type="radio" name="payment" id="btn-3" onclick="dropdown3()" value="Cash On Delivery">
                                            <label class="ps-1 form-check-label">
                                                <strong>Cash On Delivery</strong>
                                            </label>
                                            <img class="col-1 float-end" src="../img/cashon.jpg" width="100%" height="25px">
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <h5>Enter Details :</h5><br>
                                <label for="name">Enter Name : </label>
                                <input style="border-radius: 5px; border: 1px solid gray; height:40px;padding-left:10px;width:100%;margin-top:10px;margin-bottom:10px" type="text" id="fname" placeholder="First name" />
                                <input style="border-radius: 5px; border: 1px solid gray; height:40px;padding-left:10px;width:100%" type="text" id="lname" placeholder="Last name" /> <br> <br>
                                <label for="mobno">Mobile no : </label>
                                <input style="border-radius: 5px; border: 1px solid gray; height:40px;padding-left:10px;width:100% ;margin-top:10px;margin-bottom:10px" type="number" id="mobno" size="10" />
                                <label for="email" id="emaillable">Email : </label>
                                <input style="border-radius: 5px; border: 1px solid gray; height:40px;padding-left:10px;width:100% ;margin-top:10px;margin-bottom:10px" type="email" id="email" /> <br> <br>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="state" id="state">State : </label>
                                        <select id="two" style="border-radius: 5px; border: 1px solid gray; height:40px;padding-left:10px;width:100% ;margin-top:10px">
                                            <option>Select State</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Lakshadweep">Lakshadweep</option>
                                            <option value="Puducherry">Puducherry</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="Pincode" id="pincodelabel">Pin Code : </label><input style="border-radius: 5px; border: 1px solid gray; height:40px;padding-left:10px;width:100% ;margin-top:10px" type="number" id="pincode" /> <br><br>
                                    </div>
                                </div>
                                <label for="address">Address : </label> <br><br>
                                <textarea style="border-radius: 5px; border: 1px solid gray;padding-left:10px;width:100%;margin-bottom:10px" name="address" id="address" cols="76" rows="6"></textarea>

                                <input type="checkbox" id="check" onclick="termsview()"> By clicking this button, you agree to the <span id="terms" style="color: blue">Terms and Conditions</span>.
                                <br>
                                <div class="d-flex">
                                    <button type="submit" class="col-6 me-1 btn btn-success btn-block mt-3">Checkout</button>
                                    <a type="button" href="../thankyou.php" class="col-6 ms-1 btn btn-success btn-block mt-3" onclick="downloadFile()" id="infobuyerkk">Download Recipt</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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