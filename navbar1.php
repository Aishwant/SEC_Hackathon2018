<?php
Class navb{
	//classes that display the navbar code for admin and employees
	
	Public Function Anavbar(){
		
		//session_start();
		//If(!$_SESSION['ValidUser']){
		//header('Location: index.php');
		echo "<nav class='navbar navbar-expand-sm bg-primary navbar-dark'>
	  <a class='navbar-brand' href='index.php'>
		<img src='logo1.jpg' width='30' height='30' class='d-inline-block align-top' alt=''>
		Ole Miss Cybersecurity Challange
	  </a>
	  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarText' aria-controls='navbarText' aria-expanded='false' aria-label='Toggle navigation'>
		<span class='navbar-toggler-icon'></span>
	  </button>
	  <div class='collapse navbar-collapse' id='navbarText'>
		<ul class='navbar-nav mr-auto'>
		  <li class='nav-item active'>
			<a class='nav-link' href='mainmenu.php'>Secure area<span class='sr-only'>(current)</span></a>
		  </li>

			<li class='nav-item dropdown'>
			<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
			  Manage Employees
			</a>
			<div class='dropdown-menu' aria-labelledby='navbarDropdown'>
			  <a class='dropdown-item' href='#'>Add Employee</a>
			  <a class='dropdown-item' href='#'>View Employees</a>
			  <div class='dropdown-divider'></div>
			</div>
		  </li>
		  
			<li class='nav-item dropdown'>
			<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
			  Manage Clients
			</a>
			<div class='dropdown-menu' aria-labelledby='navbarDropdown'>
			  <a class='dropdown-item' href='#'>Add Client</a>
			  <a class='dropdown-item' href='#'>View Clients</a>
			  <div class='dropdown-divider'></div>
			</div>
		  </li>
		</ul>
		<span class='navbar-text'>";
		//echo $_SESSION['fname'].' '.$_SESSION['lname'];
		echo "<a href='login.php'>Login</a>
		<a href='logout.php'>Logout</a>
		</span>
	  </div>
	</nav>";
	}
	Public Function Enavbar(){
		//session_start();
		//If(!$_SESSION['ValidUser']){
		//header('Location: index.php');
		echo "<nav class='navbar navbar-expand-sm bg-primary navbar-dark'>
	  <a class='navbar-brand' href='index.php'>
		<img src='logo1.jpg' width='30' height='30' class='d-inline-block align-top' alt=''>
		Ole Miss Cybersecurity Challange
	  </a>
	  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarText' aria-controls='navbarText' aria-expanded='false' aria-label='Toggle navigation'>
		<span class='navbar-toggler-icon'></span>
	  </button>
	  <div class='collapse navbar-collapse' id='navbarText'>
		<ul class='navbar-nav mr-auto'>
		  <li class='nav-item active'>
			<a class='nav-link' href='mainmenu.php'>Secure area<span class='sr-only'>(current)</span></a>
		  </li>
		  
			<li class='nav-item dropdown'>
			<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
			  Manage Clients
			</a>
			<div class='dropdown-menu' aria-labelledby='navbarDropdown'>
			  <a class='dropdown-item' href='#'>Add Client</a>
			  <a class='dropdown-item' href='#'>View Clients</a>
			  <div class='dropdown-divider'></div>
			</div>
		  </li>
		</ul>
		<span class='navbar-text'>";
		//echo $_SESSION['fname'].' '.$_SESSION['lname'];
		echo "<a href='login.php'>Login</a>
		<a href='logout.php'>Logout</a>
		</span>
	  </div>
	</nav>";
	}
}
?>