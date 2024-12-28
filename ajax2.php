
<?php
require_once "item_master.php";
$item_id = $_POST["Id"];
$result = mysqli_query($conn,"SELECT * FROM item_master where Id = $Id");
?>
<option value="">list</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["Id"];?>"><?php echo $row["item_master"];?></option>
<?php
}
?>