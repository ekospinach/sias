<?php
	$nis = $_COOKIE["nis"];
	
	if ($nis == "") {
		header("location:index.html");		
	}else {	
		include "koneksi.php";
		
		$q = mysql_query("SELECT * FROM setting");
		$b=mysql_fetch_array($q);
		$setting=$b['value'];
	
		if($setting == "no") {
			header("location:akademik.php");
		}
		
		$e=$_GET['e'];
		$id_paket=$_GET['id_paket'];
		
		$q=mysql_query("SELECT semester
		FROM paket
		WHERE id_paket = $id_paket	
		");
		$data=mysql_fetch_array($q);
		$semester=$data['semester'];

		if($e==1) {
			mysql_query("INSERT INTO khs VALUES ('','$nis','$id_paket',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$semester','','','','')");
		}else if($e==2) {
			mysql_query("DELETE FROM khs WHERE nis = $nis AND id_paket = $id_paket");
			header("location:krs.php");
		}
	header("Location:krs.php");
	}
?>

