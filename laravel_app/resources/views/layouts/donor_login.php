<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style type="text/css">

/*--------------------------------------------------------------
# Top Bar
--------------------------------------------------------------*/
#topbar {
  padding: 0;
  font-size: 15px;
  height: 50px;
  transition: all 0.5s;
  background: rgba(26, 24, 22, 0.8);
  z-index: 996;
  color: rgba(255, 255, 255, 0.7);
}

#topbar.topbar-transparent {
  background: transparent;
}

#topbar.topbar-scrolled {
  top: -50px;
}

#topbar i {
  color: #ffb03b;
  line-height: 0;
}

#topbar i span {
  color: #fff;
  font-style: normal;
  padding-left: 5px;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  top: 50px;
  height: 70px;
  z-index: 997;
  transition: all 0.5s;
  padding: 10px 0;
  background: rgba(26, 24, 22, 0.85);
}

#header.header-transparent {
  background: transparent;
}

#header.header-scrolled {
  top: 0;
  background: rgba(26, 24, 22, 0.85);
}

#header .logo h1 {
  font-size: 28px;
  margin: 0;
  line-height: 1;
  font-weight: 400;
  letter-spacing: 3px;
}

#header .logo h1 a {
  color: #fff;
  text-decoration: none;
}

#header .logo h1 a:hover {
  color: #ffb03b;
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}



/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
}

.section-bg {
  background-color: white;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  margin: 15px 0 0 0;
  font-size: 32px;
  font-weight: 700;
  color: #5f5950;
}

.section-title h2 span {
  color: #ffb03b;
}

.section-title p {
  margin: 15px auto 0 auto;
  font-weight: 300;
}

@media (min-width: 1024px) {
  .section-title p {
    width: 50%;
  }
}

.btn-donate{
  border-radius:20px;
  background: #ffb03b;
  color:white;
}

.btn-donate:hover{
  transition: all ease-in-out 0.15s;
 
}

.link:hover{
    color:#ffb03b;
}

/* my form */
.h-100{
  position: relative;
  top:50px; 
}
  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+234 810 946 3618</span></i>
    </div>
  </section>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  
        <div class="logo me-auto">
          <h1><a href="index.html">HANDS OF HOPE</a></h1>
          
        </div>
  
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
           
          
            
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
        <a href="donation.html" class="book-a-table-btn scrollto">Donate</a>
        <a href="register.html" class="book-a-table-btn scrollto">Register</a>
  
      </div>
    </header><!-- End Header -->


  <!-- Donate Start -->
  <div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-inline-block rounded-pill bg-secondary text-light py-1 px-3 mb-3">Login Here</div>
                <h1 class="display-6 mb-5">Changing The Lives Of The Orphan Child One Penny At a Time.</h1>
                <p class="mb-0">and thousands of orphans in need accross
                  the country, thereby ensuring quality of life
                  for the average orphan child.</p>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="h-100 bg-secondary p-2 py-3 my-5 px-3" >
                <h1 class="text-center text-white">Login</h1>
                 <!-- checking if there is  an error in session and then dsiplaying it and then removing it from session after displaying it -->
                 <?php
              if(isset($_SESSION["login_error"])){

            ?>

              <p class="text-danger text-center bg-white mt-5 py-2"><?php echo $_SESSION["login_error"];?></p>

                <?php unset($_SESSION["login_error"]); ?>
            <?php
              }
            
            ?>


                    <form action="process/donorlogin_process.php" method="post">
                        <div class="row g-3">
                            <div class="col-12">

                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" name="email" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                           
                          <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control bg-light border-0" name="password" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                            
                            <div class="col-12">
                                <button type="submit" name="login_btn" class="btn-donate px-5" style="height: 50px;">
                                    Login
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </button>
                                <p class="mt-3 text-light">Dont have an account? <a href="donor_reg.php" class="btn btn-default"> Register Here</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donate End -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>HANDS OF HOPE</h3>
      <p>Changing the lives of the Orphan child one penny at a time.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>HANDS OF HOPE</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="https://bootstrapmade.com/">Manuel</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>