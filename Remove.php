<?php
session_start();

$i = $_POST['indice'];
for ($j = $i; $j < count($_SESSION['items']) - 1; $j++) {
    $_SESSION['items'][$j] = $_SESSION['items'][$j + 1];
    $_SESSION['price'][$j] = $_SESSION['price'][$j + 1];
    $_SESSION['quantity'][$j] = $_SESSION['quantity'][$j + 1];
}
$_SESSION['items'][count($_SESSION['items']) - 1] = '';
$_SESSION['price'][count($_SESSION['items']) - 1] = 0;
$_SESSION['quantity'][count($_SESSION['items']) - 1] = 0;


header("Location: cart.php");
exit();