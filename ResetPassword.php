<!doctype html>

<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
    <title>Password Reset</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico">
  </head>
  <div id='container'>
  <body>
    <form>
        <?php include('errors.php');?>
        <h1>Password Reset</h1>
        <div class='input-group'>
          <label>New Password:</label>
          <input class='new-password' placeholder='Enter Password'><br>
        </div>
        <div class='input-group'>
          <label>Confirm new password:</label>
          <input class='confirm-new-password' placeholder='Re-Enter Password'><br>
        </div>
        <div id='sub' class='input-group'>
            <button type='submit' class='btn'>Submit</button>
        </div>
    </form>
  </body>
  </div>
</html>
