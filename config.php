<?php
//error_reporting(0); 
//including the database connection file

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tempchart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
