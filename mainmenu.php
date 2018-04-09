<?php
session_start();
if(!$_SESSION['ValidUser']) {

	require_once('/home/ubuntu/awscredentials.php');

	try
	{
		$dbc = new PDO($dsn, $username, $password);
		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//compute the hashed version of the password the user entered
		$LoginPassword = hash('sha512', $_POST['password'].$_POST['username']);

		$STH = $dbc->prepare('SELECT * FROM Employee WHERE Username=:param_email AND Passwords=:param_password');
		$STH->bindParam(':param_email', $_POST['username']);
		$STH->bindParam(':param_password', $LoginPassword);	

		//set the fetch mode
		$STH->setFetchMode(PDO::FETCH_ASSOC);
		$STH->execute();

		$recordsFound = 0;
		//echo "email: " . $tmpEmail . "<br>";
		//echo "raw password: " . $tmpPW . "<br>";
		//echo "md5 password: " . $LoginPassword . "<br>";

		while($row = $STH->fetch()) {

			$_SESSION['ValidUser'] = true;
			$_SESSION['fname'] = $row['First_Name'];
			$_SESSION['lname'] = $row['Last_Name'];
			$_SESSION['email'] = $row['Email'];
			if ($row['FinancilProfessional_1'] == true){
				$_SESSION['Client'] = true;
			}
			elseif ($row['FinancilProfessional_2'] == true){
				$_SESSION['Emp'] = true;
			}
			elseif ($row['FinancilProfessional_3'] == true){
				$_SESSION['Admin'] = true;
			}
			$recordsFound = $recordsFound + 1;
			}


		if($recordsFound == 0 ) {
			echo "No data found".$tmpuser." ".$tmpPW;
			header('Location: login.php');

		}
		if($_SESSION['Admin'] == true){
		header('Location: adminhp.php');
		}
		Else if ($_SESSION['Emp'] == true){
		header('Location: emphp.php');
		}
	}
	catch(PDOException $e)
		{
		echo "exception".$e->getMessage();	
		header('Location: login.php');
		die();
	}
}
Print_r ($_SESSION);
?>

<!DOCTYPE html>
<html>
<body>
<h2 align="center">Welcome to The website!  (<?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?> )</h2>
<?php if($_SESSION['Admin'] == true){
		header('Location: adminhp.php');
		}
		?>
</body>
</html>
