<?php
	require("connect.php");
    extract($_POST);
    $filename1 = $_FILES["about_bg"]["name"];
    $tempname1 = $_FILES["about_bg"]["tmp_name"];
    $passportz   = "aboutpic/".$filename1;
    move_uploaded_file($tempname1, $passportz);
    $sqlstr = "UPDATE `about_info` SET
                    about_bg    = '$filename1'";

    $result = mysqli_query($conn,$sqlstr) or die ("Record not Updated: ".mysqli_error($conn));
   // echo 1;	
    echo '<script>alert("Picture changed");</script>';
    echo '<script>window.location.replace("../../../home-settings-page-about.php")</script>';
	
?>