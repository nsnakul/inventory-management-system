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
$sql = "CREATE TABLE temp-sale-detail (
t_id INT(6) primary key auto_increment, 
status smallint(20),
datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
item_id int(20) not null,
foreign key (item_id) references  item_master(Id),
rate int(20) not null,
quantity int(20) not null  
)";

if ($conn->query($sql) === TRUE) {
  echo "Table temp-sale-detail created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
