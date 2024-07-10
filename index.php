<?php
// Langkah 1: Sertakan file koneksi.php untuk menghubungkan ke database
include 'koneksi.php';

// Langkah 2: Query SQL untuk mengambil data dari tabel obatan_daniel
$sql = "SELECT * FROM obatan_daniel";
$tampil = mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KLINIK DUZ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Senin - Sabtu, 8AM - 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> kontak kami +62 882 7948 2943
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="assets/img/usti.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Obat</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">beri masukan</span></a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>SELAMAT DATANG DI KLINIK DUZ<span></span></h2>
            <p>Beberapa orang merasa sakit karena sesuatu yang tidak jelas. Mengikuti dan mencari sesuatu yang tidak ada. Terkadang kita merasa terbebani oleh rasa sakit. Namun, ada juga kebahagiaan yang bisa kita rasakan. Semua ini adalah bagian dari pengalaman hidup</p>
          </div>
        </div>

        <!-- Slide 2 -->
        

        <!-- Slide 3 -->
        

      </div>

      
     
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">kesehatan jantung</a></h4>
              <p class="description">Kesehatan jantung sangat penting untuk menjaga kualitas hidup</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4 class="title"><a href="">Obat-obatan</a></h4>
              <p class="description">untuk mencegah, mendiagnosis, atau mengobati penyakit atau kondisi medis</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="">alat </a></h4>
              <p class="description">Semua peralatan ini berperan penting dalam perawatan pasien di rumah sakit</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4 class="title"><a href="">diagnosa dna</a></h4>
              <p class="description">DNA (Deoxyribonucleic Acid) adalah molekul yang menyimpan informasi genetik dalam semua makhluk hidup.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
    <div class="container" data-aos="fade-up">
    <div class="section-title">
        <h2>Obat</h2>
    </div>
    <div class="row">
      
        <?php while ($row = mysqli_fetch_array($tampil)) { ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="/PROJECTUAS/Medicio/assets/img/doctors/<?php echo $row['gambar_obat']; ?>" class="img-fluid" alt="Menu Image">
                    </div>
                    <div class="member-info">
                        <h4><?php echo $row['nama_obat']; ?></h4>
                        <span><?php echo $row['jenis_obat']; ?></span>
                        <span><?php echo $row['expired_obat']; ?></span>
                        
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>

    </section><!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    <!-- End Gallery Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questioins Section ======= -->
    <!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>masukan komentar</h2>
          <p>Terima kasih sudah membeli obat disini semoga anda lekas pulih kembali</p>
        </div>

        <form action="komen.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="nama_komen" class="form-control" id="nama_komen" placeholder="Your Name" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email_komen" id="email_komen" placeholder="Your Email" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone_komen" id="phone_komen" placeholder="Your Phone" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="date" name="janji_temu" class="form-control datepicker" id="janji_temu" placeholder="Appointment Date" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="dapartemen" id="dapartemen" class="form-select">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="dokter" id="dokter" class="form-select">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3"> 
            <textarea class="form-control" name="komen" id="komen" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="row">
        
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Submit</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>