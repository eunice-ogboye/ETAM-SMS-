<?php
   require("connect.php");
	extract($_POST);
    $datex = date("Y-m-d H:i:s");

	$sqlstr = "SELECT * FROM `student_course_reg` WHERE semester = '$semester_course'
												  AND   faculty	 = '$loginfacultyx'
												  AND   dept	 = '$logindeptx'
												  AND   rlevel	 = '$level'
												  AND   sessionx	 = '$session'
												  AND   matno	 = '$loginmatno'
												  AND   levelx   = '$loginlevel'";
	$result = mysqli_query($conn,$sqlstr) or die ("Error Encountered: ".mysqli_error($conn));
	$rowcount = mysqli_num_rows($result);
	if ($rowcount==0){
		# Record Insertion 
		# ----------------
		$sqlstr = "INSERT INTO `student_course_reg`  (dept, faculty, semester, levelx, datex, matno,sessionx, rlevel) 
                                                     VALUES
                                                     ('$logindeptx','$loginfacultyx','$semester_course','$loginlevel','$datex','$loginmatno','$session','$level')";

		$result = mysqli_query($conn,$sqlstr) or die ("Record not Inserted: ".mysqli_error($conn));
		echo 1;		
	}
	else{
		echo 2;
	}

?>