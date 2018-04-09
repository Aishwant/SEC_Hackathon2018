<?php
if(isset($_POST['instemp'])){
	$user = $_POST['username'];
	$pw = $_POST['password'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	
	//compute the hashed version of the password the user entered
	$lpw = hash('sha512', $pw.$user);
	
	echo $user;
	require_once('/home/ubuntu/awscredentials.php');

	try 
	{
		$dbc = new PDO($dsn, $username, $password);
		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$STH = $dbc->prepare('INSERT INTO Employee VALUES (?,?,?,?,?,?,?,?)');
		$STH->bindParam(1, $user);
		$STH->bindParam(2, $lpw);
		$STH->bindParam(3, $fname);
		$STH->bindParam(4, $lname);
		$STH->bindParam(5, false);
		$STH->bindParam(6, true);
		$STH->bindParam(7, false);			
		$STH->bindParam(8, $email);		

		$STH->execute();
		echo $user;
		header('location: addemp.php');
	}
	catch (PDOException $e){
		echo "error".$e->getmessage();
	}
}
?>