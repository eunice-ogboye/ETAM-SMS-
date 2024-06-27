<?php
	error_reporting(0);
	session_start();
	if (!isset($_SESSION['matricnumber'])){
		//echo "PLEASE USE THE LOGIN INTERFACE TO GAIN ACCESS";
	    header("location:../../");
		exit;
	}else{
		if ($_SESSION['Loginaccess']!='AGranTee'){
			echo "ACCESS DENIED";
			exit;			
		}
	}
?>
