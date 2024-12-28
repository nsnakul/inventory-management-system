<html>
<body style=background-color:powderblue> 

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
color:goldenrod;
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

<div  style=background-color:black;position:absolute;margin-left:2.5%;border-style:groove;border-top-width:5px;border-top-color:goldenrod;border-left-width:15px;border-right-width:15px;border-right-color:goldenrod;border-left-color:goldenrod;height:600;width:1200>  
  
<?php
if (isset($_POST['view']))
	
{
$servername="localhost";
$userid="root";
$password="";
$dbname="IMS";
$conn=new mysqli($servername,$userid,$password,$dbname);
$id=$_POST['t1'];
$name=$_POST['t2'];

$sql="SELECT * FROM supplymaster  WHERE sm_id='$id'";

$res=$conn->query($sql);
if($res->num_rows>0)
{
echo"<table style=background-color:#ff4081;font-size:20;border-style:groove;margin-left:20% border='1' width='50%' height=6%>";
echo'<tr style=color:red;background-color:#ffab40><th  style=text-align:center;text-trnsform:uppercase>SERIAL NO.</th><th style=text-align:center;text-trnsform:uppercase>NAME</th><th  style=text-align:center;text-trnsform:uppercase>ADDRESS</th><th  style=text-align:center;text-trnsform:uppercase>MOBILE NO.</th>
</tr>';
while($r=$res->fetch_assoc())
{

$id=$r['sm_id'];
$name=$r['name'];
$adrs=$r['address']; 
$mob=$r['mobile']; 


echo'<tr><td>'. $id. '</td><td>' .$name. '</td><td>' .$adrs. '</td><td>' .$mob. '</td></tr>';
}
echo '</table>';
}
else
{
echo"record not found in the table";
}

$conn->close();
}
?>

 

<form method="post" action="" enctype="multipart/form-data">
<table style=color:white;background-color:#003300;margin-left:40%;margin-top:10%;height:400;width:350;border-radius:10px;border-style:groove;border-color:goldenrod;border-bottom-width:2px;border-top-width:10px border=0 >
<tr>
<td style=color:red;font-size:25> USER ID :</td><td><input type=text name=t1 style=height:28;width:180"></td></tr>
<td style=color:red;font-size:25> NAME:</td><td><input type=text name=t2 style=height:28;width:180"></td></tr>

<tr><td><input type="submit" name="view" value="view" style="color:sky;background-color:pink;height:35;width:100"></td></tr>

</table> </form>
</div>
</body> 
</html>