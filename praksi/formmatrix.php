<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form Matrix</title>
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
            <li><a class="nav-link scrollto" href="result.php">Result</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


    <div class="container p-5">
        <form  action="insertmatrix.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Matrix</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_matrix">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ID Alternatif</label>
                <td>
                    <select name="id_alternatif">
                        <?php
                        include "koneksi.php";
                        $a = "select * from alternatif";
                        $b = $conn->query($a);
                        while($c=$b->fetch_array()){
                            ?>
                            <option value="<?php echo $c['id_alternatif'];?>"><?php echo $c['nm_alternatif'];?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ID Bobot</label>
                <td>
                    <select name="id_bobot">
                        <?php
                        include "koneksi.php";
                        $a = "select * from bobot";
                        $b = $conn->query($a);
                        while($c=$b->fetch_array()){
                            ?>
                            <option value="<?php echo $c['id_bobot'];?>"><?php echo $c['value'];?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ID Skala</label>
                <td>
                    <select name="id_skala">
                        <?php
                        include "koneksi.php";
                        $a = "select * from skala";
                        $b = $conn->query($a);
                        while($c=$b->fetch_array()){
                            ?>
                            <option value="<?php echo $c['id_skala'];?>"><?php echo $c['keterangan'];?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Value</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="value">
            </div>
            <div class="float-end">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
            <br>
        </form>
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