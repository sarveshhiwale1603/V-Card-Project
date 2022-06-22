<?php
$conn=mysqli_connect("localhost","root","","vendore-registration");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>