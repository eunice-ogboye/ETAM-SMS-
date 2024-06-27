<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manage Courses</title>
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

<?php require("requried/header.php");?>

  <!-- ======= Sidebar ======= -->
  <?php require("requried/aside.php");?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Course Forms</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Manage Courses Forms</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="row">
      <div class="col-lg-4">
        
      <form id="frm">
          <div class="form-group">
            <div class="col-sm-12">
              <div class="col-sm-8">
                <span class="text-light bg-danger" id="remarks"></span>
              </div>          
                <div class="col-sm-12">
              <label>Select Faculty:</label>
              <input type="hidden" name="Id" id="Id">
              <select class="form-control" id="facultys" name="facultys">
                <span ></span>
              </select>
              <br>
                </div>

                <div class="col-sm-12">
              <label>Department:</label>
              <select class="form-control" id="depts" name="depts">
              </select>
              <br>
              <label>Enter Course Title</label>
              <input type="text" class="form-control" id="title" name="title">
              <br>
              <label>Enter Course Code</label>
              <input type="text" class="form-control" id="code" name="code">
              <br>
              <label>Course Unit</label>
              <select class="form-control" id="unit" name="unit">
                <option value="">---Select Unit---</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>

              </select>
              <br>
              <label>Level:</label>
              <select class="form-control" id="level" name="level">
                <option value="">---Select Level---</option>
                <option value="100 Level">100 Level</option>
                <option value="200 Level">200 Level</option>
                <option value="300 Level">300 Level</option>
                <option value="400 Level">400 Level</option>
              </select>
              <br>
              <label>Select Semester:</label>
              <select class="form-control" id="semester" name="semester">
                <option value="">---Select Semester---</option>
                <option value="First Semester">First Semester</option>
                <option value="Second Semester">Second Semester</option>

              </select>
              <br>
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
                <button type="button" class="btn btn-success" onclick='add_update_courses()'>Add / Update</button>
                  <button type="reset" class="btn btn-dark">Reset</button>
              <br>
                </div>
            </div>
          </div>											
        </form>
      </div>

      <div class="col-lg-8">
      <h4><i class="fa fa-edit"></i>Avaliable Course Form</h4>

    <table class="table table-hover  table-bordered">
        <thead>
            <tr>
                <th data-class="expand">#</th>
                <!-- <th data-hide="phone,tablet">Faculty</th>
                <th data-hide="phone,tablet">Department</th> -->
                <th data-hide="phone,tablet">Title</th>
                <th data-hide="phone,tablet">Semester</th>
                <th data-hide="phone,tablet">Level</th>
                <th data-hide="phone,tablet">Code</th>
               
                <th data-hide="phone,tablet">Unit</th>
                <th data-hide="phone,tablet">Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="courses_rec"></tbody>
    </table>
           
      </div>

  </main><!-- End #main -->

  <?php require("requried/footer.php")?>

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
  <script src="assets/jquery/jq.js"></script>


</body>

</html>