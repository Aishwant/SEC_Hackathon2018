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
<<<<<<< HEAD
           <input type="text" name="username" placeholder="e.g. DanTheMan">
||||||| merged common ancestors
           <input type="text" name="username" placeholder="e.g. Molly666">
=======
           <input type="text" name="username" placeholder="e.g. Molly13">
>>>>>>> 8dc77dc304181f1c54bb26dcf4b76ddf6cc74936
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