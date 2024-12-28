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
$sql = "CREATE TABLE purchasemaster (
pm_id INT(6) primary key auto_increment, 
status smallint(20),
datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
recv_no int(20) not null,
recv_date date not null,
sm_id int(20) not null

 
)";

if ($conn->query($sql) === TRUE) {
  echo "Table purchasemaster created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
