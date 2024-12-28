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
	$transfer_no=trim($_POST['transfer_no']);
	$transfer_date=trim($_POST['transfer_date']);  
	$customername=trim($_POST['customername']);
	 
	$q2="insert into salemaster(status,transfer_no,transfer_date,customername)
	values('1','".$transfer_no."','".$transfer_date."','".$customername."' ) ";

 mysqli_query($conn,$q2);
echo ' <meta http-equiv="refresh" content="0">';
 
}
?>

<form method="post" action="" enctype="multipart/form-data">

 
 <div class="form-row" style=position:absolute;margin-left:7%;margin-top:2%>
   <div class="form-group mb-50" style=height:30;width:500>
   <label for="input Address" style=font-size:20>TRANSFER NO.</label>
   <input type="number" class="form-control" name="transfer_no"  placeholder="transfer_no.">
  
  </div>
  </div>
   
<div class="form-row" style=position:absolute;margin-left:50%;margin-top:2%>
   <div class="form-group col-md-500" style=height:30;width:500>
   <label for="input Address" style=font-size:20>TRANSFER DATE</label>
   <input type="date" class="form-control" name="transfer_date"  placeholder="transfer Date">
  
  </div>
  </div>
 
 <div class="form-row" style=position:absolute;margin-left:7%;margin-top:12%>
   <div class="form-group mb-50" style=height:30;width:500>
   <label for="input Address" style=font-size:20>CUSTOMER NAME.</label>
   <input type="text" class="form-control" name="customername"  placeholder="customername.">
  
  </div>
  </div>  
  
  
 <div style=background-color:#4db6ac;position:absolute;margin-left:45%;margin-top:20%;height:35;width:100>
<button type="submit" class=" btn btn-primary btn-block"  name="s"  style=background-color:#f48fbi;font-weight:bold;width:200px>ADD</button>
</div>
</form>
<div style=background-color:#4db6ac;position:absolute;margin-left:10%;margin-top:30%;height:100;width:400> 
 <?php 
$sq=mysqli_query($conn,"select * from salemaster");

echo '<table border="1"><tr> <th> sm id </th>

<th> status  </th>
<th> datetime  </th>
<th> transfer no  </th>
<th> transfer date  </th>
<th> customername </th>
 
</tr>';
while ($r=mysqli_fetch_array($sq))
{
echo '<tr>
		<th>'.$r['sm_id'].'</th> 
		
		<th>'.$r['status'].'</th>
        <th>'.$r['datetime'].'</th>		
		<th>'.$r['transfer_no'].'</th> 
		<th>'.$r['transfer_date'].'</th>
		<th>'.$r['customername'].'</th>
		
		</tr>';
}
echo '</table>';
?>
</div>

</div>
</body>
</html>









