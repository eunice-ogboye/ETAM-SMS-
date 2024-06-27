<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>School Calender</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ESTAM - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php require("layout/header.php")?>

  <!-- ======= Sidebar ======= -->
  <?php require("layout/aside.php")?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Lecture Time-Table</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">School Info</li>
          <li class="breadcrumb-item active">Time-table</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">First Semester</h5>

              <!-- Default Table -->
              <h4 class="text-center">BUS.ADMIN/ACCOUNTING/ECONOMICS/HRM</h4>
              <h4 class="text-center">100 level</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                            <th scope="col">LECTURER</th>
                            <th>DAY</th>
                            <th>TIME</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Wednesday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>2</td>
                            <td>Mr Joshua</td>
                            <td>Tuesday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Introduction To Sociology</td>
                            <td>CSS 121</td>
                            <td>2</td>
                            <td>Mr Bello</td>
                            <td>Thursday</td>
                            <td>3pm – 5pm</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                            <td>Mrs Archibong</td>
                            <td>Monday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                            <td>Mr Apata</td>
                            <td>Wednesday</td>
                            <td>10am –12pm</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Element Of Management</td>
                            <td>BUS 105</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Monday</td>
                            <td>10am –12pm</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Introduction To Human Resource Management</td>
                            <td>HRM 102</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Thursday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>Business Mathematics</td>
                            <td>MTH 104</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Principles Of Economics</td>
                            <td>ECO 121</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Tuesday</td>
                            <td>3pm – 5pm</td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>Principles Of Accounting</td>
                            <td>ACC 101</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                        </tbody>
                      </table>

                      <h4 class="text-center">INTER REL/POL SCIENCE/PUB ADMIN</h4>
              <h4 class="text-center">100 level</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                            <th>LECTURER</th>
                            <th>DAY</th>
                            <th>TIME</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Thursday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Introduction To Sociology</td>
                            <td>CSS 121</td>
                            <td>2</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Thursday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Element Of Management</td>
                            <td>BUS 105</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Thursday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Principles Of Economics</td>
                            <td>ECO 121</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>Introduction To International Studies</td>
                            <td>INR 111</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Thursday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Introduction To Political Science</td>
                            <td>POL 112</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                        </tbody>
                      </table>

                      <h4 class="text-center">MICROBIOLOGY/BIOCHEMISTRTY</h4>
              <h4 class="text-center">100 level</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                            <th>LECTURER</th>
                            <th>DAY</th>
                            <th>TIME</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                            <td>Mrs Archibong</td>
                            <td>Monday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Lower Invertebrate</td>
                            <td>ZOO 101</td>
                            <td>3</td>
                            <td>Mrs Archibong</td>
                            <td>Monday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                            <td>Mrs Archibong</td>
                            <td>Monday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Seedless Plant</td>
                            <td>BIO 104</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>General Biology</td>
                            <td>BIO 112</td>
                            <td>3</td>
                            <td>Mrs Archibong</td>
                            <td>Monday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>General chemistry I</td>
                            <td>CHM 1O1</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Cell Biology And Histology</td>
                            <td>BIO 112</td>
                            <td>3</td>
                            <td>Mrs Archibong</td>
                            <td>Monday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>Biological Techniques</td>
                            <td>BIO 122</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          </tr>
                        </tbody>
                      </table>

                      <h4 class="text-center">COMPUTER SCIENCE / INFORMATION TECHNOLOGY</h4>
              <h4 class="text-center">100 level</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                            <th>LECTURER</th>
                            <th>DAY</th>
                            <th>TIME</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Basic Electronics</td>
                            <td>CNG 104</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Introduction To Basic Programming</td>
                            <td>CSC 112</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Vector Geometry</td>
                            <td>MTH 115</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>General Physics</td>
                            <td>PHY 111</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>General Chemistry</td>
                            <td>CHM 101</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>Computer Practical</td>
                            <td>PRT 101</td>
                            <td>3</td>
                          </tr>
                        </tbody>
                      </table>

                      <h4 class="text-center">COMPUTER /ELECTRICAL ENGINEERING</h4>
              <h4 class="text-center">100 level</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                            <th>LECTURER</th>
                            <th>DAY</th>
                            <th>TIME</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>2</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Introduction To Physics</td>
                            <td>PHY 111</td>
                            <td>3</td>
                            <td>Mr Apata</td>
                            <td>Wednesday</td>
                            <td>10am –12pm</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                            <td>Mr Apata</td>
                            <td>Wednesday</td>
                            <td>10am –12pm</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Algebra And Coordinate Geometry</td>
                            <td>MTH 113</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Basic Electronics</td>
                            <td>CNG 104</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>GIntroduction To Electrical Engineering</td>
                            <td>CNG 112</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Electricity And Magnetism</td>
                            <td>CNG 105</td>
                            <td>3</td>
                            <td>Mr Apata</td>
                            <td>Wednesday</td>
                            <td>10am –12pm</td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>Introduction To Computer Engineering</td>
                            <td>CNG 117</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">11</th>
                            <td>Introduction To Basic Programming</td>
                            <td>CSC 112</td>
                            <td>3</td>
                            <td>Mr Apata</td>
                            <td>Wednesday</td>
                            <td>10am –12pm</td>
                          </tr>
                          <tr>
                            <th scope="row">12</th>
                            <td>Computer Practical</td>
                            <td>PRT 101</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                        </tbody>
                      </table>

                      <h4 class="text-center">MASS COMMUNICATION</h4>
              <h4 class="text-center">100 level</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Introduction To Sociology</td>
                            <td>CSS 121</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Introduction To Mass Communication</td>
                            <td>MCM 102</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>African Communication System</td>
                            <td>MCM 112</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>History Of Mass Media</td>
                            <td>MCM 122</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Fundamental Of Speech Communication</td>
                            <td>MCM 121</td>
                            <td>3</td>
                          </tr>
                        </tbody>
                      </table>

                      <h4 class="text-center">ESTATE MANAGEMENT</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Introduction To Sociology</td>
                            <td>CSS 121</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>General Physics</td>
                            <td>PHY 111</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Principles Of Economics</td>
                            <td>ECO 121</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>Introduction To Estate Management 1</td>
                            <td>ESM 101</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Nature of environmental science</td>
                            <td>ESM 103</td>
                            <td>3</td>
                          </tr>
                        </tbody>
                      </table>
              <!-- End Default Table Example -->
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Second Semester</h5>

              <!-- Default Table -->
              <h4 class="text-center">BUS.ADMIN/ACCOUNTING/ECONOMICS/HRM</h4>
              <h4 class="text-center">100 level</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                            <th scope="col">LECTURER</th>
                            <th>DAY</th>
                            <th>TIME</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Wednesday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>2</td>
                            <td>Mr Joshua</td>
                            <td>Tuesday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Introduction To Sociology</td>
                            <td>CSS 121</td>
                            <td>2</td>
                            <td>Mr Bello</td>
                            <td>Thursday</td>
                            <td>3pm – 5pm</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                            <td>Mrs Archibong</td>
                            <td>Monday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                            <td>Mr Apata</td>
                            <td>Wednesday</td>
                            <td>10am –12pm</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Element Of Management</td>
                            <td>BUS 105</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Monday</td>
                            <td>10am –12pm</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Introduction To Human Resource Management</td>
                            <td>HRM 102</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Thursday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>Business Mathematics</td>
                            <td>MTH 104</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Principles Of Economics</td>
                            <td>ECO 121</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Tuesday</td>
                            <td>3pm – 5pm</td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>Principles Of Accounting</td>
                            <td>ACC 101</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                        </tbody>
                      </table>

                      <h4 class="text-center">INTER REL/POL SCIENCE/PUB ADMIN</h4>
              <h4 class="text-center">100 level</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                            <th>LECTURER</th>
                            <th>DAY</th>
                            <th>TIME</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Thursday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Introduction To Sociology</td>
                            <td>CSS 121</td>
                            <td>2</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Thursday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Element Of Management</td>
                            <td>BUS 105</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Thursday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Principles Of Economics</td>
                            <td>ECO 121</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>Introduction To International Studies</td>
                            <td>INR 111</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Thursday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Introduction To Political Science</td>
                            <td>POL 112</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                        </tbody>
                      </table>

                      <h4 class="text-center">MICROBIOLOGY/BIOCHEMISTRTY</h4>
              <h4 class="text-center">100 level</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                            <th>LECTURER</th>
                            <th>DAY</th>
                            <th>TIME</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                            <td>Mrs Archibong</td>
                            <td>Monday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Lower Invertebrate</td>
                            <td>ZOO 101</td>
                            <td>3</td>
                            <td>Mrs Archibong</td>
                            <td>Monday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                            <td>Mrs Archibong</td>
                            <td>Monday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Seedless Plant</td>
                            <td>BIO 104</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>General Biology</td>
                            <td>BIO 112</td>
                            <td>3</td>
                            <td>Mrs Archibong</td>
                            <td>Monday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>General chemistry I</td>
                            <td>CHM 1O1</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Cell Biology And Histology</td>
                            <td>BIO 112</td>
                            <td>3</td>
                            <td>Mrs Archibong</td>
                            <td>Monday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>Biological Techniques</td>
                            <td>BIO 122</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          </tr>
                        </tbody>
                      </table>

                      <h4 class="text-center">COMPUTER SCIENCE / INFORMATION TECHNOLOGY</h4>
              <h4 class="text-center">100 level</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                            <th>LECTURER</th>
                            <th>DAY</th>
                            <th>TIME</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Basic Electronics</td>
                            <td>CNG 104</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Introduction To Basic Programming</td>
                            <td>CSC 112</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Vector Geometry</td>
                            <td>MTH 115</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>General Physics</td>
                            <td>PHY 111</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>General Chemistry</td>
                            <td>CHM 101</td>
                            <td>3</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>Computer Practical</td>
                            <td>PRT 101</td>
                            <td>3</td>
                          </tr>
                        </tbody>
                      </table>

                      <h4 class="text-center">COMPUTER /ELECTRICAL ENGINEERING</h4>
              <h4 class="text-center">100 level</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                            <th>LECTURER</th>
                            <th>DAY</th>
                            <th>TIME</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                            <td>Mr Roje</td>
                            <td>Friday</td>
                            <td>8am – 10am</td>
                          </tr>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>2</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Introduction To Physics</td>
                            <td>PHY 111</td>
                            <td>3</td>
                            <td>Mr Apata</td>
                            <td>Wednesday</td>
                            <td>10am –12pm</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                            <td>Mr Apata</td>
                            <td>Wednesday</td>
                            <td>10am –12pm</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Algebra And Coordinate Geometry</td>
                            <td>MTH 113</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Basic Electronics</td>
                            <td>CNG 104</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>GIntroduction To Electrical Engineering</td>
                            <td>CNG 112</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Electricity And Magnetism</td>
                            <td>CNG 105</td>
                            <td>3</td>
                            <td>Mr Apata</td>
                            <td>Wednesday</td>
                            <td>10am –12pm</td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>Introduction To Computer Engineering</td>
                            <td>CNG 117</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                          <tr>
                            <th scope="row">11</th>
                            <td>Introduction To Basic Programming</td>
                            <td>CSC 112</td>
                            <td>3</td>
                            <td>Mr Apata</td>
                            <td>Wednesday</td>
                            <td>10am –12pm</td>
                          </tr>
                          <tr>
                            <th scope="row">12</th>
                            <td>Computer Practical</td>
                            <td>PRT 101</td>
                            <td>3</td>
                            <td>Mr Bello</td>
                            <td>Wednesday</td>
                            <td>1pm – 3pm</td>
                          </tr>
                        </tbody>
                      </table>

                      <h4 class="text-center">MASS COMMUNICATION</h4>
              <h4 class="text-center">100 level</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Introduction To Sociology</td>
                            <td>CSS 121</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Introduction To Mass Communication</td>
                            <td>MCM 102</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>African Communication System</td>
                            <td>MCM 112</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>History Of Mass Media</td>
                            <td>MCM 122</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Fundamental Of Speech Communication</td>
                            <td>MCM 121</td>
                            <td>3</td>
                          </tr>
                        </tbody>
                      </table>

                      <h4 class="text-center">ESTATE MANAGEMENT</h4>
                      <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">COURSE TITLE</th>
                            <th scope="col">COURSE CODE</th>
                            <th scope="col">UNIT</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Basic French</td>
                            <td>FRN 101</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Introduction To Computer</td>
                            <td>CSC 101</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Introduction To Sociology</td>
                            <td>CSS 121</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Use Of English</td>
                            <td>GNS 101</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Benin People And Culture</td>
                            <td>GNS 111</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>General Physics</td>
                            <td>PHY 111</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Principles Of Economics</td>
                            <td>ECO 121</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>Introduction To Estate Management 1</td>
                            <td>ESM 101</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Nature of environmental science</td>
                            <td>ESM 103</td>
                            <td>3</td>
                          </tr>
                        </tbody>
                      </table>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ESTAM</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>