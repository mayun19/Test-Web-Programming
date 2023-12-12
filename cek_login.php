<?php 
session_start();

include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
 
$login = mysqli_query($koneksi,"select * from users where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['username']=="admin"){
 
		$_SESSION['username'] = $username;
		$_SESSION['username'] = "admin";
		header("location:halaman_admin.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['username']==$username){
		$_SESSION['username'] = $username;
		// alihkan ke halaman dashboard pengurus
		header("location:halaman_user.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>