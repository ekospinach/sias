<?php 
	$nis = $_COOKIE["nis"];
	
	session_start();
if ($_SESSION['iduser'] == '') {
    header("location:index.html");
} else {
    header("include:krs.php");
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
				Biodata
			</div>
			<table style="text-align:left" border="0">
            	<tr>
                	<td><a href="edit_user.php">Edit Biodata</a></td>
                </tr>
            	<tr>
                	<td rowspan="10" width="150"><img class="avatar" src="<?php echo $data['foto'] ?>"></td>
            		<td width="150">Nomor Induk</td>
                    <td>:</td>
                	<td width="200"><?php echo $data['nis'] ?></td>
            	</tr>
            
				<tr>
					<td width="150">Nama</td>
					<td>:</td>
					<td width="200"><?php echo $data['nama'] ?></td>
				</tr>
				<tr>
					<td width="150">Tempat Lahir</td>
					<td>:</td>
					<td width="200"><?php echo $data['tempat'] ?></td>
				</tr>
                <tr>
					<td width="150">Tanggal Lahir</td>
					<td>:</td>
					<td width="200"><?php echo $data['tanggal'] ?></td>
				</tr>
				<tr>
					<td valign="top" width="150">Alamat</td>
					<td valign="top">:</td>
					<td width="200"><?php echo $data['alamat'] ?></td>
				</tr>
				<tr>
					<td width="150">Golongan Darah</td>
					<td>:</td>
					<td width="200"><?php echo $data['goldar'] ?></td>
				</tr>
				<tr>
					<td width="150">Agama</td>
					<td>:</td>
					<td width="200"><?php echo $data['agama'] ?></td>
				</tr>
				<tr>
					<td width="150">No. HP</td>
					<td>:</td>
					<td width="200"><?php echo $data['no_hp'] ?></td>
				</tr>
				<tr>
					<td width="150">Nama Ayah</td>
					<td>:</td>
					<td width="200"><?php echo $data['nama_ayah'] ?></td>
				</tr>
				<tr>
					<td valign="top" width="150">Alamat Ayah</td>
					<td valign="top">:</td>
					<td width="200"><?php echo $data['alamat_ortu'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td width="150">No. HP Ayah</td>
					<td>:</td>
					<td width="200"><?php echo $data['hp_ayah'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td width="150">Nama Ibu</td>
					<td>:</td>
					<td width="200"><?php echo $data['nama_ibu'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td valign="top" width="150">Alamat Ibu</td>
					<td valign="top">:</td>
					<td width="200"><?php echo $data['alamat_ortu'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td width="150">No. HP Ibu</td>
					<td>:</td>
					<td width="200"><?php echo $data['hp_ibu'] ?></td>
				</tr>
			</table>
		</div>
	</div>

</body>
</html>