<?php session_start();
error_reporting(0);
ini_set('display_errors', 0);
if (!isset($_SESSION['username'])) { ?>
<script>
alert('You Must Be Logged In To Pay')
window.location.href = 'login.php'
</script>
<?php }  ?>
<?php
session_start(); ?>
<?php
$_SESSION['delevint'] = rand(0, 86400);
if (!isset($_SESSION['username'])) {
    $_SESSION['delevint'] = rand(0, 86400);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phones</title>
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
                    <img src="/Images/Logo.jpg" alt="Logo" width="125">
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
            <div>
                <form action="Cash.php" method="POST" class="forma">
                    <label for="Total">Your Total :</label>
                    <input type="number" readonly name="total" value=<?php echo $_POST['total']  ?>>
                    <?= " DT" ?>
                    <button type="submit">Pay by cash</a></button>
                </form>
                <<form action="https://www.youtube.com/watch?v=dQw4w9WgXcQ" method="POST" class="forma">
                    <input type="hidden" readonly name="total" value=<?php echo $_POST['total'] ?>>
                    <button type="submit"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Pay by card</a></button>
                    </form>
            </div>
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
<?php /* Pay by card page missing */ ?>