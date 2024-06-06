<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/adm/img/favicon.png" rel="icon">
  <link href="assets/adm/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="{{asset('assets/adm/vendor/aos/aos.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/adm/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/adm/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/adm/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/adm/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/adm/adm/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/adm/css/style.css')}}" rel="stylesheet">
  <!-- <link rel="{{asset('assets/adm/css/dataTables.css')}}" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
        canvas {
            width: 100%;
            height: auto;
        }
  </style>

</head>

<body>


  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>


  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile py-5">
        
        <h1 class="text-light">John Doe </a><span><a href="{{url('/logout')}}"><i class="bx bx-exit"></i></a></span></h1>
       
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
        <li><a href="{{url('/auth/dashboard')}}" class="nav-link scrollto"><i class="bx bx-color"></i> <span>Dashboard</span></a></li>
          <li><a href="{{url('/auth/home')}}" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="{{url('/auth/profile')}}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Profile</span></a></li>
          <li><a href="{{url('/auth/footer')}}" class="nav-link scrollto"><i class="bx bx-box"></i> <span>Footer</span></a></li>
          <li><a href="{{url('/auth/contact')}}" class="nav-link scrollto"><i class="bx bx-book"></i> <span>Contacts</span></a></li>
          <li><a href="{{url('/auth/user')}}" class="nav-link scrollto"><i class="bx bx-user-circle"></i> <span>User</span></a></li>
          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">


    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>John Doe</span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <script>
    @yield('script')
  </script>

</body>

</html>