<?php
$servername = "localhost"; // Change to your database server if needed
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "user_registration"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
