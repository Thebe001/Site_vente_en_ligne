<?php
session_start();
$i = $_POST['indice'];
$val = $_POST['quantity'];
$_SESSION['quantity'][$i] = $val;
header("Location: cart.php");
exit();