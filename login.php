<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1 align="center">Please enter your login information:</h1>

<form action="mainmenu.php" method="POST">
	<table align="center" border="0" style="border-collapse">
			<tr>
				<td align="right">Email Address:</td>
				<td align="center"><input type="text" name="email" size="8"></td>
			</tr>
			<tr>
				<td align="right">Password:</td>
				<td align="center"><input type="text" name="password" size="8"></td>
			</tr>
			<tr>
				<td align="right"><input type='button' value='Cancel' onclick="window.location.href='index.php'" /></td>
				<td align="left"><input type="submit" value="Submit" name="b1"></td>
			</tr>	
		</table>
</form> 
</body>
</html>