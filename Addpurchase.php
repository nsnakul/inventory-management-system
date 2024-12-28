<html>
 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/getData.js"></script>
 
<div  style=background-color:white;position:absolute;border-style:groove;border-top-width:5px;border-top-color:goldenrod;border-left-width:15px;border-right-width:15px;border-right-color:goldenrod;border-left-color:goldenrod;height:600;width:1300>  
   
<?php
include"dbconnect.php";
if(isset($_POST['s']))
 
{ 	
	$recv_no=trim($_POST['recv_no']);
	$recv_date=trim($_POST['recv_date']);  
	$sm=trim($_POST['sm']);
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
   <input type="number" class="form-control" name="recv_no"  placeholder="Reciving No.">
  
  </div>
  </div>
   
<div class="form-row" style=position:absolute;margin-left:50%;margin-top:2%>
   <div class="form-group col-md-500" style=height:30;width:500>
   <label for="input Address" style=font-size:20>RECIVING DATE</label>
   <input type="date" class="form-control" name="recv_date"  placeholder="Reciving Date">
  
  </div>
  </div>
   
 <div class="form-row" style=position:absolute;margin-left:7%;margin-top:10%>
   <div class="form-group col-md-50"style=height:30;width:500>
   <label for="inputstate" style=font-size:20>SUPPLIER</label>
     
<?php

 
$sq1=mysqli_query($conn,"select * from supplymaster");

echo '<select name="sm" style=color:red;height:40;width:500 >';
while ($r=mysqli_fetch_array($sq1))
{

echo '<option value='.$r['sm_id'].'>'.$r['name'].'</option>';

}
 

?>
</select>

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
  
 <div style=background-color:#4db6ac;position:absolute;margin-left:45%;margin-top:20%;height:35;width:100>
<button type="submit" class=" btn btn-primary btn-block"  name="s"  style=background-color:#f48fbi;font-weight:bold;width:200px>ADD</button>
</div>
</form>
<div style=background-color:#4db6ac;position:absolute;margin-left:10%;margin-top:30%;height:100;width:400> 
 <?php 
$sq=mysqli_query($conn,"select * from purchasemaster");

echo '<table border="1"><tr> <th> pm id </th>

<th> status  </th>
<th> datetime  </th>
<th> reciving no  </th>
<th> reciving date  </th>
<th> supplier id  </th>
<th> item id  </th>
</tr>';
while ($r=mysqli_fetch_array($sq))
{
echo '<tr>
		<th>'.$r['pm_id'].'</th> 
		
		<th>'.$r['status'].'</th>
        <th>'.$r['datetime'].'</th>		
		<th>'.$r['recv_no'].'</th> 
		<th>'.$r['recv_date'].'</th>
		<th>'.$r['sm_id'].'</th>
		<th>'.$r['item_id'].'</th>
		</tr>';
}
echo '</table>';
?>
</div>

</div>
</body>
</html>









