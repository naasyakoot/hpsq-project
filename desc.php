<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "myDB";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

echo $conn -> query('delete database myDB');
