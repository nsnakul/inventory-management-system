<html>
<html>
<body style=background-color:powderblue> 

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="IMS";

$conn = mysqli_connect($servername, $username, $password,$dbname);

  $sql= ' select *from purchasemaster where status=1';


$res=$conn->query($sql);
 if($res->num_rows>0) 

{
echo"<table style=background-color:#ff4081;font-size:20;border-style:groove;margin-top:5%;margin-left:15% border='1' width=800 height=100>";
echo'<tr style=color:red;background-color:#ffab40>
<th  style=text-align:center;text-trnsform:uppercase>PM ID</th>
<th  style=text-align:center;text-trnsform:uppercase>STATUS</th>
<th style=text-align:center;text-trnsform:uppercase>RECIVING NO.</th> 
<th style=text-align:center;text-trnsform:uppercase>RECIVING DATE</th>
<th style=text-align:center;text-trnsform:uppercase>SM ID</th>  
<th style=text-align:center;text-trnsform:uppercase>ITEM ID</th>  
</tr>';
while($r=$res->fetch_assoc())
{
$id=$r['pm_id'];
$sts=$r['status'];
$rn=$r['recv_no'];
$rd=$r['recv_date'];
$sm_id=$r['sm_id'];
$im=$r['item_id'];

echo'<tr>
      <td style=text-align:center;text-trnsform:uppercase>'.$id.'</td>
	  <td style=text-align:center;text-trnsform:uppercase>'.$sts.'</td>
	  <td style=text-align:center;text-trnsform:uppercase>'.$rn.'</td>
	  <td style=text-align:center;text-trnsform:uppercase>'.$rd.'</td>
	  <td style=text-align:center;text-trnsform:uppercase>'.$sm_id.'</td>
	  <td style=text-align:center;text-trnsform:uppercase>'.$im.'</td>
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
 
</html>