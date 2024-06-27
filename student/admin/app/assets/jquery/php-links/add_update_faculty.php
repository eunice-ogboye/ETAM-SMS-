<?php
   require("connect.php");
	extract($_POST);
    $datex = date("Y-m-d H:i:s");

	$sqlstr = "SELECT * FROM `faculty_info` WHERE Id='$Id'";
	$result = mysqli_query($conn,$sqlstr) or die ("Error Encountered: ".mysqli_error($conn));
	$rowcount = mysqli_num_rows($result);
	if ($rowcount==0){
		# Record Insertion 
		# ----------------
		$sqlstr = "INSERT INTO `faculty_info` (faculty,datex) 
		                                VALUES
		                                ('$faculty','$datex')";

		$result = mysqli_query($conn,$sqlstr) or die ("Record not Inserted: ".mysqli_error($conn));
		echo 1;		
	}
	else{
		$sqlstr = "UPDATE `faculty_info` SET 
				                              faculty     ='$faculty' WHERE Id ='$Id'";
		$result = mysqli_query($conn,$sqlstr) or die ("Record not Updated: ".mysqli_error($conn));
		echo 2;	
	}
	

?>