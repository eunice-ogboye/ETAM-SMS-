<?php
 require("connect.php");
 
	$sqlstr = "SELECT *  FROM `faculty_info` ORDER BY datex DESC";
	$result = mysqli_query($conn,$sqlstr) or die ("Error Encountered: ".mysqli_error($conn));
	
	$tab="";
    $tab.="<option value=''>---Select Faculty---</option>";
	while($row = mysqli_fetch_assoc($result)){
		
		$faculty = $row['faculty'];

		$tab.="<option value='$faculty'>$faculty</option>";
		
	}
   
	echo $tab;

?>


	