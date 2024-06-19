<?php
// Database connection parameters
$host = 'localhost';  // Host name
$username = 'root';   // MySQL username
$password = '';       // MySQL password
$dbname = 'shagun'; // Database name

// Create connection
$conn =  mysqli_connect($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
