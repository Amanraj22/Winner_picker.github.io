<?php
$servername="localhost";
$username="root";
$password="";
$database="newdb";

$conn=mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("We failed to connect".mysqli_connect_error());
}
else{
    // echo "Connection successful<br>";
}
?>