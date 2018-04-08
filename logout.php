<?php
session_start();

//unset whatever session values were set at login
unset($_SESSION['ValidUser']);
header('Location: index.php');
die();

?>