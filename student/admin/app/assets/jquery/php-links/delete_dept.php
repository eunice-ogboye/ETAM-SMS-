<?php
require("connect.php");
$Id 	= $_POST['Id'];
	
	# Record Selection
	# ----------------
	$sqlstr = "SELECT * FROM `dept_info` WHERE Id='$Id'";
	$result = mysqli_query($conn,$sqlstr) or die ("Error Encountered: ".mysqli_error($conn));
	$rowcount = mysqli_num_rows($result);
	if ($rowcount==1){
        $sqlstr = "DELETE FROM `dept_info`  WHERE  Id= '$Id'";
		mysqli_query($conn,$sqlstr);
		echo 1;
	}else{
		echo 0;
	}



?>