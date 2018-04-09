<?php
session_start();

//unset whatever session values were set at login
unset($_SESSION['ValidUser']);
$_SESSION['fname'];
$_SESSION['lname'];
$_SESSION['email'];
header('Location: index.php');
die();

?>