<!-- PHP Create DB and Table -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "loginCheck";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql1 = "CREATE DATABASE ".$dbName;
if ($conn->query($sql1) === FALSE) {
  echo "Error creating database: " . $conn->error;
}

// Create table
$con = new mysqli($servername, $username, $password, $dbName);
$sql2 = "CREATE TABLE users 
 ( 
 username varchar(100) not null, 
 email varchar(100) not null, 
 pass varchar(100) not null, 
 primary key (email)
 )"; 
if ($con->query($sql2)===FALSE) 
{ 
    die('<br />Error creating table: ' . mysqli_connect_error()); 
} 

$conn->close();
$con->close();
?>