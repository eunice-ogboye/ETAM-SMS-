<?php
	error_reporting(0);
	session_start();
	if (!isset($_SESSION['userName'])){
		//echo "PLEASE USE THE LOGIN INTERFACE TO GAIN ACCESS";
	    header("location:../../../auth/");
		exit;
	}else{
		if ($_SESSION['Loginaccess']!='AGranTee'){
			echo "ACCESS DENIED";
			exit;			
		}
	}
?>
