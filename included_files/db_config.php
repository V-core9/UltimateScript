<?php

$servername = "localhost";
$username = "ulti_20200525";
$password = "LUSfsQBxnnHJ9DnD";
$dbname = "ulti_20200525";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>