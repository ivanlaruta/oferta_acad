<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Certificaciones.</title>

  <link href="assets/img/favicon.png" rel="icon">

  <link href="{{asset('templates/Portfolio/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('templates/Portfolio/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('templates/Portfolio/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('templates/Portfolio/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('templates/Portfolio/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('templates/Portfolio/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('templates/Portfolio/assets/css/style.css')}}" rel="stylesheet">

</head>
<body>

  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>


  
    @yield('content')
    

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('templates/Portfolio/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('templates/Portfolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('templates/Portfolio/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('templates/Portfolio/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('templates/Portfolio/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('templates/Portfolio/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('templates/Portfolio/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('templates/Portfolio/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('templates/Portfolio/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('templates/Portfolio/assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('templates/Portfolio/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('templates/Portfolio/assets/js/main.js')}}"></script>

   @yield('js')
</body>

</html>