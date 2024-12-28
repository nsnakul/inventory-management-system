<html>
<body style=background-color:powderblue> 

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/getData.js"></script>

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
margin:5px 87.5px;
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

<div  style=background-color:rmv;position:absolute;margin-left:2.5%;border-style:groove;border-top-width:5px;border-top-color:goldenrod;border-left-width:15px;border-right-width:15px;border-right-color:goldenrod;border-left-color:goldenrod;height:1200;width:1200>  
 
  
<?php
include"dbconnect.php";
if(isset($_POST['s']))
 
{ 
	$sm=trim($_POST['sm']);
	
	$recv_no=trim($_POST['recv_no']);
	$recv_date=trim($_POST['recv_date']);  
	$im=trim($_POST['im']);
	$q2="insert into purchasemaster(status,recv_no,recv_date,sm_id,item_id)
	values('1','".$recv_no."','".$recv_date."','".$sm."','".$im."' ) ";

 mysqli_query($conn,$q2);
echo ' <meta http-equiv="refresh" content="0">';

 
}
?>

<form method="post" action="" enctype="multipart/form-data">
 
 <div class="form-row" style=position:absolute;margin-left:7%;margin-top:2%>
   <div class="form-group mb-50" style=height:30;width:500>
   <label for="input Address" style=font-size:20>RECIVING NO.</label>
   <input type="number" class="form-control" name="recv_no" id="recv_no" placeholder="Reciving No.">
  
  </div>
  </div>
   
<div class="form-row" style=position:absolute;margin-left:50%;margin-top:2%>
   <div class="form-group col-md-50" style=height:30;width:500>
   <label for="input Address" style=font-size:20>RECIVING DATE</label>
   <input type="date" class="form-control" name="recv_date" id="recv_date" placeholder="Reciving Date">
  
  </div>
  </div>
   
 <div class="form-row" style=position:absolute;margin-left:7%;margin-top:10%>
 <div class="form-group col-md-50"style=height:30;width:500>
 <label for="inputstate" style=font-size:20>SUPPLIER</label><br/>     
<?php

 
$sq1=mysqli_query($conn,"select * from supplymaster");

echo '<select name="sm" style=color:red;height:40;width:490 >';
while ($r=mysqli_fetch_array($sq1))
{

echo '<option value='.$r['sm_id'].'>'.$r['name'].'</option>';

}
echo '</select>';

?>
</div>
</div>

<div class="form-row" style=position:absolute;margin-left:50%;margin-top:10%>
<div class="form-group col-md-50"style=height:30;width:500>
<label for="inputstate" style=font-size:20>PRODUCT</label>
     
<?php

 
$sq1=mysqli_query($conn,"select * from item_master");

echo '<select name="im" style=color:red;height:40;width:500 >';
while ($r=mysqli_fetch_array($sq1))
{

echo '<option value='.$r['Id'].'>'.$r['Item_name'].'</option>';

}
 

?>
</select>

</div>
</div>
 
<div style=background-color:black;position:absolute;margin-top:20%;height:5;width:1170>
</div>
<br/>
<br/><br/>

 <div style=background-color:black;position:absolute;margin-top:30%;height:5;width:1170>
</div>

 


<?php 
include"dbconnect.php";
if(isset($_POST['s']))
{
 
	$id=trim($_POST['id']);
    
	$rate=trim($_POST['rate']);
	$quantity=trim($_POST['quantity']);
	$nm=trim($_POST['nm']);
	$q2="insert into temp(status,id,rate,quantity,s_name)
	values('1','".$id."','".$rate."','".$quantity."','".$nm."' ) ";
mysqli_query($conn,$q2);
echo ' <meta http-equiv="refresh" content="0">';
}
?> 
 

<div class="form-row" style=position:absolute;margin-left:2%;margin-top:20%>
<div class="form-group col-md-12"style=height:30;width:250>
<label for="input Address" style=font-size:20;color:goldenrod>ITEM NAME</label>
<?php 
$sq1=mysqli_query($conn,"select * from item_master");

echo '<select name="id">';
while ($r=mysqli_fetch_assoc($sq1))
{

echo '<option value='.$r['Id'].'>'.$r['Item_name'].'</option>';

}
 
?>

   
 </select>
  </div>
  </div> 

 
<div class="form-row" style=position:absolute;margin-left:25%;margin-top:20%>
<div class="form-group col-md-12"style=height:30;width:250>
<label for="input Address" placeholder="rate" style=font-size:20;color:goldenrod>ITEM RATE</label>
  
  <?php 
$sq1=mysqli_query($conn,"select * from item_master");

  
echo '<select name="rate" style=width:250>';
while ($r=mysqli_fetch_assoc($sq1))
{
	echo '<option value='.$r['Rate'].'>'.$r['Rate'].'</option>';
}  
  ?>
  </select>
  </div>
  </div>
  
   
<div class="form-row" style=position:absolute;margin-left:50%;margin-top:20%>
<div class="form-group col-md-12"style=height:30;width:250>
<label for="input Address" placeholder="rate" style=font-size:20;color:goldenrod>ITEM RATE</label>
  
  <?php 
$sq1=mysqli_query($conn,"select * from supplymaster");

  
echo '<select name="nm" style=width:250>';
while ($r=mysqli_fetch_assoc($sq1))
{
	echo '<option value='.$r['name'].'>'.$r['name'].'</option>';
}  
  ?>
  </select>
  </div>
  </div>
  
  
  <div class="form-row" style=position:absolute;margin-left:75%;margin-top:20%>
   <div class="form-group col-md-13" style=height:30;width:250>
   <label for="input Address" style=font-size:20;color:goldenrod>QUANTITY</label>
   <input type="number" class="form-control"  name="quantity" id="quantity" value="5" placeholder="quantity">
  
  </div>
  </div>
 
  






<div style=background-color:#4db6ac;position:absolute;margin-left:40%;margin-top:35%;height:35;width:100>
<button type="submit" class=" btn btn-primary btn-block"  name="s"  style=background-color:#f48fbi;font-weight:bold;width:200px>ADD</button>
</div>
</form>


 <?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="IMS";

$conn = mysqli_connect($servername, $username, $password,$dbname);

  $sql= ' select *from temp where status=1';


$res=$conn->query($sql);
 if($res->num_rows>0) 

{
echo"<table style=background-color:#ff4081;font-size:20;border-style:groove;margin-top:40%;margin-left:15% border='1' width=800 height=100>";
echo'<tr style=color:red;background-color:#ffab40>
<th  style=text-align:center;text-trnsform:uppercase>ITEM ID</th>
<th  style=text-align:center;text-trnsform:uppercase>RATE</th>
<th style=text-align:center;text-trnsform:uppercase>QUANTITY</th>
<th style=text-align:center;text-trnsform:uppercase>SUPPLIER NAME</th>
 </tr>';
while($r=$res->fetch_assoc())
{
$Id=$r['id'];
$Rate=$r['Rate'];
$qty=$r['quantity'];
$nm=$r['s_name'];

echo'<tr>
      <td style=text-align:center;text-trnsform:uppercase>'.$Id.'</td>
	  <td style=text-align:center;text-trnsform:uppercase>'.$Rate.'</td>
	  <td style=text-align:center;text-trnsform:uppercase>'.$qty.'</td>
	  <td style=text-align:center;text-trnsform:uppercase>'.$nm.'</td>
	  </tr>';
 }
echo'<table>';
}
else
{
echo"record not found in the table";
}
$conn->close();
?>
</div> 
 


</div>
</body>
</html>