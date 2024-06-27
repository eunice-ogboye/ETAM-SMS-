<?php
 require("connect.php");
 
	$sqlstr = "SELECT *  FROM `dept_info` ORDER BY datex DESC";
	$result = mysqli_query($conn,$sqlstr) or die ("Error Encountered: ".mysqli_error($conn));
	
	$deptz="";
    $deptz.="<option value=''>---Select Department---</option>";
	while($row = mysqli_fetch_assoc($result)){
		
		$dept = $row['dept'];

		$deptz.="<option value='$dept'>$dept</option>";
		
	}
   
	echo $deptz;

?>


	