<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "rihlatee";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>