<?php
session_start();

if(isset($_POST['uname'])) 	      $tmpuser = $_POST['uname'];
if(isset($_POST['password']))     $tmpPW = $_POST['password'];

if(!$_SESSION['ValidUser']) {
	
	//gets the credentials for the database
	require_once('cru100.php');

	try 
	{
		$dbc = new PDO("mysql:host=$servername;dbname=$dbname2", $username, $password);
		
		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//compute the hashed version of the password the user entered
		$LoginPassword = md5($tmpPW);
		
		$STH = $dbc->prepare('SELECT Username, Password from Login WHERE Username=:param_user AND Password=:param_password');
		$STH->bindParam(':param_user', $tmpuser);
		$STH->bindParam(':param_password', $LoginPassword);	
		 
		//set the fetch mode
		$STH->setFetchMode(PDO::FETCH_ASSOC);
		$STH->execute();
		
		$recordsFound = 0;

		while($row = $STH->fetch()) {
			//session values set based on database fields
			If($row['Active'] == true){
			$_SESSION['ValidUser'] = true;
			$_SESSION['Access'] = $row['URMLevel'];
			$_SESSION['fname'] = $row['EFname'];
			$_SESSION['lname'] = $row['ELname'];
			$_SESSION['empid'] = $row['EmpID'];
			$recordsFound = $recordsFound + 1;
			}
		}
		
		if($recordsFound == 0 ) {
			echo "<html><script language='JavaScript'>alert('Invalid Login Information!'),history.go(-1)</script></html>";
			header('Location: login.php');
			
		}
	}
	catch(PDOException $e)
		{
		header('Location: login.php');
		die();
	}
}
?>