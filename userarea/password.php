<?php 
	$nis = $_COOKIE["nis"];
	session_start();
	if ($_SESSION['iduser'] == ''){
		header("location:index.html");		
	}
	else {
		header("include:biodata.php");
	}

	include "koneksi.php";
	
	$q = mysql_query("SELECT * FROM user WHERE nis = '$nis'");
	$data = mysql_fetch_array($q);
 ?>

<html>
<head>
	<title>Sistem Informasi Akademik Smarihasta</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#D4F7FF">

	<div id="wrapper">
		<div id="headeruser"> 
			<img class="user" src="images/headeruser.png">
		</div>
		<div id="leftnav">
                        <ul>
				<a href="biodata.php"><li class="navleft">Biodata</li></a>
                                <a href="akademik.php"><li class="navleft">Akademik</li></a>
                                <a href="password.php"><li class="navleft-cur">Password</li></a>
                                <a href="logout.php"><li class="navleft">Logout</li></a>
			</ul>
			
		</div>
		<div id="main">
			<div id="titlebox">
				Ubah Password
			</div>
			<table style="text-align:left" border="0">
            	<tr>
                	<td><a href="edit_user.php">Edit Password</a></td>
                </tr>
                <form action="gantipassword.php" method ="post">
            	<tr>
                	<td rowspan="10" width="150"></td>
            		<td width="150">Nomor Induk</td>
                    <td>:</td>
                	<td width="200"><?php echo $data['nis'] ?></td>
                        <input type="hidden" name="nis" value="<?php echo $data['nis'] ?>">
            	</tr>
            
				<tr>
					<td width="150">Password Lama</td>
					<td>:</td>
                                        <td width="200"><input type="password" name="password" required="required"></td>
				</tr>
				<tr>
					<td width="150">Password Baru</td>
					<td>:</td>
					<td width="200"><input type="password" name="password_2" required="required"></td>
				</tr><tr><td width="150"></td>
					<td></td>
					<td width="200"><input type="submit" value="Ubah Password"></td>
				</tr>
                </form>
			</table>
		</div>
	</div>

</body>
</html>