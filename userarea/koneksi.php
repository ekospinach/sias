<?php
	$namahost="localhost";
	$username="root";
	$password="";
	$database="sias";
	mysql_connect($namahost,$username,$password) or die("Failed");
	mysql_select_db($database) or die("Database not exist");
?>