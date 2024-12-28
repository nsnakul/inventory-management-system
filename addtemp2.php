
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
    
	$rate=trim($_POST['rate']);
	$quantity=trim($_POST['quantity']);
	$q2="insert into temp(status,id,rate,quantity)
	values('1','".$id."','".$rate."','".$quantity."' ) ";
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
    <label for="input Address" style=font-size:20;color:goldenrod>ITEM NAME</label>
    
    <select Id="item_master" class="form-control" onKeyUp="multiply()" placeholder="rate" >
 <option value="5" selected="selected"  Id="item_master" class="form-control" onKeyUp="multiply()">rate</option>     	
<?php
$sql = "SELECT Id, Rate FROM item_master";
$resultset = mysqli_query($conn, $sql);
while( $rows = mysqli_fetch_assoc($resultset) ) { 
?>
<option value="<?php 
echo $rows["Rate"]; ?>"><?php echo $rows["Id"]; ?> </option>
<?php }	?>
  
  </div>
  </div>
  
  <div class="form-row" style=position:absolute;margin-left:50%;margin-top:20%>
   <div class="form-group col-md-13" style=height:30;width:250>
   <label for="input Address" style=font-size:20;color:goldenrod>QUANTITY</label>
   <input type="number" class="form-control"  name="quantity" id="quantity" value="5" placeholder="quantity">
  
  </div>
  </div>
 <div class="form-row" style=position:absolute;margin-left:75%;margin-top:20%>
   <div class="form-group col-md-12"style=height:30;width:250>
   <label for="input Address" style=font-size:20;color:goldenrod>TOTAL</label>
   <input type="number" class="form-control" name="TOTAL" id="TOTAL" value="c" placeholder="">
  </input>
  </div>
  </div>
 
<script>
	function multiply()
{
    a = Number(document.getElementById('Rate').value);
    b = Number(document.getElementById('quantity').value);
    c = a * b;

    document.getElementById('TOTAL').value = c;
}
</script>

 




<div style=background-color:#4db6ac;position:absolute;margin-left:45%;margin-top:1%;height:35;width:100>
<button type="submit" class=" btn btn-primary btn-block"  name="s"  style=background-color:#f48fbi;font-weight:bold;width:200px>ADD</button>
</div>
</form>

<?php 
$sq=mysqli_query($conn,"select * from temp");

echo '<table border="1" style=margin-top:10%><tr><th> t_id </th>
  
<th> item id  </th>
<th> time stamp   </th>
<th> rate  </th>
<th>  quantity </th></tr>';
while ($r=mysqli_fetch_array($sq))
{
echo '<tr>
        <th>'.$r['t_id'].'</th>
		 
		<th>'.$r['id'].'</th> 
		<th>'.$r['datetime'].'</th>
		<th>'.$r['Rate'].'</th>
		<th>'.$r['quantity'].'</th></tr>';
}
echo '</table>';
?>