<?php
 require("connect.php");
 require("userdata.php");

 $sqlstr1 = "SELECT *  FROM `student_course_reg` WHERE matno = '$matricnumber'";
 $result1 = mysqli_query($conn,$sqlstr1) or die ("Error Encountered: ".mysqli_error($conn));
 $row1 = mysqli_fetch_assoc($result1);
 
 $semesterp = $row1['semester'];
 $matnop = $row1['matno'];
 $levelp = $row1['rlevel'];
 $deptp = $row1['dept'];
 $sessionp = $row1['sessionx'];
 $datex = $row1['datex'];

 $datex  = date('jS F, Y - h:s:a',strtotime($datex));
 

	$sqlstr = "SELECT *  FROM `courses_info` WHERE semester = '$semesterp'
											 AND   depts     = '$deptp'
											 AND   sessionx  = '$sessionp'
											 AND   levelx    = '$levelp'
											 ORDER BY datex DESC";
	$result = mysqli_query($conn,$sqlstr) or die ("Error Encountered: ".mysqli_error($conn));
	//$rowcount = mysqli_num_rows($result);
	
	$tr="";
	$sn=0;
	while($row = mysqli_fetch_assoc($result)){
		$sn++;
		$space1  = "";
		$Id 	 = $row['Id'];
		$faculty = $row['facultys'];
		$dept    = $row['depts'];
		$unit = $row['unit'];
		$code = $row['code'];
		$title = $row['title'];
		$semester = $row['semester'];
		$level = $row['levelx'];

		//$datex 	 = $row['datex'];
         
		//$datex 	 = date("Y-m-d H:i:s",strtotime($datex));


		$title = strtoupper($title);
		$code = strtoupper($code);
		$semester = strtoupper($semester);
		
		$tr.="<tr>";
			$tr.="<td>$sn</td>";
			$tr.="<td>$title</td>";
			$tr.="<td>$code</td>";
			$tr.="<td>$unit</td>";
		$tr.="</tr>";	

		$sqlstr1 = "SELECT SUM(unit) as unitx  FROM `courses_info` WHERE semester = '$semesterp'
	                                         AND   depts     = '$deptp'
											 AND   sessionx  = '$sessionp'
											 AND   levelx    = '$levelp'";
	$result1 = mysqli_query($conn,$sqlstr1) or die ("Error Encountered: ".mysqli_error($conn));
	$row1 = mysqli_fetch_assoc($result1);
	$allunit = $row1['unitx'];


	$sqlstr1 = "SELECT COUNT(*) as count  FROM `courses_info` WHERE semester = '$semesterp'
	                                         AND   depts     = '$deptp'
											 AND   sessionx  = '$sessionp'
											 AND   levelx    = '$levelp'";
	$result1 = mysqli_query($conn,$sqlstr1) or die ("Error Encountered: ".mysqli_error($conn));
	$row1 = mysqli_fetch_assoc($result1);
	$count = $row1['count'];
	
		
		
	}
	$tr.="<tr>";
	$tr.="<td><b>TOTAL UNITS: </b> </td>";
	$tr.="<td></td>";
			$tr.="<td></td>";
			$tr.="<td><b>$allunit </b></td>";			
		$tr.="</tr>";


		$tr.="<tr>";
	$tr.="<td><b>TOTAL COURSE ON LIST: </b> </td>";
	$tr.="<td><b>$count </b></td>";
			$tr.="<td></td>";
			$tr.="<td></td>";			
		$tr.="</tr>";
	
	$tr.="<tr>";
	$tr.="<td><b>TOTAL NUMBER OF UNITS: </b> </td>";
	$tr.="<td><b>$allunit </b></td>";
			$tr.="<td></td>";
			$tr.="<td></td>";			
		$tr.="</tr>";


		$tr.="<tr>";
	$tr.="<td><b>DATE REGISTERED: </b> </td>";
	$tr.="<td><b>$datex </b></td>";
			$tr.="<td></td>";
			$tr.="<td></td>";			
		$tr.="</tr>";

	
	echo $tr;


?>


	