<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolahku - User Courses</title>
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

<?php 
    $username = "root";
    $password = "";
    $database = "sekolahku";

    $mysqli = new mysqli('localhost', $username, $password, $database);
    $con = mysqli_connect($hostname, $username, $password, $database);

    // if(!$con)
    // {
    //     die("Connection failed!" . mysqli_connect_error());
    // }
    // else 
    // {
    //     echo "Successfully Connected! <br>";
    // }

    //Output Form Entries from the Database
    $sql = "SELECT id_user, id_course FROM userCourse";
    //fire query
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
        echo '<table> <tr> <th> id user </th> <th> id course </th></tr>';
       while($row = mysqli_fetch_assoc($result)){
         // to output mysql data in HTML table format
           echo '<td>' . $row["id_user"] . '</td>
           <td>' . $row["id_course"] . '</td></tr>';
       }
       echo '</table>';
    }
    else
    {
        echo "0 results";
    }
    // closing connection
    mysqli_close($con);
?>
</body>
</html>