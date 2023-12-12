<!DOCTYPE html>
<html>
<head>
	<title>Sekolahku - Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['username']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">Sekolahku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="users.php">Users</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="courses.php">Course</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="user_course.php">User Course</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
	<div class="container">
        <h1>Halo <b><?php echo $_SESSION['username']; ?></b></h1>
        <p> Anda telah login sebagai <b><?php echo $_SESSION['username']; ?></b>.</p>
        <a href="logout.php">LOGOUT</a>
        <br/>
        <br/>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>