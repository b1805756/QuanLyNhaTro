<?php
$servername = "localhost";
$database = "qlnhatro";
$username = "root";
$password = "";
// Create connection
//Dong nay them vo choi
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>