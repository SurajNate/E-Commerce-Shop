<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['addtocart'])) {

        if (isset($_SESSION['cart'])) {

            $myitems = array_column($_SESSION['cart'], 'Item_Name');

            if (in_array($_POST['Item_Name'], $myitems)) {
                echo "<script>
                    alert('Item Already Added');
                    window.location.href='cart.php';
                </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('Item_Name' => $_POST['Item_Name'], 'Item_price' => $_POST['Item_price'], 'Quantity' => 1);
                echo "<script>
            alert('Item Added');
            window.location.href='cart.php';
            </script>";
            }
        } else {

            $_SESSION['cart'][0] = array('Item_Name' => $_POST['Item_Name'], 'Item_price' => $_POST['Item_price'], 'Quantity' => 1);
            echo "<script>
            alert('Item Added');
            window.location.href='cart.php';
            </script>";
        }
    }

    if (isset($_POST['Remove_Item'])) {

        foreach ($_SESSION['cart'] as $key => $value) {

            if ($value['Item_Name'] == $_POST['Item_Name']) {

                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
            alert('Item Removed');
            window.location.href='cart.php';
            </script>";
            }
        }
    }
    if (isset($_POST['Remove_AllItem'])) {
        unset($_SESSION["cart"]);
        echo "<script>
                alert('All Items Removed');
                window.location.href='cart.php';
                </script>";
    }

    if (isset($_POST['productsdetails'])) {

       

            $_SESSION['details'][0] = array('Item_Name' => $_POST['Item_Name'], 'Item_ratings' => $_POST['Item_ratings'], 'Item_discount' => $_POST['Item_discount'],'Item_brand' => $_POST['Item_brand'], 'Item_Img' => $_POST['Item_Img'], 'Item_price' => $_POST['Item_price'], 'Item_delprice' => $_POST['Item_delprice'], 'Quantity' => 1);
            echo "<script>
                window.location.href='productdetail.php';
                </script>";
        }
    
}
