

<html>
<div  style=color:limegreen;position:absolute;border-style:groove;border-color:palegreen;border-width:5px;border-right-width:10px;border-right-width-color:godenrod;border-left-width:10px;border-left-width-color:godenrod;height:1050;width:1330>
<div  style=background-color:#003300;position:absolute;border-style:groove;border-color:red;border-bottom-width:5px;height:150;width:1330>
 <span style=color:#CCCC00;font-size:15;font-family:sans-serif;font-weight:bold;margin-left:950>Home | About-Us | Item | Supplier |qty</span> 

<h1 style=color:goldenrod;text-transform:uppercase;font-weight:bold;font-size:30>INVENTORY <span style=color:#6E2C00 ;text-transform:uppercase;font-weight:bold;font-size:30> MANAGEMENT SYSTEM</span></h1>
<br/><span style=color:#827717;font-size:20>Manage your Item Master,Rate,Product,Supplier</span> 

<div class="form-shape" style=background-color:yellow;position:absolute;border-radius:1%;width:250;height:30;top:5;margin-left:70%;top:30>
<form action="" class"search-box-container">
<input type="search" id="search-box" size="30" style="color:green;border-right-width-color:blue;border-style:outset;border-color:#00ffff;border-right-width:80;height:30px;text-transform:none" placeholder="search here">
<label for="search-box" class="fas fa-search"></label>
</form>
	</div>
	</div>
	<br/>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	
	
<div class="dropdown" style=position:absolute;margin-top:13%>
    <button class=" btn btn-danger dropdown-toggle"  style=color:black;background-color:white;border-style:groove;border-top-width:4px;border-bottom-width:2px;border-color:pink;font-weight:bold;font-size:18;width:175px;height:65px;border-radius:15px type="button" id="menu1" data-toggle="dropdown">SCROOL DOWN
    <span class="caret"></span></button>
	 
    <ul class="dropdown-menu" role="menu" style="background-color:black;border-top-width:20px;border-top-width-color:pink;border-color:pink" aria-labelledby="menu">
      <li role="presentation"><a style="color:#f1948a;font-weight:bold" role="menuitem" tabindex="-1" href="p1.php">HOME</a></li>
      <li role="presentation"><a style="color:#f1948a;font-weight:bold" role="menuitem" tabindex="-1" href="login.php">LOG IN</a></li>
	  <li role="presentation"><a style="color:#f1948a;font-weight:bold" role="menuitem" tabindex="-1" href="list.php">ITEM MASTER</a></li>
	  <li role="presentation"><a style="color:#f1948a;font-weight:bold" role="menuitem" tabindex="-1" href="slist.php">SUPPLY MASTER</a></li>
	  <li role="presentation"><a style="color:#f1948a;font-weight:bold" role="menuitem" tabindex="-1" href="pmlist.php">PURCHASE MASTER</a></li>
	  <li role="presentation"><a style="color:#f1948a;font-weight:bold" role="menuitem" tabindex="-1" href="pdlist.php">PURCHASE DETAIL</a></li>
	  <li role="presentation"><a style="color:#f1948a;font-weight:bold" role="menuitem" tabindex="-1" href="purchaselist.php">PURCHASE TEMP</a></li>
	  <li role="presentation"><a style="color:#f1948a;font-weight:bold" role="menuitem" tabindex="-1" href="salemlist.php">SALE MASTER</a></li>
	  <li role="presentation"><a style="color:#f1948a;font-weight:bold" role="menuitem" tabindex="-1" href="saledlist.php">SALE DETAIL</a></li>
	  <li role="presentation"><a style="color:#f1948a;font-weight:bold" role="menuitem" tabindex="-1" href="saletemp.php">SALE TEMP</a></li>
    </ul>
</div>
<div style=position:absolute;width:140;height:50;margin-top:13%;margin-left:84%;border-radius:20px;text-align:center>

<a class="button"href="additem.php" style=background-color:white;width:140;height:40;border-radius:20px;border-style:groove;border-color:cyan;border-top-width:4px;border-bottom-width:2px>ADD
</a>
</div>

<div  style=background-color:rmv;position:absolute;margin-top:32%;margin-right:2%;border-style:groove;border-top-width:5px;border-top-color:goldenrod;border-left-width:15px;border-right-width:15px;border-right-color:goldenrod;border-left-color:goldenrod;height:600;width:1310>  
 
<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="IMS";

$conn = mysqli_connect($servername, $username, $password,$dbname);

  $sql="select *from Item_master where status=1";

$res=$conn->query($sql);
 if($res->num_rows>0) 

{echo"<table style=background-color:#f1948a;font-size:20;border-style:groove cellspacing:'19' border='5' width=1280 height=100 >";
echo'<tr style=color:red;background-color:#ffab40>
<th  style=text-align:center;text-trnsform:uppercase>SERIAL NO.</th>
<th style=text-align:center;text-trnsform:uppercase>ITEM NAME</th>
<th  style=text-align:center;text-trnsform:uppercase>RATE</th>
<th colspan=3  style=text-align:center;text-trnsform:uppercase;cellspace:5>ACTION</th> </tr>';
while($r=$res->fetch_assoc())
{
$id=$r['Id'];
$in=$r['Item_name'];
$rt=$r['Rate'];
 


echo'<tr>
      <td style=text-align:center;text-trnsform:uppercase>'.$id.'</td>
	  <td style=text-trnsform:uppercase>'.$in.'</td>
	  <td style=text-trnsform:uppercase>'.$rt.'</td>
      <td style=text-align:center><a href="update.php?action=update&Id='.$id.'">Edit</a></td>
      <td style=text-align:center><a href="view1.php">view</a></td>
	  <td style=text-align:center><a href="itemdelete.php?action=delete&Id='.$id.'">Delete</a></td>
	  </tr>';
}
echo'</table>';
}
else
{
echo"record not found in the table";
}
$conn->close();

?>
</div>
</div>
<div style=background-color:#607d8b;position:absolute;width:1280;height:100;top:1000;margin-left:2%;text-align:center>
<style>
.button{
border:none;
padding:10px 15px;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:20px;
font-weight:bold;
margin:2px 20px;
margin-top:2%;

text-align:center;
color:black;
background-color:#4db6ac;
border:1px solid white;
}
 
</style>
<body>
<a class="button"href="login.php">LOG OUT </a>
</body>


</div>



   </html>