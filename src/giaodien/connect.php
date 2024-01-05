<?php
$servername = "mysql_container";
$username = "root";
$password = "123";
$dbname = "caycanh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3306);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>