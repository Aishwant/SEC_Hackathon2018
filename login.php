<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>

<h1 align="center">Please enter your login information:</h1>

<form action="mainmenu.php" method="POST">
	<table id="logintable" align="center" border="0" style="border-collapse">
			<tr>
				<td class="lt1" align="right">User Name:</td>
				<td class="lt1" align="center"><input type="text" name="uname" size="8"></td>
			</tr>
			<tr>
				<td class="lt1" align="right">Password:</td>
				<td class="lt1" align="center"><input type="text" name="password" size="8"></td>
			</tr>
			<tr>
				<td class="lt1" align="right"><input type='button' value='Cancel' onclick="window.location.href='index.php'" /></td>
				<td class="lt1" align="left"><input type="submit" value="Submit" name="b1"></td>
			</tr>	
		</table>
</form> 
</body>
</html>