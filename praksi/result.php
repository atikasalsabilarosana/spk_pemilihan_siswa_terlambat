<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Result</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

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
        <h1 class="text-light"><a href="index.html">Decision Support System</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="../index.php">Home</a></li>
        <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="dtalternatif.php">Data Alternatif</a></li>
              <li><a href="dtkriteria.php">Data Kriteria</a></li>
              <li><a href="dtbobot.php">Data Bobot</a></li>
              <li><a href="dtmatrix.php">Data Matrix</a></li>
              <li><a href="dtskala.php">Data Skala</a></li>
            </ul>
          <li class="dropdown"><a href="#"><span>Form</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="formalternatif.php">Form Alternatif</a></li>
              <li><a href="formkriteria.php">Form Kriteria</a></li>
              <li><a href="formbobot.php">Form Bobot</a></li>
              <li><a href="formmatrix.php">Form Matrix</a></li>
              <li><a href="formskala.php">Form Skala</a></li>
            </ul>
            <li><a class="nav-link scrollto active" href="result.php">Result</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<div class="container">
    <h1 class="display-4 text-center" >RESULT</h1>
                <p class="lead" > </p>
                <hr class="my-4">
                <p> DNS Penilaian Siswa Telat</p>
                
    <a class="btn btn-primary btn-lg " href="result.php?metode=SAW" role="button">Metode SAW</a>
    <a class="btn btn-primary btn-lg " href="result.php?metode=WP" role="button">Metode WP</a>
    <a class="btn btn-primary btn-lg " href="result.php?metode=Topsis" role="button">Metode Topsis</a>
    <a class="btn btn-primary btn-lg " href="result.php?metode=Multimoora" role="button">Metode Multimoora</a>
    </div>
  <div class="container p-5">
  <?php
  include 'koneksi.php';
  if (isset($_GET['metode'])){
    if($_GET['metode'] == 'WP'){
      include 'metodewp.php';
    }
    else if($_GET['metode'] == 'SAW'){
      include 'metodesaw.php';
    }
    else if($_GET['metode'] == 'Topsis'){
      include 'metodetopsis.php';
    }
    else if($_GET['metode'] == 'Multimoora'){
      include 'metodemultimoora.php';
}
  
}
  
?>
</div>

    <!-- ======= About Section ======= -->
    

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        
      </div>
      
    </div>
  </footer><!-- End Footer -->

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

</body>

</html>