<?php
	require("connect.php");
	session_start(); 
	$userName = $_SESSION['userName'];
	$sql = "SELECT * FROM `admin_info` WHERE Username ='$userName'";
	$query  =	mysqli_query($conn,$sql);
	$num 	=	mysqli_num_rows($query);
	if ($num==1){
		$row = mysqli_fetch_array($query);
		echo json_encode($row);
		//echo $row['Id'];
	}else{
		echo 0;
	}
?>