<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <title>Donation Hub</title>
    <!-- Favicons -->
  <link href="css/img/favicon.png" rel="icon">
  <link href="css/img/apple-touch-icon.png" rel="apple-touch-icon">
     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <!-- css files -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="css/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="css/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="css/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- ======= Top Bar ======= -->
   
    <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
        <i class="bi bi-phone d-flex align-items-center"><span>+234 708 547 0909</span></i>
      </div>
    </section>
  
       <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  
        <div class="logo me-auto">
          <h1><a href="index.html">HANDS OF HOPE</a></h1>
         
        </div>
  
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto" href="/">Home</a></li>
            <li><a class="nav-link scrollto" href="/">About</a></li>
            <li><a class="nav-link scrollto" href="/">Contact</a></li>
            @auth
            <li>
              <form method="POST" action = "/Logout"> 
                  @csrf

                  <button type="submit"></button>
              </form>
            </li>
            @endauth
            
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
         
        </nav><!-- .navbar -->
  
        <a href="/log" class="book-a-table-btn scrollto">Login</a>
        <a href="/register" class="book-a-table-btn scrollto">Register</a>
  
      </div>
    </header><!-- End Header -->