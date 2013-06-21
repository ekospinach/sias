<html>
<head>
	<title>Sistem Informasi Akademik Smarihasta</title>
	<link rel="stylesheet" type="text/css" href="adminstyle.css">
</head>
<body>

	<div id="wrapper">
		<div id="header">
			<a href="index.php"><img class="logo" src="images/logotype.png" alt="logo"></a>
		</div>
		<div id="loginbox">
			<div id="titlebox">
				LOGIN
			</div>
		<form method="post" action="ceklogin.php" name="login">
			<table>
			  <tr>
			  	<td align="right">NIS:</td>
			  	<td><input class="inputbox" type="text" name="nis"><br></td>
			  </tr>
			  <tr>
			  	<td>Password: </td>
			  	<td><input class="inputbox" type="password" name="password"></td>
			  </tr>
			  <tr>
			  	<td colspan="2">
					<input class="submit" type="submit" name="submit" value="Login">
				</td>
			  </tr>
			</table>
		</form>
		</div>
	</div>

</body>
</html>