<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolahku - Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        table{
            width: 70%;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, tr, th, td{
            border: 1px solid #d4d4d4;
            border-collapse: collapse;
            padding: 12px;
        }
        th, td{
            text-align: left;
            vertical-align: top;
        }
        tr:nth-child(even){
            background-color: #e7e9eb;
        }
    </style>
<body>
    <div class="container">
        <h1 class="text-center">Halaman User</h1>
    </div>


<?php 
    $username = "root";
    $password = "";
    $database = "sekolahku";

    $mysqli = new mysqli('localhost', $username, $password, $database);
    $con = mysqli_connect($hostname, $username, $password, $database);


    //Output Form Entries from the Database
    $sql = "SELECT id, username, email, password, created_at, updated_at FROM users";
    //fire query
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
        echo '<div class="container">';
        echo '<table> <tr> <th> id </th> <th> username </th> <th> email </th> <th> password </th> <th> created_at </th>  <th> updated_at </th> <th> Action </th></tr>';
       while($row = mysqli_fetch_assoc($result)){
           echo "<td>".$row['id']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['created_at']."</td>";
            echo "<td>".$row['updated_at']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$row['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$row['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
 
       }
       echo '</table>';
       echo '<div/>';
    }
    else
    {
        echo "0 results";
    }
    // closing connection
    mysqli_close($con);
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>