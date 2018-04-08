<!DOCTYPE html>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="icon" href="favicon.ico">
        <title>Welcome</title>
    </head>

    <body>
        <form id='sub' method="post" action="login.php">
        <?php include('errors.php');?>
        <h1>RebelBanking</h1>
        <img src='UMlogo.jpg' href='#'>
        <p>
            <a href ="login.php"> Sign In </a>
        </p>
        <p>
            <a href ="register.php"> Sign up </a>
        </p>

        </form>
    </body>
</html>