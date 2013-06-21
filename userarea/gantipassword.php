<?php
        
        $nis = $_COOKIE["nis"];
	session_start();
        include "koneksi.php";
	if ($_SESSION['iduser'] == ''){
		header("location:index.html");		
	}
	else {
        $nis = $_POST['nis'];
        $password = $_POST['password'];
        $password_2 = $_POST['password_2'];
        $pass = mysql_query("SELECT pass FROM user WHERE nis = '$nis'");
            while ($fpass = mysql_fetch_array($pass)){
                    if($fpass['pass'] == md5($password)){
                        $password = md5($password_2);
                        echo $password;
                        $g = mysql_query("UPDATE user SET pass = '$password' WHERE nis = '$nis'");
                        echo mysql_error();
                        if($g){
                            header('location:biodata.php');
                            
                        }
                    }
                }
        }
        
?>
