<?php
$servername = "localhost";
$username = "tester";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    exit("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
