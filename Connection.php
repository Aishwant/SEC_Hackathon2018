<?php
Function dbconnect(){
require_once('awscredentials.php');

$dbc = new PDO($dsn, $username, $password);

IF ($dbc == false){
 echo "Could not connect to the database";	
 die();
}

return $dbc;
}

?>