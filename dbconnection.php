<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "project_1";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 "Connected successfully!";
?>