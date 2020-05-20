<?php

$servername = "localhost";
$username = "login_rework_20200520";
$password = "login_rework_20200520";
$dbname = "login_rework_20200520";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>