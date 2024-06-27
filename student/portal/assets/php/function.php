<?php
require('db.php');

function display_data(){
    global $conn;
    $qry = "SELECT * FROM course_reg";
    $result = mysqli_query($conn, $qry);
    return $result
}
?>