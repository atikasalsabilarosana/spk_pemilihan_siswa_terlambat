<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Pendukung Keputusan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Remember - v4.7.0
  * Template URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html">Decision Support System </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <<nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="../index.php">Home</a></li>
        <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a href="praksi/dtalternatif.php">Data Alternatif</a></li>
              <li><a href="praksi/dtkriteria.php">Data Kriteria</a></li>
              <li><a href="praksi/dtbobot.php">Data Bobot</a></li>
              <li><a href="praksi/dtmatrix.php">Data Matrix</a></li>
              <li><a href="praksi/dtskala.php">Data Skala</a></li>
            </ul>
          <li class="dropdown"><a href="#"><span>Form</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
          <li><a href="praksi/formalternatif.php">Form Alternatif</a></li>
              <li><a href="praksi/formkriteria.php">Form Kriteria</a></li>
              <li><a href="praksi/formbobot.php">Form Bobot</a></li>
              <li><a href="praksi/formmatrix.php">Form Matrix</a></li>
              <li><a href="praksi/formskala.php">Form Skala</a></li>
            </ul>
            <li><a class="nav-link scrollto" href="praksi/result.php">Result</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="bootstrap/style.css">

    <title>RESULT</title>
  </head>
  <body>
    <div class="container">
    <h1 class="display-4" >Result</h1>
                <p class="lead" > </p>
                <hr class="my-4">
                <p> DNS PENERIMA BEASISWA</p>
                
    <a class="btn btn-primary btn-lg " href="result.php?metode=SAW" role="button">Metode SAW</a>
    <a class="btn btn-primary btn-lg " href="result.php?metode=WP" role="button">Metode WP</a>
    <a class="btn btn-primary btn-lg " href="result.php?view" role="button">VIEW</a>
    </div>

<div>
  <?php
  include 'koneksi.php';
  if (isset($_GET['metode'])){
    if($_GET['metode'] == 'WP'){
      include 'metodewp.php';
    }
    else if($_GET['metode'] == 'SAW'){
      include 'metodesaw.php';
  }
}
  else if (isset($_GET['view'])){
      include 'dtalternatif.php';
      include 'dtbobot.php';
      include 'dtkriteria.php';
      include 'dtskala.php';
      include 'dtmatrix.php';
    }
  
?>
</div>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>



