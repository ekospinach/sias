<?php 
	setcookie("nis","", time()+3600);
	session_start();
session_destroy();
header('location:index.html');
	
?>