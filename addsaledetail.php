
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/getData.js"></script>
 

<?php 
include"dbconnect.php";
if(isset($_POST['s']))
{
 
	$id=trim($_POST['id']);
    $rt=trim($_POST['rt']);
	$quantity=trim($_POST['quantity']);
	$q2="insert into saledetail(status,product_id,rate,quantity)
	values('1','".$id."','".$rt."','".$quantity."' ) ";
mysqli_query($conn,$q2);
echo ' <meta http-equiv="refresh" content="0">';
}
?> 
 
<form method="post" action="" enctype="multipart/form-data">

<div class="form-row" style=position:absolute;margin-left:2%;margin-top:20%>
   <div class="form-group col-md-12"style=height:30;width:250>
   <label for="input Address" style=font-size:20;color:goldenrod>ITEM NAME</label>
    
<?php 
$sq1=mysqli_query($conn,"select * from item_master");

echo '<select name="id">';
while ($r=mysqli_fetch_array($sq1))
{

echo '<option value='.$r['Id'].'>'.$r['Item_name'].'</option>';

}
 
?>

   
 </select>
  </div>
  </div> 

 <div class="form-row" style=position:absolute;margin-left:35%;margin-top:18%>
   <div class="form-group col-md-13" style=height:30;width:250>
   <label for="input Address" style=font-size:20;color:goldenrod>rate</label>
   <input type="number" class="form-control"  name="quantity"   >
      
<?php 
$sq1=mysqli_query($conn,"select * from item_master");

echo '<select name="rt">';
while ($r=mysqli_fetch_array($sq1))
{

echo '<option value='.$r['Id'].'>'.$r['Rate'].'</option>';

}
 
?>

   
 </select>
  </div>
  </div> 
  
  <div class="form-row" style=position:absolute;margin-left:60%;margin-top:18%>
   <div class="form-group col-md-13" style=height:30;width:250>
   <label for="input Address" style=font-size:20;color:goldenrod>QUANTITY</label>
   <input type="number" class="form-control"  name="quantity" id="quantity" value="5" >
  
  </div>
  </div>
 


 




<div style=background-color:#4db6ac;position:absolute;margin-left:45%;margin-top:35%;height:35;width:100>
<button type="submit" class=" btn btn-primary btn-block"  name="s"  style=background-color:#f48fbi;font-weight:bold;width:200px>ADD</button>
</div>
</form>

<?php 
$sq=mysqli_query($conn,"select * from saledetail");

echo '<table border="1"><tr>
<th> sd_id </th>
<th> item id  </th>
<th> rate  </th>
<th>  quantity </th>
 
</tr>';
while ($r=mysqli_fetch_array($sq))
{
echo '<tr>
        <th>'.$r['sd_id'].'</th>		 
		<th>'.$r['product_id'].'</th>
		<th>'.$r['rate'].'</th>
		<th>'.$r['quantity'].'</th>
		 
		</tr>';
}
echo '</table>';
?>