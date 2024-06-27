<?php
	require("connect.php");

	extract($_POST);
	$_SESSION['userName']    ='XXXXXXXX!wreqeqwe';
	$_SESSION['Loginaccess'] = 'XXXXXXXX!wreqeqwe';

	$userPassword		=	trim($userPassword);
	$getencryptpswd	=	SHA1($userPassword);
	
	$sql 		    = 	"SELECT * FROM `admin_info` WHERE Username='$userName'";
	$query 			=	mysqli_query($conn ,$sql);
	$num         	=	mysqli_num_rows($query);
	
	if ($num ==1){
		$row    = mysqli_fetch_assoc($query);
		$DBpswd = 	$row['Password'];
		$DBpswd =	trim($DBpswd);
		$Type   =   $row['Type'];
		if ($getencryptpswd!=$DBpswd){
			echo 1;
		}else{

		if ($Type == '1'){
			
        $_SESSION['userName'] = $userName;
        $_SESSION['Loginaccess'] = 'AGranTee';
        echo 2;
		}
		elseif($num >1){
		echo -1;
		}else{
			echo 0;
		}}}
?>




