

<?php
include("dbconnect.php");
if($_REQUEST==['imId']) {
	$sql = "SELECT Id Rate FROM item_master 
WHERE id='".$_REQUEST==['Id']."'";
	$resultset = mysqli_query($conn, $sql);
	$empData = array();
	while( $emp= mysqli_fetch_assoc($resultset) ) {
		$imData = $im;
	}
	echo json_encode($imData);
} else {
	echo 0;	
}
?>