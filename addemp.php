<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
<link rel="stylesheet" href="/css/styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
include ("navbar1.php");
$nn = new navb();
echo $nn->Anavbar();
?>
<br />
<br />
<br />
<br />
<form method="POST" action="Handler.php">
<h1>Please Enter Employee Information</h1>	
	<div class="input-group">
         <label for="username">Username:</label>
         <input type="text" name="username" placeholder="e.g. DanTheMan">
         </div>
	 <div class="input-group">
         <label for="password">Password:</label>
         <input type="text" name="password" placeholder="Password">
         </div>
	 <div class="input-group">
         <label for="fname">First Name:</label>
         <input type="text" name="fname" placeholder="e.g. Dan">
         </div>
	 <div class="input-group">
         <label for="lname">Last Name:</label>
         <input type="text" name="lname" placeholder="TheMan">
         </div>
	 <div class="input-group">
         <label for="email">Email:</label>
         <input type="text" name="email" placeholder="e.g. DanTheMan@gmail.com">
         </div>		 
		 <tr>
			<td align="left"><input type="submit" value="Submit" name="instemp" class="round"></td>
			<td align="right"><input type='reset' value='Reset' name='reset' class="round"></td>
		</tr>	
 </form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>