<!DOCTYPE html>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" href="favicon.ico">
        <title>Register</title>
    </head>
    <body>
        <form method="post" action="register.php">
        <?php include('s.php');?>
        <h1>Registration Form</h1>
         <div class="input-group">
         <label for="username">Username</label>
         <input type="text" name="username" placeholder="e.g. Molly666">
         </div>
         <div class="input-group">
         <label for="email">Email</label>
         <input type="text" name="email" placeholder="e.g. Molly666@gmail.com">
         </div>
         <div class="input-group">
         <label for="password">Password</label>
         <input type="text" name="password" placeholder="Password">
         </div>
         <div class="input-group">
         <label for="confirm">Confirm Password</label>
         <input type="text" name="confirm" placeholder="Confirm password">
         </div>
         <div class="input-group">
         <button type="submit" name="register" class="btn">Register</button>
         </div>
         <p>Already a Member? 
             <a href ="login.php"> Sign In </a>
         </p>

        </form>
    </body>
</html>