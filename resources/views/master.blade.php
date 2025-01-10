<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Disty Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <style>.card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .card:hover {
        transform: scale(1);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
    
    .card-img-top {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        max-height: 250px;
        object-fit: cover;
    }
    </style>
    
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('/assets/img/logo/loder1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    @if (!isset($hideHeader) || !$hideHeader)
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="/"><img src="{{ asset('/assets/img/logo/distylogo.png') }}" class="img-fluid" style="max-width: 180px;" alt="Logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="/courses">Courses</a></li>
                                                <li><a href="/about">About</a></li>
                                                <li><a href="/contact">Contact</a></li>
                                                <li><a href="/certificates">Certificate</a></li>
                                        
                                                @auth
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-bottom: 10px">
                                                        Welcome {{ Auth::user()->name }}
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item text-dark" href="/profile" style="padding: 20px">Profile</a></li>
                                                        {{-- <li><a class="dropdown-item text-dark" href="/pelatihan" style="padding: 15px">Pelatihan Saya</a></li> --}}
                                                        <li class="pb-3 pt-4">
                                                            <form action="{{ route('user.logout') }}" method="POST" class="d-inline-block">
                                                                @csrf
                                                                <button type="submit" class=" dropdown-item btn btn-link ">Logout</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                                @else
                                                <!-- Tampilkan tombol jika user belum login -->
                                                <li class="button-header margin-left"><a href="/register" class="btn">Join</a></li>
                                                <li class="button-header"><a href="/welcome" class="btn btn3">Login</a></li>
                                                @endauth
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12 text-center">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <!-- Header End -->
    </header>
    @endif

    @yield('konten')

    <footer>
        <div class="footer-wrapper footer-bg">
          <!-- Footer Content -->
          <div class="footer-area py-4">
            <div class="container">
              <div class="d-flex flex-column align-items-center text-center">
                <!-- Logo -->
                <div class="footer-logo mb-2">
                  <img src="{{ asset('/assets/img/logo/distylogo.png') }}" class="img-fluid" style="max-width: 180px;" alt="Logo">
                </div>
                <!-- Description -->
                <p class="text-light mb-2" style="font-size: 14px;">
                  The automated process starts as soon as your clothes go into the machine.
                </p>
                <!-- Social Media -->
                <div class="footer-social">
                  <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                  <a href="https://bit.ly/sai4ull" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="text-light"><i class="fab fa-pinterest-p"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Footer Bottom -->
          <div class="footer-bottom-area py-2">
            <div class="container">
              <div class="text-center">
                <p class="text-light mb-0" style="font-size: 12px;">
                  &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. Made by Kelompok 7.
                </p>
              </div>
            </div>
          </div>
        </div>
    </footer>

  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/animated.headline.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

<!-- Date Picker -->
<script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
<!-- Nice-select, sticky -->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<!-- Progress -->
<script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/hover-direction-snake.min.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('assets/js/contact.js') }}"></script>
<script src="{{ asset('assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/mail-script.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>