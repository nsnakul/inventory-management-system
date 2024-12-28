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
$sql = "CREATE TABLE saledetail (
sd_id INT(6) primary key auto_increment, 
status  smallint(10),
datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 
rate decimal(18,2) not null,
quantity int(20)not null,
pm1_id int(20) not null,
foreign key (pm1_id) references  purchasemaster(pm_id)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table saledetail created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
