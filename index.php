<?php
if (isset($_GET['logout']) && $_GET['logout'] == 'success') {
    // echo "<p>Anda telah logout</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
    
    <?php include('head.php'); ?>
<body class="index-page">
    <?php include('header.php'); ?>
<main class="main">
    
    <?php include('content.php'); ?>
    <?php include('table.php'); ?>
</main>
    <?php include('footer.php'); ?>
   
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>  
</body>
</html>