<?php
// Database credentials
$servername = "localhost"; // Your MySQL server
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password
$database = "practice"; // The name of your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
