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
$sql = "CREATE TABLE salemaster (
sm_id INT(6) primary key auto_increment, 
status smallint(20),
datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
transfer_no int(20) not null,
transfer_date date not null,
 customername varchar(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table salemaster created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
