
<?php
session_start();
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email = $_SESSION['email'];

$browser = $_SERVER['HTTP_USER_AGENT'];

// if(login.php){
    $content = 'Dear'.$fname." ".$lname.',
Your email was logged into from '.$browser.'. Please contact us at rebelbanking@gmail.com if this was a security breach, and will incorporate ways to circumvent future occurences into 
our security procedures. At Rebel Banking, we take security seriously.
Sincerely,
Rebel Banking, Inc.
1234 University Ave.
Oxford, MS
38555';
// }

$content = wordwrap($content,100);

$headers  = "From: Sender Name <mail2@example.com>" . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

mail($email,"NOTICE: SUCCESSFUL LOGIN REPORTED",$content);

?>