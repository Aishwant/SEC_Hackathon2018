<!DOCTYPE html>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="icon" href="favicon.ico">
        <title>Forgot Password</title>
    </head>
    <body>
        <form method="post" action="login.php">
        <?php include('errors.php');?>
        <h1>Request password reset</h1>
         <div class="input-group">
         <label for="email">Email:</label>
         <input type="text" name="email" placeholder="e.g. Molly666@gmail.com">
         <div id='sub' class="input-group">
         <button type="submit" name="submit" class="btn">submit</button>
         </div>
         <p> 
             <a href ="login.php"> Sign In </a>
         </p>
         <p>
             <a href="register.php">Sign Up<a>
         </p>
  

        </form>
    </body>
</html>