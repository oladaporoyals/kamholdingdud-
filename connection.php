<?php
$servername = "localhost";
$username = "kamholding_kamholding";
$password = "2468#papa";
$dbname = "kamholding_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname );

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>