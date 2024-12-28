<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// sql to create table AutoIncrement
$sql = "CREATE TABLE supplymaster (
sm_id INT(6) primary key auto_increment, 
name VARCHAR(30) NOT NULL,
address  VARCHAR(30) NOT NULL,
mobile  int(15),
stamp_date_time TIMESTAMP  DEFAULT CURRENT_TIMESTAMP,
status smallint(10)
)"; 
 
if ($conn->query($sql) === TRUE) {
  echo "Table supplymaster created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
