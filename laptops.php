<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptops</title>
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
            <div class="row">
                <div class="col-2">
                    <h1>Get Brand New Gadgets!</h1>
                    <p>Get Yourself equipped for your next Journey</p>
                    <a href="#red" class="btn">Explore Now &#8594;</a>
                </div>

            </div>

        </div>
    </div>
    <div class="small-container">
        <h2 class="title" id="red">Laptops</h2>
        <div class="row">
            <div class="col-4">
                <form action="Cart.php" method="POST" id="macbook" class="forma">
                    <img src="/Images/macbook.jpg" alt="macbook" width="50" height="150">
                    <h4>Macbook Air</h4>
                    <p>5000 DT</p>
                    <input type="hidden" name="name" value="Macbook Air">
                    <input type="hidden" name="price" value="5000">
                    <input type="number" name="quantity" value="1">
                    <input type="submit" name="add_to_cart" class="btn" value="Add To Cart">
                    <br>
                </form>

            </div>
            <div class="col-4">
                <form action="Cart.php" method="POST" id="inspiron" class="forma">
                    <img src="/Images/notebook-inspiron-15-5515-pdp-gallery-504x350.webp" alt="Inspiron15" width="50"
                        height="150">
                    <h4>DELL Inspiron 15</h4>
                    <p>2500 DT</p>
                    <input type="hidden" name="name" value="DELL Inspiron 15 ">
                    <input type="hidden" name="price" value="2500">
                    <input type="number" name="quantity" value="1">
                    <input type="submit" name="add_to_cart" class="btn" value="Add To Cart">
                </form>

            </div>
            <div class="col-4">
                <form action="Cart.php" method="POST" id="pavillon" class="forma">
                    <img src="/Images/pavillon_15_hp.jpg" alt="pavillon" width="50" height="150">
                    <h4>Hp Pavillon 15 </h4>
                    <p>3000 DT</p>
                    <input type="hidden" name="name" value="Hp Pavillon 15">
                    <input type="hidden" name="price" value="3000">
                    <input type="number" name="quantity" value="1">
                    <input type="submit" name="add_to_cart" class="btn" value="Add To Cart">
                </form>

            </div>
            <div class="col-4">
                <form action="Cart.php" method="POST" id="omen" class="forma">
                    <img src="/Images/pc-portable-hp-omen-15-ce001nk-i5-7e-gen-12go-1to-.jpg" alt="omen" width="50"
                        height="150">
                    <h4>Hp Omen</h4>
                    <p>5000 DT</p>
                    <input type="hidden" name="name" value="HP Omen">
                    <input type="hidden" name="price" value="5000">
                    <input type="number" name="quantity" value="1">
                    <input type="submit" name="add_to_cart" class="btn" value="Add To Cart">
                </form>

            </div>
            <div class="col-4">
                <form action="Cart.php" method="POST" id="x360" class="forma">
                    <img src="/Images/pc-portable-hp-spectre-x360-13-ap0006nk-i7-8e-gen-16-go.jpg" alt="x360" width="50"
                        height="150">
                    <h4>Hp Spectre X360</h4>
                    <p>6000 DT</p>
                    <input type="hidden" name="name" value="Hp Spectre x360">
                    <input type="hidden" name="price" value="6000">
                    <input type="number" name="quantity" value="1">
                    <input type="submit" name="add_to_cart" class="btn" value="Add To Cart">
                </form>

            </div>
            <div class="col-4">
                <form action="Cart.php" method="POST" id="victus" class="forma">
                    <img src="/Images/victus_16.jpg" alt="victus" width="50" height="150">
                    <h4>Hp Victus 16</h4>
                    <p>4000 DT</p>
                    <input type="hidden" name="name" value="Hp Victus 16">
                    <input type="hidden" name="price" value="4000">
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
                    <img src="images/Legion5.jpg" alt="Legion5pro" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Get excited for our new Product !
                    </p>
                    <h1>Lenovo Legion 5 Pro </h1>
                    <p> Available In All our Stores In the Coming Weeks</p>
                    <small>Lenovo Legion 5 Pro, 16"WQXGA 165Hz Display, AMD R7-5800H, 32GB RAM, 1TB SSD, NVIDIA GeForce
                        RTX 3070 8GB GDDR6, Win10, Eng-Arb KB, Grey Color</small>
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