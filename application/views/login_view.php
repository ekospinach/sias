<html>
<head>
	<title>Sistem Informasi Akademik Smarihasta</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url('asset/styleadmin.css')?>">
</head>
<body>

	<div id="wrapper">
		<div id="header">
			<a href="<?=base_url()?>"><img class="logo" src="<?=base_url('asset/images/logotype.png')?>" alt="logo"></a>
		</div>
		<div id="loginbox">
			<div id="titlebox">
				LOGIN
			</div>
		<form method="post" name="login">
			<table>
			  <tr>
			  	<td align="right">Username</td>
			  	<td><input class="inputbox" type="text" name="username"><br></td>
			  </tr>
			  <tr>
			  	<td>Password</td>
			  	<td><input class="inputbox" type="password" name="password"></td>
			  </tr>
                          <tr>
                              <td colspan="2" style="text-align: center;color: red">
                                  <?=isset($pesan)?$pesan:''?>
                              </td>
                          </tr>
			  <tr>
			  	<td colspan="2">
					<input class="submit" type="submit" value="Login">
				</td>
			  </tr>
			</table>
		</form>
		</div>
	</div>

</body>
</html>