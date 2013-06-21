<?php 
	$nis = $_COOKIE["nis"];
	
	session_start();
if ($_SESSION['iduser'] == '') {
    header("location:index.html");
} else {
    header("include:krs.php");
}
	
	include "koneksi.php";
	$q = mysql_query("SELECT * FROM setting");
	$b=mysql_fetch_array($q);
	$setting=$b['value'];
	
	if($setting == "no") {
		header("location:akademik.php");
	}
	
	$qu = mysql_query("SELECT MAX(khs.semester) as max
	FROM khs, mapel, paket
	WHERE khs.nis =$nis
	AND khs.id_paket = paket.id_paket
	AND paket.id_mapel = mapel.id_mapel");
	$b=mysql_fetch_array($qu);
	$max=$b['max'];
	if($max==0){
		$max=1;
	}
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
				Kartu Rencana Siswa
			</div>
			<div>
				<table id="jadwal" class="jadwal" border="1">
					<tr>
						<td>No</td>
                        <td>Paket</td>
						<td>Mata Pelajaran</td>
                        <td>Ruang</td>
                        <td>Hari</td>
						<td>Jam Mulai</td>
                        <td>SKS</td>
					</tr>
                    
                     <?php        	
						$q=mysql_query("SELECT paket.kode_paket, mapel.nama_mapel, ruang.nama_ruang, ruang.hari, ruang.jam_mulai,
						mapel.sks, paket.id_paket
						FROM khs, mapel, paket, ruang
						WHERE khs.semester=$max
						AND paket.id_mapel = mapel.id_mapel
						AND paket.id_ruang = ruang.id_ruang
						GROUP BY paket.id_paket
						");
						$i=0;
						while($hasil=mysql_fetch_array($q)) {
					 ?>      
					 	  <tr>
                          	<td><?php echo $i+1 ?></td>
							<td><?php $kode=$hasil['kode_paket']; echo $kode ?></td>
							<td><?php echo $hasil['nama_mapel'] ?></td>
                            <td><?php echo $hasil['nama_ruang'] ?></td>
                            <td><?php $hari=$hasil['hari']; echo $hari ?></td>
                            <td><?php $jam=$hasil['jam_mulai']; echo $jam ?></td>
                            <td><?php echo $hasil['sks'] ?></td>
							<td>
                            	<?php 
									$qkod=mysql_query("SELECT paket.kode_paket, paket.id_paket
									FROM khs, mapel, paket, ruang
									WHERE khs.nis = $nis
									AND khs.id_paket = paket.id_paket
									AND khs.semester= $max
									AND paket.kode_paket = '$kode'
									AND paket.id_mapel = mapel.id_mapel
									AND paket.id_ruang = ruang.id_ruang		
									");
									$data=mysql_fetch_array($qkod);
									if($hasil['kode_paket']!=$data['kode_paket']){
										$qhari=mysql_query("SELECT ruang.hari
										FROM khs, mapel, paket, ruang
										WHERE khs.nis = $nis
										AND khs.id_paket = paket.id_paket
										AND khs.semester= $max
										AND ruang.hari = '$hari'
										AND paket.id_mapel = mapel.id_mapel
										AND paket.id_ruang = ruang.id_ruang		
										");
										$data_hari=mysql_fetch_array($qhari);
										if($hari!=$data_hari['hari']){
											$qjam=mysql_query("SELECT ruang.jam_mulai
											FROM khs, mapel, paket, ruang
											WHERE khs.nis = $nis
											AND khs.id_paket = paket.id_paket
											AND khs.semester= $max
											AND ruang.jam_mulai = '$jam'
											AND paket.id_mapel = mapel.id_mapel
											AND paket.id_ruang = ruang.id_ruang		
											");
											$data_jam=mysql_fetch_array($qjam);
											if($jam!=$data_jam['jam_mulai']){
								?>
											 	<a href="krs_db.php?id_paket=<?php echo $hasil['id_paket'] ?>&e=1">Tambah</a>	
                                <?php
											}																		
										}
                      
									}else {
										$id=$hasil['id_paket'];
										$qid=mysql_query("SELECT paket.kode_paket, paket.id_paket
										FROM khs, mapel, paket, ruang
										WHERE khs.nis = $nis
										AND khs.id_paket = paket.id_paket
										AND khs.semester= $max
										AND paket.id_paket = $id
										AND paket.id_mapel = mapel.id_mapel
										AND paket.id_ruang = ruang.id_ruang		
										");
										$fetch=mysql_fetch_array($qid);
										if($hasil['id_paket']==$fetch['id_paket']){
								?>                                                           	
								<a href="krs_db.php?id_paket=<?php echo $hasil['id_paket'] ?>&e=2">Hapus</a>
                                <?php
										}
									}
								?>
                             </td>
						  </tr> 
                          <?php $i=$i+1 ?>    
    				<?php
						}
					?>                   
				</table>
			</div>
		</div>
	</div>

</body>
</html>