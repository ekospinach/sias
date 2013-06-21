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
	
	$i=0;
	
	if($i==0){
		$i=$max;
	}else {	
	$i=$_POST["i"];	
	}
	$q = mysql_query("SELECT paket.kode_paket, mapel.nama_mapel, mapel.sks, khs.nilai
	FROM khs, mapel, paket
	WHERE khs.nis = $nis
	AND khs.semester = $i
	AND khs.id_paket = paket.id_paket
	AND paket.id_mapel = mapel.id_mapel");
	
	
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
				Kartu Hasil Siswa
			</div>
			<div>
            	<h2>KHS Semester  <?php echo $i ?></h2></br>
                Lihat KHS Semester :
                <form method="post" action="khs.php" name="i">
                	<select name="i">           
                    <?php
			  			for($i=1;$i<=$max;$i++) {
			 		?>
                           <option value=<?php echo $i ?>> <?php echo $i ?> </option>
              		<?php
						}
			  		?>
                     </select>
              		<input type="submit" value="Lihat">
              	</form> 
                
				<table id="jadwal" class="jadwal" border="1">
					<tr>
						<td>No</td>
                        <td>Kode</td>
						<td>Mata Pelajaran</td>
                        <td>SKS</td>
                        <td>Nilai</td>
					</tr>
					<?php  
					$i=1;      
					while($hasil=mysql_fetch_array($q)) {
					?>
	
    				<tr>
						<td><?php echo "$i"?></td>
						<td><?php echo "$hasil[kode_paket]" ?></td>
						<td><?php echo "$hasil[nama_mapel]" ?></td>
						<td><?php echo "$hasil[sks]" ?></td>
                        <?php 
						if (($hasil['nilai']==NULL)) {
							$nilai="K";
						}else {
							$nilai=$hasil['nilai'];
						}
						?>
						<td><?php echo "$nilai" ?></td>
                        <?php $i++; ?>
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