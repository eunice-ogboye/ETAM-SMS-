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
  <script src="assets/jquery/jquery.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<?php require("layout/header.php")?>
<?php require("layout/aside.php")?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Course Registration/Print</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Register your courses</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="row">
      <div class="col-lg-4">
        
      <form id="course_frm">
          <div class="form-group">
            <div class="col-sm-12">
              <div class="col-sm-8">
                <span class="text-light bg-danger" id="remarks"></span>
              </div>
              <div class="col-sm-12">
              <input type="hidden"  id="loginUserId" name="loginUserId">
              <input type="hidden"  id="logindeptx" name="logindeptx">
              <input type="hidden"  id="loginfacultyx" name="loginfacultyx">
              <input type="hidden"  id="loginlevel" name="loginlevel">
              <input type="hidden"  id="loginmatno" name="loginmatno">

              <br>
              </div>

                <div class="col-sm-12">
                <label>Select Semester:</label>
                <select class="form-control" id="semester_course" name="semester_course">
                <option value="">---Select Semester---</option>
                <option value="First Semester">First Semester</option>
                <option value="Second Semester">Second Semester</option>
              </select>
              <br>
                </div>

                <div class="col-sm-12">
                <label>Select Session:</label>
                <select class="form-control" id="session" name="session">
                <option value="">---Select Session---</option>
                <option value="2022/2023">2022/2023</option>
                <option value="2023/2024">2023/2024</option>
                <option value="2024/2025">2024/2025</option>
              </select>
              <br>
                </div>

                <div class="col-sm-12">
                <label>Select Level:</label>
                <select class="form-control" id="level" name="level">
                <option value="">---Select Level---</option>
                <option value="100 Level">100 Level</option>
                <option value="200 Level">200 Level</option>
                <option value="300 Level">300 Level</option>
                <option value="400 Level">400 Level</option>
              </select>
              <br>
                </div>
                             

                <div class="col-sm-12">
                <button type="button" class="btn btn-primary" onclick="show_coursez()">View Course Details</button>
                <button type="button" class="btn btn-success" onclick="register_course()">Register</button>
                <br><br>
                <a href="print-course1.php" target="_target" class="btn btn-dark text-light">Print Course Form</a>

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
                </tr>
        </thead>
        <tbody id="fetch_course">
        </tbody>
        
      </table>
      <br>
       
      </div>

  </main><!-- End #main -->

  <?php require("layout/footer.php")?>

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
  <script src="assets/jquery/jq.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>