<<<<<<< HEAD


||||||| merged common ancestors
<?php include('server.php')?>
=======
>>>>>>> 8dc77dc304181f1c54bb26dcf4b76ddf6cc74936
<!DOCTYPE html>
<?php include('server.php')?>
<?php
    if(isset($_POST['register'])){
        if(isset($_POST['username']) && !Empty($_POST['username'])&&isset($_POST['email']) && !Empty($_POST['email'])&&isset($_POST['password']) && !Empty($_POST['password'])&&isset($_POST['confirm']) && !Empty($_POST['confirm']))
            echo '';
        else
            echo '<h1>Please complete all the fields</h1>';
    }
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="icon" href="favicon.ico">
        <title>Register</title>
    </head>
    <body>
        <form method="post" action="">
        <h1>Registration Form</h1>
         <div class="input-group">
         <label for="username">Username:</label>
<<<<<<< HEAD
         <input type="text" name="username" placeholder="e.g. Molly">
||||||| merged common ancestors
         <input type="text" name="username" placeholder="e.g. Molly666">
=======
         <input type="text" name="username" placeholder="e.g. Molly13">
>>>>>>> 8dc77dc304181f1c54bb26dcf4b76ddf6cc74936
         </div>
         <div class="input-group">
         <label for="email">Email:</label>
<<<<<<< HEAD
         <input type="text" name="email" placeholder="e.g. Molly@gmail.com">
||||||| merged common ancestors
         <input type="text" name="email" placeholder="e.g. Molly666@gmail.com">
=======
         <input type="text" name="email" placeholder="e.g. Molly13@gmail.com">
>>>>>>> 8dc77dc304181f1c54bb26dcf4b76ddf6cc74936
         </div>
         <div class="input-group">
         <label for="password">Password:</label>
         <input type="text" name="password" placeholder="Password">
         </div>
         <div class="input-group">
         <label for="confirm">Confirm Password:</label>
         <input type="text" name="confirm" placeholder="Confirm password">
         </div>
         <div id='sub' class="input-group">
         <button type="submit" name="register" class="btn">Register</button>
         </div>
         <p>Already a Member? 
             <a href ="login.php"> Sign In </a>
         </p>
         <p>Forgot Password?
             <a href="forgotPassword.php">Reset Password<a>
         </p>
        </form>
    </body>
</html>