<?php
   require("connect.php");
	extract($_POST);
    $datex = date("Y-m-d H:i:s");

	$sqlstr = "SELECT * FROM `courses_info` WHERE Id='$Id'";
	$result = mysqli_query($conn,$sqlstr) or die ("Error Encountered: ".mysqli_error($conn));
	$rowcount = mysqli_num_rows($result);
	if ($rowcount==0){
		# Record Insertion 
		# ----------------
		$sqlstr = "INSERT INTO `courses_info`  (depts, facultys, title, unit, semester, code, levelx, sessionx, datex) 
                                                VALUES
                                                ('$depts','$facultys','$title','$unit','$semester','$code','$level','$session','$datex')";

		$result = mysqli_query($conn,$sqlstr) or die ("Record not Inserted: ".mysqli_error($conn));
		echo 1;		
	}
	else{
		$sqlstr = "UPDATE `courses_info` SET 
				                              facultys  ='$facultys',
                                              depts     ='$depts',
                                              unit      ='$unit',
                                              levelx     ='$level',
                                              semester  ='$semester',
                                              title     ='$title',
                                              code      ='$code',
                                              sessionx   ='$session'                                              
                                              WHERE Id ='$Id'";
		$result = mysqli_query($conn,$sqlstr) or die ("Record not Updated: ".mysqli_error($conn));
		echo 2;	
	}
	

?>