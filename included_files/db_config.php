<?php

$servername = "localhost";
$username = "loginsystemdb";
$password = "loginsystemdb";
$dbname = "loginsystemdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>