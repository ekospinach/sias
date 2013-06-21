<?php 
session_start();
if ($_SESSION['iduser'] == '') {
    header("location:index.html");
} else {
    header("include:krs.php");
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
				Akademik
			</div>
			<ul>
				<li class="akademik">
					<a href="jadwal.php"><img class="icon" src="images/icon/jadpel.png"><br>Jadwal Pelajaran</a>
				</li>
                <li class="akademik">
					<a href="krs.php"><img class="icon" src="images/icon/krs.png"><br>Kartu Rencana Studi</a>
				</li>
				<li class="akademik">
					<a href="khs.php"><img class="icon" src="images/icon/khs.png"><br>Kartu Hasil Studi</a>
				</li>			
			</ul>
		</div>
	</div>

</body>
</html>