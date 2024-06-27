<?php
    require("connect.php");
	
	$Id 	= $_POST['Id'];
	
	# Record Selection
	# ----------------
	$sqlstr = "SELECT * FROM `student_info` WHERE  Id='$Id'";
	$result = mysqli_query($conn,$sqlstr) or die ("Error Encountered: ".mysqli_error($conn));
	$rowcount = mysqli_num_rows($result);
	if ($rowcount==1){
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
	}else{
		echo 0;
	}
?>