<?php
 require("connect.php");
	
	# Record Selection
	# ----------------
 #GROUP BY item_name, item_type
	$sqlstr = "SELECT *  FROM `dept_info` ORDER BY datex DESC";
	$result = mysqli_query($conn,$sqlstr) or die ("Error Encountered: ".mysqli_error($conn));
	
	$tr="";
	$sn=0;
	while($row = mysqli_fetch_assoc($result)){
		$sn++;
		$space1  = "";
		$Id 	 = $row['Id'];
		$faculty = $row['faculty'];
		$dept = $row['dept'];
		$datex 	 = $row['datex'];

		
		
		$button1	= "<button class='btn btn-success btn-sm' type='button' class='btn btn-inverse' value ='". $Id ."' onclick='view_dept(this.value)'> <i class='fa fa-eye icon-only'></i> View</button>";	
        //$button2	= "<input type='text'  value ='". $Id ."' onclick='deleterec(this.value)'>";
		$button2	= "<button class='btn btn-danger btn-sm' type='button' value ='". $Id ."' onclick='delete_dept(this.value)'>Delete</button>";	
		$button     = $button1. "  ". $button2;
		$tr.="<tr>";
		   // $tr.="<td>$space1</td>";
			$tr.="<td>$sn</td>";
			$tr.="<td>$faculty</td>";
            $tr.="<td>$dept</td>";
			$tr.="<td>$datex</td>";
			$tr.="<td style='width:150px; text-align: center;'>$button</td>";
			
		$tr.="</tr>";		
	}
	echo $tr;

?>


	