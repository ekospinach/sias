<?php
	
	$nis = $_COOKIE["nis"];
	
	if ($nis == "") {
		header("location:index.html");		
	}
	else {
		header("include:edit_user.php");
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
				<a href="biodata.php"><li class="navleft-cur">Biodata</li></a>
				<a href="akademik.php"><li class="navleft">Akademik</li></a>
                <a href="password.php"><li class="navleft">Password</li></a>
                <a href="logout.php"><li class="navleft">Logout</li></a>
			</ul>
		</div>
		<div id="main">
			<div id="titlebox">
				Edit Biodata
			</div>
    		<form method="post" action="seleksi_user.php">
	  		<table border = "0">   
            	<tr>
            		<td width="150">Nama</td>
                    <td>:</td>
                	<td width="200"><input name="nama" type="text" value="<?php echo $data['nama'] ?>"></td>
            	</tr>
                <tr>
            		<td width="150">Tempat Lahir</td>
                    <td>:</td>
                	<td width="200"><input name="tempat_lahir" type="text" value="<?php echo $data['tempat'] ?>"></td>
            	</tr>
                <tr>
            		<td width="150">Tanggal Lahir</td>
                    <td>:</td>
                	<td width="200"><input name="tanggal_lahir" type="text" value="<?php echo $data['tanggal'] ?>"></td>
            	</tr>
                <tr>
            		<td width="150">Alamat</td>
                    <td>:</td>
                	<td width="200"><input name="alamat" type="text" value="<?php echo $data['alamat'] ?>"></td>
            	</tr>
                <tr>
            		<td width="150">Golongan Darah</td>
                    <td>:</td>
                	<td width="200"><input name="golongan_darah" type="text" value="<?php echo $data['goldar'] ?>"></td>
            	</tr>
                <tr>
            		<td width="150">Agama</td>
                    <td>:</td>
                	<td width="200"><input name="agama" type="text" value="<?php echo $data['agama'] ?>"></td>
            	</tr>
            	<tr>
            		<td width="150">No. HP</td>
                    <td>:</td>
                	<td width="200"><input name="hp" type="text" value="<?php echo $data['no_hp'] ?>"></td>
            	</tr>
                <tr>
            		<td width="150">Nama Ayah</td>
                    <td>:</td>
                	<td width="200"><input name="ayah" type="text" value="<?php echo $data['nama_ayah'] ?>"></td>
            	</tr>
                <tr>
            		<td width="150">Alamat Ayah</td>
                    <td>:</td>
                	<td width="200"><input name="alamat_ayah" type="text" value="<?php echo $data['alamat_ortu'] ?>"></td>
            	</tr>
                <tr>
            		<td width="150">No. HP Ayah</td>
                    <td>:</td>
                	<td width="200"><input name="hp_ayah" type="text" value="<?php echo $data['hp_ayah'] ?>"></td>
            	</tr>
                <tr>
            		<td width="150">Nama Ibu</td>
                    <td>:</td>
                	<td width="200"><input name="ibu" type="text" value="<?php echo $data['nama_ibu'] ?>"></td>
            	</tr>
                <tr>
            		<td width="150">Alamat Ibu</td>
                    <td>:</td>
                	<td width="200"><input name="alamat_ibu" type="text" value="<?php echo $data['alamat_ortu'] ?>"></td>
            	</tr>
                <tr>
            		<td width="150">No. HP Ibu</td>
                    <td>:</td>
                	<td width="200"><input name="hp_ibu" type="text" value="<?php echo $data['hp_ibu'] ?>"></td>
            	</tr>

            	<tr>
            		<td><input type="submit" class="button" value="submit" /></td>
            	</tr>
    		</table>
     		</form>
         </div>
	</div>
</body>
</html>