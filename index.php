<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>

<nav class='navbar navbar-expand-sm bg-primary navbar-dark'>
  <a class="navbar-brand" href="index.php">
    <img src="logo1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    Ole Miss Cyber Security Challenge
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="mainmenu.php">Secure area<span class="sr-only">(current)</span></a>
      </li>
    </ul>

    <span class="navbar-text">
	<?php
	session_start();
	IF($_SESSION['ValidUser']){
		echo $_SESSION['fname']." ".$_SESSION['lname']." | ";
		echo "<a href='logout.php'>Logout</a>";
	}
	else{
	echo "<a href='login.php'>Login</a> ";
	echo "<a href='register.php'>Register</a>";
	}
	?>
    </span>
  </div>
</nav>

<br />
<h1 align="center">Welcome to RebelBanking</h1>
<br />
<br />
<h2 align="center">Presentation Slides</h2>
<p align="center"><iframe src="https://docs.google.com/presentation/d/e/2PACX-1vT77M-rD7bfLaSGeKe8zxHbtHdzRYo5XPWmd35jwYFPGw5AwJmiq4E3SP-0MD02jLqEWg3G0JUJFLjR/embed?start=false&loop=false&delayms=15000" frameborder="0" width="640" height="389" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
</p>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>