<!DOCTYPE html>
<html>
<head>
        <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" href="favicon.ico">
        <title>Login</title>
    </head>
<body>

<form action="mainmenu.php" method="POST">
<h1 align="center">Login</h1>
	     <div class="input-group">
           <label for="username">Username</label>
           <input type="text" name="username" placeholder="e.g. Molly666">
         </div>
         <div class="input-group">
           <label for="password">Password</label>
           <input type="text" name="password" placeholder="Password">
         </div>
         <div class="input-group">
			<button type="submit" name="Submit" class="btn">Submit</button>
			<button type="submit" name="Cancel" class="btn" onclick="window.location.href='index.php'" />Cancel</button>
         </div>
				
</form> 
</body>
</html>