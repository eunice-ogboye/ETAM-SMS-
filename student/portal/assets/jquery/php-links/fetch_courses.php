<?php
 require("connect.php");
	
 	extract($_GET);
	
	
	$sqlstr = "SELECT *  FROM `courses_info` WHERE semester = '$semester_course'
	                                         AND   sessionx  = '$session'
											 AND   depts  = '$logindeptx'
											 AND   levelx     = '$level'";
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

		$datex 	 = $row['datex'];

		$title = strtoupper($title);
		$code = strtoupper($code);
		$semester = strtoupper($semester);
		
		$tr.="<tr>";
			$tr.="<td>$sn</td>";
			$tr.="<td>$title</td>";
			$tr.="<td>$code</td>";
			$tr.="<td>$unit</td>";
			
		$tr.="</tr>";

	$sqlstr1 = "SELECT SUM(unit) as unitx  FROM `courses_info` WHERE semester = '$semester_course'
	                                         AND   sessionx  = '$session'
											 AND   depts  = '$logindeptx'
											 AND   levelx     = '$level'";
	$result1 = mysqli_query($conn,$sqlstr1) or die ("Error Encountered: ".mysqli_error($conn));
	$row1 = mysqli_fetch_assoc($result1);
	$allunit = $row1['unitx'].' Units';
		
	
		
	}
	$tr.="<tr>";
	$tr.="<td></td>";
	$tr.="<td></td>";
			$tr.="<td>Total</td>";
			$tr.="<td>$allunit</td>";			
		$tr.="</tr>";

	echo $tr;

	//echo 1;
	//exsit();


?>


	