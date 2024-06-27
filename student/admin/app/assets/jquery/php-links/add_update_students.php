<?php
   require("connect.php");
	extract($_POST);
    $datex = date("Y-m-d H:i:s");
    $pswz = SHA1($psw);
	$sqlstr = "SELECT * FROM `student_info` WHERE Id='$Id'";
	$result = mysqli_query($conn,$sqlstr) or die ("Error Encountered: ".mysqli_error($conn));
	$rowcount = mysqli_num_rows($result);
	if ($rowcount==0){
		# Record Insertion 
		# ----------------
		$sqlstr = "INSERT INTO `student_info` (dept,
		                                       faculty,
											   fname, 
											   matno, 
											   psw, 
											   levelx, 
											   datex) 
		                                       VALUES
		                                      ('$dept_student',
											  '$facultys',
											  '$fname',
											  '$matno',
											  '$pswz',
											  '$level',
											  '$datex')";

		$result = mysqli_query($conn,$sqlstr) or die ("Record not Inserted: ".mysqli_error($conn));
		echo 1;		
	}
	else{
		$sqlstr = "UPDATE `student_info` SET 
				                              faculty ='$facultys',
                                              dept    ='$dept_student',
                                              levelx  ='$level',
                                              matno   ='$matno', 
                                            
                                              fname   ='$fname' 

                                              
                                              WHERE Id ='$Id'";
		$result = mysqli_query($conn,$sqlstr) or die ("Record not Updated: ".mysqli_error($conn));
		echo 2;	
	}
	

?>