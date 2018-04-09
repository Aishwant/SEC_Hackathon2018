<!DOCTYPE html>
<html>
<head>
        <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
        <link rel="stylesheet" href="css/styles2.css">
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
           <input type="text" name="username" placeholder="e.g. DanTheMan">
         </div>
         <div class="input-group">
           <label for="password">Password:</label>
           <input type="password" name="password" placeholder="Password">
         </div>
         <p>Not a Member? 
             <a href ="register.php"> Register Here</a>
         </p>
         <p>Forgot password? 
             <a href ="forgotPassword.php"> Reset password here.</a>
         </p>
		 <table width="100%" align="center">
		 <tr>
		 <td align="center">
			<button type="submit" name="Submit" class="btn">Submit</button>
			<button type="submit" name="Cancel" class="btn" onclick="window.location.href='index.php'" />Cancel</button>
		 </td>
</form>
</body>
</html>