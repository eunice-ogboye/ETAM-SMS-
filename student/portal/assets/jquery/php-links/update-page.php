<?php
	require("connect.php");
    extract($_POST);
    $sqlstr = "UPDATE `page_info` SET 
                welcome_subject   ='$welcome_subject',
                welcome_content   ='$welcome_content',
                slide1_title      ='$slide1_title',
                slide1_subject    ='$slide1_subject',
                slide1_content    ='$slide1_content',
                slide2_title      ='$slide2_title',
                slide2_subject    ='$slide2_subject',
                slide2_content    ='$slide2_content',
                slide3_title      ='$slide3_title',
                slide3_subject    ='$slide3_subject',
                slide3_content    ='$slide3_content',
                footer            ='$footer'";
                

    $result = mysqli_query($conn,$sqlstr) or die ("Record not Updated: ".mysqli_error($conn));
    echo 1;	
	
?>
