<?php
session_start(); ?>
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
                    <img src="images/logo.jpg" alt="logo" width="150" height="150">
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
            <div class="row">
                <div class="col-2">
                    <h1>Get Brand New Gadgets !</h1>
                    <p>it's about being up to date !</p>
                    <a href="#red" class="btn">Explore Now &#8594;</a>
                </div>

            </div>

        </div>
    </div>
    <div class="small-container">
        <h2 class="title" id="red">Phones</h2>
        <div class="row">
            <div class="col-4">
                <form action="Cart.php" method="POST" id="p40" class="forma">
                    <img src="/Images/huawei-p40-pro-frandroid-2020.png" alt="p40" width="50" height="150">
                    <h4>Huawei P40</h4>
                    <p>3000 DT</p>
                    <input type="hidden" name="name" value="Huawei p40">
                    <input type="hidden" name="price" value="3000">
                    <input type="number" name="quantity" value="1">
                    <input type="submit" name="add_to_cart" class="btn" value="Add To Cart">
                </form>

            </div>
            <div class="col-4">
                <form action="Cart.php" method="POST" id="iphone13" class="forma">
                    <img src="/Images/Iphone13.jpg" alt="iphone 13" width="50" height="150">
                    <h4>Iphone 13</h4>
                    <p>5900 DT</p>
                    <input type="hidden" name="name" value="Iphone 13">
                    <input type="hidden" name="price" value="5900">
                    <input type="number" name="quantity" value="1">
                    <input type="submit" name="add_to_cart" class="btn" value="Add To Cart">
                </form>
            </div>
            <div class="col-4">
                <form action="Cart.php" method="POST" id="iphone11" class="forma">
                    <img src="/Images/iphone-11-pro-2019-frandroid.png" alt="iphone 11 pro" width="50" height="150">
                    <h4>Iphone 11 pro</h4>
                    <p>4700 DT</p>
                    <input type="hidden" name="name" value="Iphone 11 pro">
                    <input type="hidden" name="price" value="4700">
                    <input type="number" name="quantity" value="1">
                    <input type="submit" name="add_to_cart" class="btn" value="Add To Cart">
                    <br>
                </form>

            </div>
            <div class="col-4">
                <form action="Cart.php" method="POST" id="a92" class="forma">
                    <img src="/Images/oppo-a92-prix_tunisie.jpg" alt="a92" width="50" height="150">
                    <h4>Oppo A92</h4>
                    <p>800 DT</p>
                    <input type="hidden" name="name" value="Oppo A92 ">
                    <input type="hidden" name="price" value="800">
                    <input type="number" name="quantity" value="1">
                    <input type="submit" name="add_to_cart" class="btn" value="Add To Cart">
                </form>

            </div>
            <div class="col-4">
                <form action="Cart.php" method="POST" id="Mi11 lite" class="forma">
                    <img src="/Images/telephone-portable-xiaomi-mi-11-lite-noir.jpg" alt="Mi11 lite" width="50"
                        height="150">
                    <h4>Xiaomi Mi 11 Lite </h4>
                    <p>1500 DT</p>
                    <input type="hidden" name="name" value="Xiaomi Mi 11 lite">
                    <input type="hidden" name="price" value="1500">
                    <input type="number" name="quantity" value="1">
                    <input type="submit" name="add_to_cart" class="btn" value="Add To Cart">
                </form>

            </div>
            <div class="col-4">
                <form action="Cart.php" method="POST" id="note10" class="forma">
                    <img src="/Images/xiaomi-redmi-note-10-frandroid-2021.png" alt="note10" width="50" height="150">
                    <h4>Redmi Note 10</h4>
                    <p>1200 DT</p>
                    <input type="hidden" name="name" value="Redmi Note 10">
                    <input type="hidden" name="price" value="1200">
                    <input type="number" name="quantity" value="1">
                    <input type="submit" name="add_to_cart" class="btn" value="Add To Cart">
                </form>


            </div>


        </div>

    </div>
    <!-------offer------>
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/iphone13promax.jpg" alt="Iphone13promax" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Get excited for our new Product
                        !
                    </p>
                    <h1> The Iphone 13 Pro Max</h1>
                    <p> Available In All our Stores In the Coming Weeks</p>
                    <small>Apple's biggest phone in the lineup with a massive, 6.7" screen that for the first time in an
                        iPhone comes with 120Hz ProMotion display that ensures super smooth scrolling</small>
                </div>
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