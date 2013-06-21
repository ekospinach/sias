<?php

	$nis = $_COOKIE["nis"];
	
	include "koneksi.php";
	
	
	//$lokasi_file = $_FILES['ava']['tmp_name'];
	//$tipe_file = $_FILES['ava']['type'];
	//$nama_file = $_FILES['ava']['name'];
	//$direktori = "images/$nama_file";
	
	//if(!empty($lokasi_file)) {
		//move_uploaded_file($lokasi_file,$direktori);	
	//}
		
	mysql_query("UPDATE user SET nama = '$_POST[nama]', tempat = '$_POST[tempat_lahir]', tanggal = '$_POST[tanggal_lahir]', alamat = '$_POST[alamat]', goldar = '$_POST[golongan_darah]', agama = '$_POST[agama]', no_hp = '$_POST[hp]', nama_ayah = '$_POST[ayah]', alamat_ortu = '$_POST[alamat_ayah]', hp_ayah = '$_POST[hp_ayah]', nama_ibu = '$_POST[ibu]', alamat_ortu = '$_POST[alamat_ibu]', hp_ibu = '$_POST[hp_ibu]' WHERE nis = $nis");
			
		
	header("Location:biodata.php");
?>
