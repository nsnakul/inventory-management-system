<html>
<head>
<center><h1 style=color:goldenrod> Registration Form</h1>
</head>
<body style=color:black;background-color:black;font-size:30>
<?php
if (isset($_POST['REGISTER']))
{

$servername="localhost";
$userid="root";
$password="";
$dbname="IMS";
$conn=new mysqli($servername,$userid,$password,$dbname);

$fn=$_POST['t1'];
$ln=$_POST['t2'];
$un=$_POST['t3'];
$eml=$_POST['t4'];
$phn=$_POST['t5'];
$cty=$_POST['t6'];
$pwd=$_POST['t7'];

$sql="INSERT INTO reg (fname,lname,uname,e_mail,phn,city,passwd) VALUES('$fn','$ln','$un','$eml','$phn','$cty','$pwd')";
$conn->query($sql);
$conn->close();
}
?>

<form method="post" action="" enctype="multipart/form-data">
<table style=color:white;background-color:white;margin-left:1%;height:580;width:500;border-radius:10px;border-style:groove;border-color:cyan;border-bottom-width:2px;border-top-width:10px border=0 >

<tr><td style=color:black;font-size:25;font-weight:bold> First name:</td><td><input type=text style="height:25;width:200" name=t1></td></tr>

<tr><td style=color:black;font-size:25;font-weight:bold> Last name:</td><td><input type=text style="height:25;width:200" name=t2></td></tr>

<tr><td style=color:black;font-size:25;font-weight:bold> User name:</td><td><input type=text style="height:25;width:200" name=t3></td></tr>

<tr><td style=color:black;font-size:25;font-weight:bold> E-mail:</td><td><input type=text style="height:25;width:200" name=t4></td></tr>

<tr><td style=color:black;font-size:25;font-weight:bold> Phone No.:</td><td><input type=text style="height:25;width:200" name=t5></td></tr>

<tr><td style=color:black;font-size:25;font-weight:bold> City:</td><td><input type=text style="height:25;width:200" name=t6></td></tr>


<tr><td style=color:black;font-size:25;font-weight:bold> Password:</td><td><input type=text style="height:25;width:200" name=t7></td></tr>
<tr><td style=color:black;font-size:25;font-weight:bold> Confirm Password:</td><td><input type=text style="height:25;width:200" name=t8></td></tr>

<tr><td><input type="submit" style="color:goldenrod;background-color:cyan;font-size:20;font-weight:bold;height:50;width:150" name="REGISTER" value="REGISTER"></td></tr>
</table>
</form>
</body>
</html>