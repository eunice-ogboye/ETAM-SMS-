<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Course Registration </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->

			 <?php require("requried/header.php");?>
	

  <!-- ======= Sidebar ======= -->
  <?php require("requried/aside.php");?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Course Registration</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Register your courses</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="row">
      <div class="col-lg-4">
        
      <form method="POST" action="">
          <div class="form-group">
            <div class="col-sm-12">
              <div class="col-sm-8">
                <span class="text-light bg-danger" id="remarks"></span>
              </div>
              <div class="col-sm-12">
              <input type="hidden" class="form-control" id="matricnum" name="matricnum" value="">
              <br>
              </div>
          
                <div class="col-sm-12">
              <label>Course Title:</label>
              <input type="text" class="form-control" id="course_title" name="course_title" placeholder="Enter Course Title">
              <br>
                </div>
                <div class="col-sm-12">
              <label>Course Code:</label>
              <input type="text" class="form-control" id="course_code" name="course_code" placeholder="Enter Course Code">
              <br>
                </div>
                <div class="col-sm-12">
              <label>Course Unit:</label>
              <input type="text" class="form-control" id="course_unit" name="course_unit" placeholder="Enter Course Unit">
              <br>
                </div>
                

                <div class="col-sm-12">
                <button type="submit" class="btn btn-dark" name="cregister">Add / Update</button>
                  <button type="reset" class="btn btn-dark">Reset</button>
              <br>
                </div>
            </div>
          </div>											
        </form>
      </div>

      <div class="col-lg-8">
      <h4><i class="fa fa-edit"></i>Selected Courses</h4>

      <table class="table table-hover  table-bordered">
        <thead>
        <tr>
                  <th data-class="expand">#</th>
                  <th data-hide="phone,tablet">Course Title</th>
                  <th data-hide="phone,tablet">Course Code</th>
                  <th data-hide="phone,tablet">Course Unit</th>
                  <th>Action</th>
                </tr>
        </thead>
        <tbody>
        <?php
              while($row = mysqli_fetch_assoc($fresult))
              {
                ?>
                  <tr>
                 <td><?php echo $row['userid']; ?></td>
                 <td><?php echo $row['course_title']; ?></td>
                 <td><?php echo $row['course_code']; ?></td>
                 <td><?php echo $row['course_unit']; ?></td>
                 <td><a href="#" class="btn btn-primary">Edit</a>
                 <a href="#" class="btn btn-danger">Delete</a>
                </td>
                 </tr>
                <?php
              }
              ?>
          
        </tbody>
        
      </table>
      <br>
            <a href="./item_report.html" target="_blank" class="btn btn-danger">Print Course Form</a>
            <br>

       
      </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ESTAM</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>