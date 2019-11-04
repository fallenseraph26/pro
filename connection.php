<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pro";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn==false)
{
    die("Connection failed beacuse ".mysqli_connect_error());

}



?>
