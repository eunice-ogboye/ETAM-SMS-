<?php
   require("connect.php");
	extract($_POST);
	$sqlstr = "UPDATE `setting_info` SET sessionx ='$sessionz',
                                              semester    ='$semesterz'";
		$result = mysqli_query($conn,$sqlstr) or die ("Record not Updated: ".mysqli_error($conn));
?>