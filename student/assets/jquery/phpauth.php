<?php
	require("connect.php");

	extract($_POST);
	$_SESSION['matricnumber']    ='XXXXXXXX!wreqeqwe';
	$_SESSION['Loginaccess'] = 'XXXXXXXX!wreqeqwe';

	$psw		=	trim($psw);
	$getencryptpswd	=	SHA1($psw);
	
	$sql 		    = 	"SELECT * FROM `student_info` WHERE matno='$matricnumber'";
	$query 			=	mysqli_query($conn ,$sql);
	$num         	=	mysqli_num_rows($query);
	
	if ($num ==1){
		$row    = mysqli_fetch_assoc($query);
		$DBpswd = 	$row['psw'];
		$DBpswd =	trim($DBpswd);
		$Type   =   $row['Type'];
		if ($getencryptpswd!=$DBpswd){
			echo 1;
		}else{

		if ($Type == '1'){
			
        $_SESSION['matricnumber'] = $matricnumber;
        $_SESSION['Loginaccess'] = 'AGranTee';
        echo 2;
		}
		elseif($num >1){
		echo -1;
		}else{
			echo 0;
		}}}
?>




