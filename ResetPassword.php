<!doctype html>

<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
    <title>Password Rest</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico">
  </head>
  <div id='container'>
  <body>
    <form>
        <?php include('s.php');?>
        <div class='input-group'>
          <label>New Password: </label>
          <input class='new-password' placeholder='Enter Password'><br>
        </div>
        <div class='input-group'>
          <label>Confirm new password</label>
          <input class='confirm-new-password' placeholder='Re-Enter Password'><br>
        </div>
        <div class='input-group'>
          <div id='lower'>
            <input type='submit' class='submit' value='submit'>
          </div>
        <div>
    </form>
  </body>
  </div>
</html>
