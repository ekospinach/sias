<?php 
	include "koneksi.php";
	$nis = $_POST['nis'];
	$password = $_POST['password'];
	
	$q = mysql_query("SELECT * FROM user WHERE nis = '$nis'");
	$hasil = mysql_fetch_array($q);
	
	$nis_db = $hasil['nis'];
	$pass_db = $hasil['pass'];

	if ($nis == $nis_db && md5($password) == $pass_db) {
 		setcookie("nis",$nis_db, time()+3600);		
		header("location:biodata.php");
                session_start();
                $_SESSION['iduser'] = $nis_db;
                $_SESSION['cekkrs'] = 0;
	}else{
		header("location:index.html");
	}



 ?>