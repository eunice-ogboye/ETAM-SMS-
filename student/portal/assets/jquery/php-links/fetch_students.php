<?php
 require("connect.php");
	
	# Record Selection
	# ----------------
 #GROUP BY item_name, item_type
	$sqlstr = "SELECT *  FROM `student_info` ORDER BY datex DESC";
	$result = mysqli_query($conn,$sqlstr) or die ("Error Encountered: ".mysqli_error($conn));
	
	$tr="";
	$sn=0;
	while($row = mysqli_fetch_assoc($result)){
		$sn++;
		$space1  = "";
		$Id 	 = $row['Id'];
		$fname = $row['fname'];
		$dept = $row['dept'];
		$faculty = $row['faculty'];
		$matno = $row['matno'];
		$level = $row['levelx'];
		$fname = $row['fname'];
		$fname = $row['fname'];

		$datex 	 = $row['datex'];

		
		
		$button1	= "<button class='btn btn-success btn-sm' type='button' class='btn btn-inverse' value ='". $Id ."' onclick='view_students(this.value)'> <i class='fa fa-eye icon-only'></i> View</button>";	
        //$button2	= "<input type='text'  value ='". $Id ."' onclick='deleterec(this.value)'>";
		$button2	= "<button class='btn btn-danger btn-sm' type='button' value ='". $Id ."' onclick='delete_student(this.value)'>Delete</button>";	
		$button     = $button1. "  ". $button2;
		$tr.="<tr>";
		   // $tr.="<td>$space1</td>";
			$tr.="<td>$sn</td>";
			$tr.="<td>$fname</td>";
			$tr.="<td>$dept</td>";
			$tr.="<td>$faculty</td>";
			$tr.="<td>$matno</td>";
			$tr.="<td>$level</td>";
			$tr.="<td style='width:150px; text-align: center;'>$button</td>";
			
		$tr.="</tr>";		
	}
	echo $tr;

?>


	