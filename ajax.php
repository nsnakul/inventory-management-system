<html>
<body>
<script src="jqlib.js"></script>
<?php 
if (isset($_POST["save"]))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IMS";

$item_id=$_POST['item_id'];
$rate=$_POST['rate'];
$quantity=$_POST['quantity'];


$conn=new mysqli($servername,$username,$password,$dbname);

$sql="insert into temp(status,item_id,rate,quantity)values('1','$item_id','$rate','$quantity')";
 
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

 <form>
                        <div class="form-group">
                           <label for="item_master-DROPDOWN">item_master</label>
                           <select class="form-control" id="Id">
                              <option value="">item_master</option>
                              <?php
                                 require_once "item_master.php";
                                 $result = mysqli_query($conn,"SELECT * FROM item_master where Id = 0");
                                 while($row = mysqli_fetch_array($result)) {
                                 ?>
                              <option value="<?php echo $row['Id'];?>"><?php echo $row["item_master"];?></option>
                              <?php
                                 }
                                 ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="purchasedetail">purchasedetail</label>
                           <select class="form-control" id="item_master-dropdown">
                           </select>
                        </div>
                     </form>
					 
					 
					  <script>
         $(document).ready(function() {
    $('#item_master-dropdown').on('change', function() {
        var category_id = this.value;
        $.ajax({
            url: "fetch-item_master-by-purchasedetail.php",
            type: "POST",
            data: {
                Id: item_id
            },
            cache: false,
            success: function(result) {
                $("#item_id-dropdown").html(result);
            }
        });
    });
});
      </script>


<?php
require_once "item_master.php";
$item_id = $_POST["Id"];
$result = mysqli_query($conn,"SELECT * FROM categories where parent_id = $Id");
?>
<option value="">purchasedetail</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["Id"];?>"><?php echo $row["item_master"];?></option>
<?php
}
?>

	<form method="post" id="item_id" name="item_master">
	
 <div class="form-row" style=position:absolute;margin-left:2%;margin-top:20%>
   <div class="form-group col-md-50" style=height:30;width:200>
   <label for="inputstate" style=font-size:20;color:goldenrod>ITEM NAME</label>
    <select id="item_id" class="form-control" onClick="dropdown()" name="item_master">
 <option value=5>item</option>
	  </select>
</div>
</div>

 
 <div class="form-row" style=position:absolute;margin-left:25%;margin-top:20%>
   <div class="form-group col-md-12"style=height:30;width:250>
   <label for="input Address" style=font-size:20;color:goldenrod>RATE</label>
   <input type="number" class="form-control" name="rate" id="rate"  onKeyUp="multiply()" placeholder="rate">
  
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
  
  </div>
  </div>
 
<script>
	function multiply()
{
    a = Number(document.getElementById('rate').value);
    b = Number(document.getElementById('quantity').value);
    c = a * b;

    document.getElementById('TOTAL').value = c;
}
</script>





<div style=background-color:#4db6ac;position:absolute;margin-left:40%;margin-top:35%;height:35;width:100>
<button type="submit" class=" btn btn-primary btn-block"  name="save" value="save" style=background-color:#f48fbi;font-weight:bold;width:200px>ADD</button>
</div>
</form>


 </html>