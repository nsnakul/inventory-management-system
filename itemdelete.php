<?php
$id =$_GET['Id'];
echo $id ;

$servername="localhost";
$userid="root";
$password="";
$dbname="IMS";

$conn=new mysqli($servername,$userid,$password,$dbname);
$sql="update item_master set status=0 where id='$id'";

$result =$conn->query($sql);

if ($result){
$status="Record updated successfully";
header('location:list.php');
}
else
{
$status="Record could not be deleted";
}

     
?>


