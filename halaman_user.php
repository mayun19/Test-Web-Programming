<!DOCTYPE html>
<html>
<head>
	<title>Sekolahku - Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['username']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman Admin</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['username']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>
</body>
</html>