<?php
$servername = "localhost";
$database = "latihan_18104048";//nama database
$username = "root";

// Create connection
$conn = mysqli_connect($servername, $username, NULL, $database);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


?>