<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SD Juara Jakarta Selatan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset ('frontend/assets/img/LogoSekolahJuara.png')}}" rel="icon">
  <link href="{{ asset('frontend/assets/img/LogoSekolahJuara.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset ('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset ('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset ('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset ('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset ('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.4.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
    <a href="index.html"><img src="{{ asset ('frontend/assets/img/FA Logo Sekolah Juara_SDJ Jaksel.jpg')}}" class="logo"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/index">Home</a></li>
          <li><a class="nav-link scrollto" href="/about">About</a></li>
          <li><a class="nav-link scrollto" href="/blog">Berita</a></li>
          <li><a class="nav-link scrollto" href="/prestasi">Prestasi</a></li>
          <li><a class="nav-link scrollto " href="/ppdb">PPDB</a></li>
          <li><a class="nav-link scrollto" href="">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

@yield('content')

  

  <!-- ======= Footer ======= -->
  <footer id="footer">

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
         Copyright <strong><span>&copy; Sekolah Juara</span></strong> 2021
      </div>
      <div class="credits footer-links">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
          </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a class="fixed-whatsapp" href="https://api.whatsapp.com/send?phone=6288296403827" rel="nofollow noopener" target="_blank" title="Whatsapp">
  <!-- Vendor JS Files -->
  <script src="{{ asset ('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset ('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset ('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset ('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset ('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset ('frontend/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{ asset ('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset ('frontend/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js')}}"></script>

 <!-- <script text="textt/javascript">
  $('#recipeCarousel').carousel({
  interval: 10000
})

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});

  </script>-->

</body>

</html>
