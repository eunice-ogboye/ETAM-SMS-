<?php
    require("connect.php");
	$sqlstr = "SELECT * FROM `setting_info`";
	$result = mysqli_query($conn,$sqlstr) or die ("Error Encountered: ".mysqli_error($conn));
	$rowcount = mysqli_num_rows($result);
	if ($rowcount==1){
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
	}else{
		echo 0;
	}
?>