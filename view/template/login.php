<!DOCTYPE html>
<?php 
	if(isset($_POST['login_button'])) {
		$user = $_POST['username'];
		$pass = $_POST['password'];

		if( $user && $pass ) {
			setcookie("authorization","ok" );
			header( "Location:index.php");
			exit();
		}
	}
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My PHP Tutorial</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./view/template/assets/img/favicon.png" rel="icon">
  <link href="./view/template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./view/template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./view/template/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="./view/template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./view/template/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="./view/template/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="./view/template/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="./view/template/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./view/template/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v3.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>Mamba</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="index.php?page=checkDBConnection">Connect to DB</a></li>
          <li><a href="index.php?page=addNewCustomerForm">Add new customer</a></li>
          <li><a href="index.php?page=getAllCustomers">Show all customers</a></li>
          <li class="drop-down"><a href="">Data Base Manipulations</a>
            <ul>
              <li><a href="">Add new customer</a></li>
              <li><a href="">Show all customers</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <h4>You have to be authorized to change info in database</h4>
			<form action='index.php' method='POST'>
				<input type='text' name='username' value='Enter name'> <br/>
				<input type='text' name='password' value='Enter password'> <br/>
				<input type='submit' name='login_button' value='login'>
			</form>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Mamba</h3>
            <p>
              A108 Adam Street <br>
              NY 535022, USA<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mamba</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="./view/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./view/template/assets/vendor/jquery/jquery.min.js"></script>
  <script src="./view/template/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="./view/template/assets/vendor/php-email-form/validate.js"></script>
  <script src="./view/template/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="./view/template/assets/vendor/venobox/venobox.min.js"></script>
  <script src="./view/template/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="./view/template/assets/vendor/counterup/counterup.min.js"></script>
  <script src="./view/template/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="./view/template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./view/template/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="./view/template/assets/js/main.js"></script>

</body>

</html>