<!DOCTYPE html>
<html>
<head>
	<title>Login Untuk Website saya</title>
	<link rel="stylesheet" type="text/css" href="csshalamnlogin.css">
</head>

<body>

	<p> <center><font size ="13"> LOGIN DULU GAN </font></p></center>
	<form method="POST" action="Methodpost.php">
		<table width="400" align="center" cellpadding="10" cellspacing="10">
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="Email"></td>
			</tr>
			
			<tr>
				<td colspan="10">
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>

</html>