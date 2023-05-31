<?php
session_start();
$_SESSION["username"] = "";
unset($_SESSION["username"]);
$_SESSION["email"] = "";
unset($_SESSION["email"]);
$_SESSION["password"] = "";
unset($_SESSION["password"]);
?>
<?php

header("Location: login.php");
exit();
?>