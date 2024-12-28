<?php
$id =$_GET['id'];
echo $id ;

?>
<?php
if (isset($_POST["save"]))
{
$recv_no=$_POST['t1'];
$recv_date=$_POST['t2'];

$servername="localhost";
$userid="root";
$password="";
$dbname="IMS";

$conn=new mysqli($servername,$userid,$password,$dbname);

$sql="INSERT INTO purchasemaster(recv_no,recv_date,status)VALUES('$recv_no','$recv_date','1')";
if($conn->query($sql)==TRUE)
{
$status="Record inserted successfully";
}
else
{
$status="Record could not be inserted".$sql;
}
echo $status;

$conn->close();
}
?>

<form method="post" action="" enctype="multipart/form-data">
<table style=color:rmv;margin-left:10%;height:50;width:800 border=0 >
<tr>
<td style=color:goldenrod;font-size:25;font-weight:bold>RECIVING NO:</td><td><input type=text name='t1' style=height:28;width:250"></td>


    <td style=color:goldenrod;font-size:25;font-weight:bold;margin-left:10%>RECIVING DATE:</td><td><input type=text name='t2' style=height:28;width:250"></td></tr>
 
  
 
</table>
</form>

<br/>
<span style=font-size:25;font-weight:bold;margin-left:10%>SELECT SUPPLIER </span>
<?php 
$sq1=("select * from suppliermaster ");
echo '<select name="sm_id">';
while ($r=mysqli_fetch_array($sq1))

{

echo '<option value='.$r['sm_id'].'>'.$r['name'].'</option>';

}
echo '</select>';

echo '</select>';


?>






<br/><br/><br/><br/><br/><br/>
<?php 
session_start();
if(!isset($_SESSION['ad']))
 
?>



<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IMS";


if(isset($_POST['s']))
{
$d=Date('Y-m-d');
	$p=$_POST['id'];
	 
	$QTY=$_POST['quantity'];
	$PRICE=$_POST['rate'];
	$sql="insert into purchasedetail(id,date,quantity,rate)
	values('".$p."','".$QTY."','".$PRICE."' ) ";
mysqli_query($q2);
echo ' <meta http-equiv="refresh" content="0">';
}
?>
<form action="" method="POST">
<tr style=color:black;font-size:25>
<td style=color:black;font-size:20>ITEM<input type="text" value="" name="p" id="p"  </td>
  <td style=color:black;font-size:20>Quantity<input type="text" value="" name="QTY" id="QTY" onKeyUp="multiply()"/></td>
  <td style=color:black;font-size:20>Rate<input type="text" name="PPRICE" id="PPRICE" value="5" /></td>
  <td style=color:black;font-size:20>Total<input type="text" name="TOTAL" id="TOTAL" /></td>
</tr>
<script>
	function multiply()
{
    a = Number(document.getElementById('QTY').value);
    b = Number(document.getElementById('PPRICE').value);
    c = a * b;

    document.getElementById('TOTAL').value = c;
}
</script>

<br><br>select item 
<?php 
$sq1=("select * from item_master");

echo '<select name="id">';
while ($r=mysqli_fetch_array($sq1))
{

echo '<option value='.$r['id'].'>'.$r['item_name'].'</option>';

}

?>

<br><br>
<input type="submit" name="s">
</form>




</body>
</html>


?php
if (isset($_POST['view']))
	
{
$servername="localhost";
$userid="root";
$password="";
$dbname="IMS";
$conn=new mysqli($servername,$userid,$password,$dbname);
$Id=$_POST['Id'];
$rate=$_POST['rate'];
$quantity=$_POST['quantity'];

$sql="SELECT * FROM purchasedetail ";

$res=$conn->query($sql);
if($res->num_rows>0)
{
echo"<table border=1>
<tr><th>Id</th>rate<th>quantity</tr>";
 
while ($r=mysqli_fetch_array($sql))
{

$Id=$r['Id'];
$rate=$r['rate'];
$quantity=$r['quantity'];
 


echo'<tr><td>'. $Id. '</td><td>' .$rate. '</td><td>' .$quantity. '</td></tr>';
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
