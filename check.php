<?php
require_once('awscredentials.php');

$pdo = new PDO($dsn, $username, $password);

if($pdo == false){
    echo 'not connected';
}else
    echo 'connected';

if (isset($_POST['submit'])){
    if(isset($_POST['fname']) && !empty($_POST['fname'])){
        echo $_POST['fname'];
    }else{
        echo "please fill all the fields";
    }
}

?>


<body>
    <form action="" method="POST">
        <input type="text" name="fname" text-holder="First name">
        <input type="submit" name="submit" value="login">
    </form>
</body>