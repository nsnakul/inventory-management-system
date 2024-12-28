<html>
<body style=background-color:powderblue>
<div  style=background-color:#003300;position:absolute;border-style:groove;border-color:red;border-bottom-width:5px;height:150;width:1320>
 <span style=color:#CCCC00;font-size:15;font-family:sans-serif;font-weight:bold;margin-left:950>Home | About-Us | Item | Supplier |qty</span> 

<h1 style=color:goldenrod;text-transform:uppercase;font-weight:bold;font-size:30>INVENTORY <span style=color:#6E2C00 ;text-transform:uppercase;font-weight:bold;font-size:30> MANAGEMENT SYSTEM</span></h1>
<br/><span style=color:#827717;font-size:20>Manage your Item Master,Rate,Product,Supplier</span> 

<div class="form-shape" style=background-color:yellow;position:absolute;border-radius:1%;width:250;height:30;top:5;margin-left:70%;top:30>
<form action="" class"search-box-container">
<input type="search" id="search-box" size="30" style="color:green;border-right-width-color:blue;border-style:outset;border-color:#00ffff;border-right-width:80;height:30px;text-transform:none" placeholder="search here">
<label for="search-box" class="fas fa-search"></label>
</form>	</div>
	</div> 
<br/><br/><br/><br/><br/><br/><br/><br/>
<style>
ul
{
background-color:black;
overflow:hidden;
list-style-type:none;
padding:1px 4px;

}
 
ul li{
float:left;
border:2px solid white;
}
ul a{
display:block;
color:#1DE9B6;
font-weight:bold;
margin:5px 86.1px;
font-family:sans-sarif;
text-decoration:none;
         
}
li a:hover{
 
}

.active{
background-color:#F8BBD0;
}
 
</style>
<body><h3>
<ul style=font-size:25;>
<li><a href="p1.php">HOME</a></li>
<li><a href="list.php">ITEM</a> </li>
<li><a href="slist.php">SUPPLY</a></li>
<li><a href="purchaselist.php">PURCHASE</a></li>
<li><a href="sale.php">SALE</a></li>


</ul>

<div  style=background-color:white;position:absolute;border-style:groove;border-top-width:5px;border-top-color:goldenrod;border-left-width:15px;border-right-width:15px;border-right-color:goldenrod;border-left-color:goldenrod;height:600;width:1300>  
  
<?php
if (isset($_POST["save"]))
{
$name=$_POST['t1'];
$address=$_POST['t2'];
$mobile=$_POST['t3'];

$servername="localhost";
$userid="root";
$password="";
$dbname="IMS";

$conn=new mysqli($servername,$userid,$password,$dbname);

$sql="INSERT INTO supplymaster(name,address,mobile,status)VALUES('$name','$address','$mobile','1')";
if($conn->query($sql)==TRUE)
{
$status="Record inserted successfully";
}
else
{
$status="Record could not be inserted".$sql;
}
echo $status;
header('location:slist.php');
$conn->close();
}
?>

 
<form method="post" action="" enctype="multipart/form-data">
<table style=color:white;background-color:#003300;margin-left:40%;margin-top:5%;height:300;width:250;border-radius:10px;border-style:groove;border-color:goldenrod;border-bottom-width:2px;border-top-width:10px border=0 >
<tr>
<td style=color:goldenrod;font-size:20;font-weight:bold>NAME:</td><td style=font-size:20 size="20"><input type=text name='t1'></td></tr>

<tr>
<td style=color:goldenrod;font-size:20;font-weight:bold>ADDRESS:</td><td><input type=text name='t2'></td></tr>
 
<tr>
<td style=color:goldenrod;font-size:20;font-weight:bold>MOBILE:</td><td><input type=text name='t3'></td></tr>
   

<tr><td style=height:50;width:50><input type="submit" style="color:goldenrod;background-color:cyan;font-size:20;font-weight:bold;height:30;width:100"  name="save" value="save"></td></tr>

</table>
 


</div>
</body>
</html>









