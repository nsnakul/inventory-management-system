<?php
$id =$_GET['sm_id'];
echo $id ;

$servername="localhost";
$userid="root";
$password="";
$dbname="IMS";

$conn=new mysqli($servername,$userid,$password,$dbname);
$sql="update supplymaster set status=0 where sm_id='$id'";

$result =$conn->query($sql);

if ($result){
$status="Record updated successfully";
header('location:slist.php');
}
else
{
$status="Record could not be deleted";
}

     
?>


