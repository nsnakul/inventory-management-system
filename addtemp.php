<html>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/getData.js"></script>
 
 

<div  style=background-color:rmv;position:absolute;margin-top:0%;height:1200;width:1200>  
 
  
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
echo '<select name="rate">';
while ($r=mysqli_fetch_assoc($sq1))
{

echo '<option value='.$r['Id'].'>'.$r['Item_name'].'</option>';
echo '<option value='.$r['name'].'>'.$r['name'].'</option>';
}
 
?>
 



<div style=background-color:#4db6ac;position:absolute;margin-left:40%;margin-top:40%;height:35;width:100>
<button type="submit" class=" btn btn-primary btn-block"  name="s"  style=background-color:#f48fbi;font-weight:bold;width:200px>save</button>
</div> 
</form>


</div>
</html>