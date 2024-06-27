<?php
 if(isset($_POST['register']))
 {
   //get data
   $fullName = $_POST['fullName'];
   $nationality = $_POST['nationality'];
   $num = $_POST['num'];
   $address = $_POST['address'];
   $email = $_POST['email'];
   $matricnumber = $_POST['matricnumber'];
   $username = $_POST['username'];
   $Faculty = $_POST['Faculty'];
   $course = $_POST['course'];
   $city = $_POST['city'];
   $password = $_POST['password'];


   if($fullName!='' && $nationality!='' && $num!='' && $address!='' && $email!='' && $matricnumber!='' && $username!='' && $password!='' && $Faculty!='' && $course!='' && $city!='' )
   {
     $sql = "INSERT INTO student_reg (fullName, nationality, num, address, email, matric_num, username, Faculty, course, city, password) VALUES('$fullName', '$nationality', '$num', '$address', '$email', '$matricnumber', '$username', '$Faculty',  '$course', '$city', '$password')";
     include_once('./assets/php/db.php');
     $result = mysqli_query($conn,$sql) or die("Error Encountered: ".mysqli_error($conn));
     if($result)
     {
         echo "<script>alert('$username successfully registered')</script>";
         header('location: pages-login.php');
     }
  }
     else
     {
         echo "input all fields";
     }
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">ESTAM FOUNDATION</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate  method="POST" name="register" action="">
                    <div class="col-12">
                      <label for="fullName" class="form-label">Your Full-name</label>
                      <input type="text" class="form-control" id="fullName" name="fullName" required>
                      <div class="invalid-feedback">Please, enter your full-name!</div>
                    </div>

                    <div class="col-12">
                      <label for="nationality" class="form-label">Nationality</label>
                      <input type="text" name="nationality" class="form-control" id="nationality" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="num" class="form-label">Phone Number</label>
                      <input type="number" name="num" class="form-control" id="num" required>
                      <div class="invalid-feedback">Please, enter your phone Number!</div>
                    </div>
                    <div class="col-12">
                      <label for="address" class="form-label">Address</label>
                      <input type="text" name="address" class="form-control" id="address" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="email" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="matricnumber" class="form-label">Matric Number</label>
                      <div class="input-group has-validation">
                        <input type="text" name="matricnumber" class="form-control" id="matricnumber" required>
                        <div class="invalid-feedback">Please enter your matric number.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating mb-3">
                        <select class="form-select" name="Faculty" aria-label="Faculty">
                          <option selected>Select your Faculty</option>
                          <option value="Science and Technology">Science and Technology</option>
                          <option value="Art">Art</option>
                          <option value="Social Sciences">Social Sciences</option>
                          <option value=" Pure and Applied Science"> Pure and Applied Science</option>
                          <option value="Management Science">Management Science</option>
                      
                        </select>
                        <label for="floatingSelect">Faculty</label>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-floating mb-3">
                        <select class="form-select" name="course" aria-label="Course">
                          <option selected>Select Course</option>
                          <option value="Criminology">Criminology</option>
                          <option value="Economics">Economics</option>
                          <option value="Political Science">Political Science</option>
                          <option value="Sociology">Sociology</option>
                          <option value="Public Administration">Public Administration</option>
                          <option value="IRD">International Relation and Diplomacy</option>
                          <option value="Computer Science">Computer Science</option>
                          <option value="Computer Science">Computer Science</option>
                          <option value="IMT">Information and mgt Technology</option>
                          <option value="Business Administration">Business Administration</option>
                          <option value="Human Resources mgt">Human Resources mgt</option>
                          <option value="Marketing/Insurance">Marketing/Insurance</option>
                          <option value="Accounting">Accounting</option>
                          <option value="Project Management">Project Management</option>
                          <option value="Microbiology">Microbiology</option>
                          <option value="Biochemistry">Biochemistry</option>
                          <option value="Geoscience and environment">Geoscience and environment</option>
                          <option value="Mass communication">Mass communication</option>
                          <option value="Linguistics">Linguistics</option>
                        </select>
                        <label for="floatingSelect">Course</label>
                      </div>
                    </div>



                    <div class="col-md-4">
                      <div class="col-md-12">
                        <div class="form-floating">
                          <input type="text" class="form-control" name="city" placeholder="City">
                          <label for="floatingCity">City</label>
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="register">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="pages-login.html">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

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