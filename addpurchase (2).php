<?php 
session_start();
if(!isset($_SESSION['ad']))
 
 

<?php 
include"connection.php";
if(isset($_POST['s']))
{
$d=Date('Y-m-d');
	$p=trim($_POST['p']);
	 
	$QTY=trim($_POST['QTY']);
	$PPRICE=trim($_POST['PPRICE']);
	$q2="insert into purchase(pid,date,quantity,rate)
	values('".$p."','".$d."','".$QTY."','".$PPRICE."' ) ";
mysqli_query($cn,$q2);
echo ' <meta http-equiv="refresh" content="0">';
}
?>
<form action="" method="POST">
<tr>
  <td>Quantity<input type="text" value="" name="QTY" id="QTY" onKeyUp="multiply()"/></td>
  <td>Rate<input type="text" name="PPRICE" id="PPRICE" value="8" /></td>
  <td>Total<input type="text" name="TOTAL" id="TOTAL" /></td>
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
 
<br><br>select product  
<?php 
$sq1=mysqli_query($cn,"select * from item");

echo '<select name="p">';
while ($r=mysqli_fetch_array($sq1))
{

echo '<option value='.$r['pid'].'>'.$r['item_name'].'</option>';

}

?>

<br><br>
<input type="submit" name="s">
</form>
<?php 
$sq=mysqli_query($cn,"select * from purchase");

echo '<table border="1"><tr><th> pur id </th>
<th>  purm id  </th>
<th> product id  </th>
<th> date  of allocation </th>
<th>  quantity  </th>
<th> rate  </th></tr>';
while ($r=mysqli_fetch_array($sq))
{
echo '<tr>
        <th>'.$r['pur_id'].'</th>
		<th>'.$r['purm_id'].'</th> 
		<th>'.$r['pid'].'</th> 
		<th>'.$r['date'].'</th>
		<th>'.$r['quantity'].'</th>
		<th>'.$r['rate'].'</th></tr>';
}
echo '</table>';
?>