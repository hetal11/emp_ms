<?php 
// DB credentials.
 
$databaseHost = 'localhost';
$databaseName = 'emp_ms';
$databaseUsername = 'root';
$databasePassword = '';
// Establish database connection.

	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>