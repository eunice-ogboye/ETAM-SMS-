<?php
session_start();
$userName = $_SESSION['userName'];
 if(isset($_SESSION['userName'])){

 	session_destroy();

 	header("location:../../auth/");
 }
    else
    {
       header("location:../../auth/");	
    }
 
?>