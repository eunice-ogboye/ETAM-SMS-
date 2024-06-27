<?php
 if(isset($_POST['message']))
 {
   //get data
   $stdname = $_POST['stdname'];
   $email = $_POST['email'];
   $matricnum = $_POST['matricnum'];
   $message = $_POST['message'];
   


   $sql = "INSERT INTO contact (stdname, email, matricnum, messages) VALUES('$stdname', '$email', '$matricnum', '$message')";
     include_once('./assets/php/db.php');
     $result = mysqli_query($conn,$sql) or die("Error Encountered: ".mysqli_error($conn));
     if($result)
     {
         echo "<script>alert('Message recieved successfully')</script>";
     } else
     {
         echo "<script>alert('not successfully registered')</script>";
     }
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <script src="assets/jquery/jquery.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<?php require("layout/header.php")?>
<?php require("layout/aside.php")?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Contact Us</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
      <div class="card-body">
        <h5 class="card-title"></h5>

        <!-- Floating Labels Form -->
        <form class="row g-pages-contact.html" method="POST" action="">
          <div class="col-md-12">
            <div class="form-floating">
              <input type="text" class="form-control" name="stdname" id="floatingName" placeholder="Your Name" required
              >
              <label for="floatingName">Your Name</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating">
              <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="Your Email" required>
              <label for="floatingEmail">Your Email</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating">
              <input type="yext" class="form-control" id="matricnumber" name="matricnum" placeholder="matric Number">
              <label>matric Number</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-floating">
              <textarea class="form-control" placeholder="Drop your message here" name="message" style="height: 100px;" required></textarea>
              <label>Message</label>
            </div>
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary" name="message">Submit</button>
          </div>
        </form><!-- End floating Labels Form -->

      </div>
    </div>

  </main><!-- End #main -->

  <?php require("layout/footer.php")?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/jquery/jq.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>+