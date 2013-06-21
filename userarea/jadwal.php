<?php 
	
	$nis = $_COOKIE["nis"];
	
	session_start();
if ($_SESSION['iduser'] == '') {
    header("location:index.html");
} else {
    header("include:krs.php");
}

	include "koneksi.php";
	
	$qu = mysql_query("SELECT MAX(khs.semester) as max
	FROM khs, mapel, paket
	WHERE khs.nis =$nis
	AND khs.id_paket = paket.id_paket
	AND paket.id_mapel = mapel.id_mapel");
	$b=mysql_fetch_array($qu);
	$max=$b['max'];
	
	$q = mysql_query("SELECT ruang.hari, ruang.jam_mulai, ruang.jam_selesai, mapel.nama_mapel, guru.nama_guru, ruang.nama_ruang
	FROM guru, khs, mapel, paket, ruang
	WHERE khs.nis = $nis
	AND khs.id_paket = paket.id_paket
	AND khs.semester=$max
	AND paket.id_mapel = mapel.id_mapel
	AND paket.id_ruang = ruang.id_ruang
	AND paket.id_guru = guru.id_guru");
			
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
				<a href="akademik.php"><li class="navleft-cur">Akademik</li></a>
                <a href="password.php"><li class="navleft">Password</li></a>
                <a href="logout.php"><li class="navleft">Logout</li></a>
				<br>
			</ul>
		</div>
		<div id="main">
			<div id="titlebox">
				Jadwal
			</div>
			<div>
				<table id="jadwal" class="jadwal" border="1">
					<tr style="font-style:italic">
						<td>Hari</td>
						<td>Jam Mulai</td>
						<td>Jam Selesai</td>
                        <td>Mata Pelajaran</td>
                        <td>Guru</td>
                        <td>Ruang</td>
					</tr>
					
                              
					<?php        
					while($hasil=mysql_fetch_array($q)) {
					?>
	
    				<tr>
						<td><?php echo "$hasil[hari]" ?></td>
						<td><?php echo "$hasil[jam_mulai]" ?></td>
						<td><?php echo "$hasil[jam_selesai]" ?></td>
						<td><?php echo "$hasil[nama_mapel]" ?></td>
						<td><?php echo "$hasil[nama_guru]" ?></td>
                        <td><?php echo "$hasil[nama_ruang]" ?></td>
    				</tr>
    
    				<?php
					}
					?>
                    
				</table>
			</div>
		</div>
	</div>

</body>
</html>