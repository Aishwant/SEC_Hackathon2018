<?php
session_start();

//unset whatever session values were set at login
unset($_SESSION['ValidUser']);
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['Access']);
header('Location: index.php');
die();

?>