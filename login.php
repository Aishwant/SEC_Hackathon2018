<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" href="favicon.ico">
        <title>Login</title>
    </head>
<body>
<br />
<br />
<br />
<br />
<form action="mainmenu.php" method="POST">
    <h1 align="center">Login</h1>
	     <div class="input-group">
           <label for="username">Username:</label>
           <input type="text" name="username" placeholder="e.g. Molly666">
         </div>
         <div class="input-group">
           <label for="password">Password:</label>
           <input type="text" name="password" placeholder="Password">
         </div>
         
		 <table width="100%" align="center">
		 <tr>
		 <td align="center">
			<button type="submit" name="Submit" class="btn">Submit</button>
			<button type="submit" name="Cancel" class="btn" onclick="window.location.href='index.php'" />Cancel</button>
		 </td>		
</form> 
</body>
</html>