<?php
session_start();

$_SESSION['items'] = array();
array_filter($_SESSION['items']);
$_SESSION['price'] = array();
array_filter($_SESSION['price']);
$_SESSION['quantity'] = array();
array_filter($_SESSION['quantity']);
$_SESSION['nb'] = 0; ?>
<?php
header("Location: cart.php");
exit();
?>