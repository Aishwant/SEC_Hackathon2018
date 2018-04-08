<?php
    session_start();//connect to the database 
$username="";
$email="";
$type="";
$errors = array();
$db = mysqli_connect('localhost','root','','registration');
//if the registration button is clicked


if (isset($_POST['register'])){
	$username= mysqli_real_escape_string($db,$_POST['username']);
	$email= mysqli_real_escape_string($db,$_POST['email']);
	$password_1= mysqli_real_escape_string($db,$_POST['password']);
	$password_2= mysqli_real_escape_string($db,$_POST['confirm']);
	
	//ensure that forms field are filled properly
    if (isset($_POST['check1']) == 'Student'){
      $type = mysqli_real_escape_string($db,'Student');
    }elseif (isset($_POST['check2'])== 'Faculty') {
	   $type = mysqli_real_escape_string($db,'Faculty');
	}elseif (empty($POST['check1']) and empty($POST['check2'])){
       array_push($errors,"Are you a Student OR Faculty");
    }
    // if (empty())
	if (empty($username)){
		array_push($errors,"Username is required");
	}
	if (empty($email)){
		array_push($errors,"Email is required");
	}
	if (empty($password)){
		array_push($errors,"Password is required");
	}

	if ($password != $confirm){
		array_push($errors,"The two passwords do not match");
	}

	$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
	//if there are no errors, save user to database 
	if (count($errors)==0){
		$password= md5($password);//encrypt password before storing in database (security )
		echo "INSERT INTO users (username,email,password,Type) VALUES ('$username','$email','$password','$type')";
		$query="INSERT INTO users (username,email,password,Type) VALUES ('$username','$email','$password','$type')";
		mysqli_query($db,$query);	
        $_SESSION['username']=$username;
        $_SESSION['succcess']="lOGIN WITH YOUR CREDENTIALS ";
        header('location:login.php'); //redirect to the login page 


	}
}

if (isset($_POST['login'])){
	$username= mysqli_real_escape_string($db,$_POST['username']);
	$password= mysqli_real_escape_string($db,$_POST['password']);

	if (empty($username)){
		array_push($errors,"Username is required");
	}
	if (empty($password)){
		array_push($errors,"Password is required");
	}
    if (count($errors)==0){
		$password = md5($password);
  	    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	    $results = mysqli_query($db, $query);
	  	if (mysqli_num_rows($results) == 1) {
	  	  $_SESSION['username'] = $username;
	  	  $_SESSION['success'] = "Welcome";
	  	  header('location: index.php');
	  	}else {
	  		array_push($errors, "Wrong username/password combination");
	  	}
	  }
	}

//logout 
    if (isset($_GET['logout'])){
    	session_destroy();
    	unset($_SESSION['username']);
    	header('location:login.php');
    }


?>