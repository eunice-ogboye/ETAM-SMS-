<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Print Course Form </title>
  <meta content="" name="description">
  <meta content="" name="keywords">



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
 <center>
  <br>
  <img src="assets/img/logo.png" width="500px" height="500px" style="position: fixed;
  bottom: 300px;

    left: 100px;

    z-index: 10000;
    transform:rotate(-10deg);

    opacity: 0.1;">
<img src="assets/img/logo.png" width="50px" height="50px">
 <h4> ESTAM FOUNDATION UNIVERSITY</h4>
  <h6 class='text-success'>COURSE REGISTRATION RECORDS OF <span id="loginmatnop"></span> FOR <span id="sessionz"></span> <span id="semesterz"> </span> </h6>

 </center>
    <div class="pagetitle">
      <h6><b>Matric Number:</b> <span id="printmatno"></span></h6>
      <h6><b>Student's Name:</b> <span id="printfname"></span></h6>
      <h6><b>Faculty:</b> <span id="printfaculty"></span></h6>
      <h6><b>Department:</b> <span id="printdept"></span></h6>
      <h6><b>Level:</b> <span id="printlevel"></span></h6>

     
    </div><!-- End Page Title -->
    <div class="row">
      <div class="col-12">
      <table class="table table-hover  table-bordered">
        <thead>
        <tr>
                  <th data-class="expand">#</th>
                  <th data-hide="phone,tablet">Course Title</th>
                  <th data-hide="phone,tablet">Course Code</th>
                  <th data-hide="phone,tablet">Course Unit</th>
                </tr>
        </thead>
        <tbody id="print_form">
        </tbody>
      </table>
      <center>
      <h6>----------------------------------------------------------------------------</h6>
      <br>
      <h6>----------------------------------------------</h6>
      <p>STUDENT'S SIGNATURE</p>
      <h6>----------------------------------------------</h6>
      <p>HOD LEVEL ADVISER'S NAME/SIGNATURE</p>
      </center>
      <br>
      

      </div>
  </main><!-- End #main -->
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
  <script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>