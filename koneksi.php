<?php 
// $koneksi = mysqli_connect("localhost","root","","multi_user");
 
// // Check connection
// if (mysqli_connect_errno()){
// 	echo "Koneksi database gagal : " . mysqli_connect_error();
// }

    $username = "root";
    $password = "";
    $database = "sekolahku";

    $koneksi = new mysqli('localhost', $username, $password, $database);
    $con = mysqli_connect($hostname, $username, $password, $database);

    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    else 
    {
        echo "Successfully Connected! <br>";
    }
?>