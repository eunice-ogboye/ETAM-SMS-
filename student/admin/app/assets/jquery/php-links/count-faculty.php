<?php
    require("connect.php");  
	$sql = "SELECT COUNT(*)  AS count FROM `faculty_info`";
	$query  =	mysqli_query($conn,$sql);
	$num 	=	mysqli_num_rows($query);
	if ($num==1){
		$row = mysqli_fetch_array($query);
		echo json_encode($row);
	}else{
		echo 0;
	}
?>