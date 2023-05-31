<?php session_start();
error_reporting(0);
ini_set('display_errors', 0);
$_SESSION['nb'] = count($_SESSION['items']);
function existe($el, $a)
{
    for ($l = 0; $l < count($a); $l++) {
        if ($el == $a[$l])
            return $l;
    }
    return 0;
}
if (existe($_POST['name'], $_SESSION['items']) != 0) {
    $_SESSION['quantity'][existe($_POST['name'], $_SESSION['items'])] += $_POST['quantity'];;
} else {
    $_SESSION['items'][$_SESSION['nb']] = $_POST['name'];
    $_SESSION['price'][$_SESSION['nb']] = $_POST['price'];
    $_SESSION['quantity'][$_SESSION['nb']] = $_POST['quantity'];
    $_SESSION['nb'] = count($_SESSION['items']);
}
function vide($a)
{
    for ($j = 0; $j < count($a); $j++)
        if ($a[$j] != NUll)
            return false;
    return true;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Anton&family=Fascinate&family=Gentium+Plus:wght@400;700&family=Roboto+Slab:wght@300;400;500;600;700&display=swap');
    </style>
</head>

<body>
    <div class="isa_info">
        <i class="fa fa-info-circle"></i>
        <?php
        if (isset($_SESSION['username'])) {
            echo " Hello, ";
            echo $_SESSION['username'];
        } else echo 'You are Not Logged In'; ?>
    </div>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="/Images/Logo.jpg" alt="Logo" width="144">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li> <a href="login.php">Login</a></li>
                        <li> <a href="index.php">Phones</a></li>
                        <li> <a href="laptops.php">Laptops</a></li>
                        <li> <a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <a href="Cart.php"><img src="/Images/cart.png" alt="cart" width="30" height="30"></a>
                <img src="images/menu.png" alt="menu-icon" width="30" height="30" class="menu-icon"
                    onclick="menutoggle()">
            </div>

        </div>

    </div>


    <!------Cart Items----------->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Products</th>
                <th>Quantity</th>
                <th>Subtotal</th>

            </tr>
            <?php $_SESSION['indice'] = 1;
            $total = 0;
            if (($_SESSION['nb'] == 0) || (vide($_SESSION['items']))) {
                echo 'The cart is empty';
            ?>
            <a href="index.php">Return to main</a>
            <?php } else {
                while ($_SESSION['indice'] < $_SESSION['nb']) {
                    if (is_null($_SESSION['items'][$_SESSION['indice']]) || $_SESSION['items'][$_SESSION['indice']] == '') {
                        $_SESSION['indice']++;
                    } else { ?>
            <tr>
                <td>
                    <div class="cart-info">

                        <div>
                            <p> <?php echo $_SESSION['items'][$_SESSION['indice']] ?></p>
                        </div>
                        <small> <?= $_SESSION['price'][$_SESSION['indice']];
                                            echo
                                            "DT"; ?> </small> <br>
                        <form action="Remove.php" method="post">
                            <input type="hidden" name="indice" value="<?php echo $_SESSION['indice'] ?>">
                            <input type="submit" name="Remove" class="btn" value="Remove">
                            <br>
                        </form>
                    </div>
                </td>
                <td>
                    <form action="update.php" method="post">
                        <input type="hidden" name="indice" value="<?php echo $_SESSION['indice'] ?>">

                        <input type="number" name="quantity"
                            value=<?php echo $_SESSION['quantity'][$_SESSION['indice']]; ?>>
                        <input type="submit" name="update" class="btn" value="Update">
                        <br>

                    </form>
                </td>
                <td> <?= $_SESSION['price'][$_SESSION['indice']] * $_SESSION['quantity'][$_SESSION['indice']]
                                        . 'DT' ?>
                    <?php $total += $_SESSION['price'][$_SESSION['indice']] * $_SESSION['quantity'][$_SESSION['indice']]  ?>
                </td>
            </tr>
            <?php
                    }
                    $_SESSION['indice']++;
                } ?>

        </table>
        <div class=" total-price">
            <table>
                <tr>
                    <td><a href="clearall.php">Clear All</a></td>
                    <td>Total: <?= $total .
                                    'DT';
                                if ($total == 0) {
                                    header("Location: clearall.php");
                                    exit();
                                } ?>
                    </td>

                </tr>
                <tr>
                    <form method="POST" action="checkout.php">
                        <input type="submit" value="Checkout" class="btn">
                        <input type="hidden" name='total' value=<?= $total ?>>
                    </form>
                </tr>
                <?php } ?>


            </table>
        </div>
    </div>
    <!---Brands-->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/apple.png" alt="apple">
                </div>
                <div class="col-5">
                    <img src="images/Oppo-logo.png" alt="oppo">
                </div>
                <div class="col-5">
                    <img src="images/xiaomi.png" alt="xiaomi">
                </div>
                <div class="col-5">
                    <img src="images/dell.png" alt="dell">
                </div>
                <div class="col-5">
                    <img src="images/Huawei-logo.png" alt="Huawei">
                </div>
                <div class="col-5">
                    <img src="images/hp.png" alt="Hp">
                </div>
            </div>

        </div>
    </div>
    <!------Footer---->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone</p>
                    <div class="app-logo">
                        <img src="images/playstore.png" alt="Playstore">
                        <img src="images/Appstore.png" alt="Appstore">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo.jpg" alt="logo">
                    <p>Our Purpose is to Substainably make Technology Accesible to Everyone</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Youtube</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 </p>
        </div>
        <!-----js for toggle menu----->
        <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
        </script>
</body>

</html>
<?php /* see actual order */ ?>