
<?php
 include_once("dbconnect.php");

if($_REQUEST['id']) {
	$sql = "SELECT sm_id, name, address, mobile FROM supplymaster 
WHERE sm_id='".$_REQUEST['smid']."'";
	$resultset = mysqli_query($conn, $sql);	
	$smdata = array();
	while( $sm = mysqli_fetch_assoc($resultset) ) {
		$smdata = $sm;
	}
	echo json_encode($smdata);
} else {
	echo 0;	
}
?>