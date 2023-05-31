<?php session_start();
$_SESSION['items'] = array();
array_filter($_SESSION['items']);
$_SESSION['price'] = array();
array_filter($_SESSION['price']);
$_SESSION['quantity'] = array();
array_filter($_SESSION['quantity']);
$_SESSION['nb'] = 0;
$_SESSION['items'][0] = NULL;
$_SESSION['price'][0] = NULL;
$_SESSION['quantity'][0] = NULL;
/*when i go to login cart get empty */ ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            <div class="row">
                <div class="col-2">
                    <h1>Get Brand New Gadgets !</h1>
                    <p>it's about being up to date !</p>
                    <a href="index.php" class="btn">Explore Now &#8594;</a>
                </div>

            </div>

        </div>
    </div>
    <div>
        <h2 class="title">Login</h2>
        <form action="Access.php" method="POST" id="form" class="forma">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Danielo45a1"> <br> <br>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Dani@gmail.fr"> <br> <br>
            <label for="password">password</label>
            <input type="password" id="password" name="password" placeholder="password"> <br> <br>
            <label for="password"> Repeat password</label>
            <input type="password" id="Rpassword" name="Rpassword" placeholder=" Reapeat password"> <br> <br>
            <button type="submit" class="btn" id="submit">Login</button>

        </form>




    </div>
    <script>
    function validatePassword() {
        var p = document.getElementById('password').value,
            errors = [];
        if (p.length < 8) {
            errors.push("Your password must be at least 8 characters");
        }
        if (p.search(/[a-z]/) < 0) {
            errors.push("Your password must contain at least one lowercase letter.")
        }
        if (p.search(/[A-Z]/) < 0) {
            errors.push("Your password must contain at least one uppercase letter.")
        }
        if (p.search(/[0-9]/) < 0) {
            errors.push("Your password must contain at least one digit.");
        }
        if (errors.length > 0) {
            alert(errors.join("\n"));
            return false;
        }
        return true;
    }
    form.addEventListener("submit", function(evenement) {
        if (document.getElementById("username").value == "") {
            evenement.preventDefault();
            alert("Enter your Username Please !");
            document.getElementById("Username").focus();
        } else if (document.getElementById("email").value == "") {
            evenement.preventDefault();
            alert("Type an E-mail Please !");
            document.getElementById("email").focus();
        } else if (validatePassword() == false) {
            evenement.preventDefault();
            document.getElementById("password").focus();
        } else if (document.getElementById("Rpassword").value != document.getElementById("password").value) {
            evenement.preventDefault();
            alert("Rewrite The Password Correctly !");
            document.getElementById("Rpassword").focus();
        }



    });
    </script>
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