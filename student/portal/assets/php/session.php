
<?php
  session_start();

  // Check if both session variables are set
//   if(!isset($_SESSION['username']) && !isset( $_SESSION['matricnumber']))
  
//   {
//     header("location: pages-login.php");
//   } else {
//       echo "<script>alert('Invalid username or password')</script>";
     
//   }
if(!isset($_SESSION['matricnumber'])) {
    header("location: pages-login.php");
  } 
?>
