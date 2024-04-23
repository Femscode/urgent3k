<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<!-- Mirrored from silicon.createx.studio/account-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 15:00:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <title>SECUREWAYBILL | HOME</title>

  <!-- SEO Meta Tags -->
  <meta name="description" content="SWB - Multipurpose Technology Bootstrap Template">
  <meta name="keywords"
    content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative">
  <meta name="author" content="Createx Studio">

  <!-- Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Theme switcher (color modes) -->
  <script src="assets/js/theme-switcher.js"></script>

  <!-- Favicon and Touch Icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/favicon/site.webmanifest">
  <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#6366f1">
  <link rel="shortcut icon" href="assets/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#080032">
  <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- Vendor Styles -->
  <link rel="stylesheet" media="screen" href="assets/vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" media="screen" href="assets/vendor/lightgallery/css/lightgallery-bundle.min.css">

  <!-- Main Theme Styles + Bootstrap -->
  <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">

  <!-- Page loading styles -->
  <style>
    .page-loading {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      -webkit-transition: all .4s .2s ease-in-out;
      transition: all .4s .2s ease-in-out;
      background-color: #fff;
      opacity: 0;
      visibility: hidden;
      z-index: 9999;
    }

    [data-bs-theme="dark"] .page-loading {
      background-color: #0b0f19;
    }

    .page-loading.active {
      opacity: 1;
      visibility: visible;
    }

    .page-loading-inner {
      position: absolute;
      top: 50%;
      left: 0;
      width: 100%;
      text-align: center;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      -webkit-transition: opacity .2s ease-in-out;
      transition: opacity .2s ease-in-out;
      opacity: 0;
    }

    .page-loading.active>.page-loading-inner {
      opacity: 1;
    }

    .page-loading-inner>span {
      display: block;
      font-size: 1rem;
      font-weight: normal;
      color: #9397ad;
    }

    [data-bs-theme="dark"] .page-loading-inner>span {
      color: #fff;
      opacity: .6;
    }

    .page-spinner {
      display: inline-block;
      width: 2.75rem;
      height: 2.75rem;
      margin-bottom: .75rem;
      vertical-align: text-bottom;
      border: .15em solid #b4b7c9;
      border-right-color: transparent;
      border-radius: 50%;
      -webkit-animation: spinner .75s linear infinite;
      animation: spinner .75s linear infinite;
    }

    [data-bs-theme="dark"] .page-spinner {
      border-color: rgba(255, 255, 255, .4);
      border-right-color: transparent;
    }

    @-webkit-keyframes spinner {
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes spinner {
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
  </style>

  <!-- Page loading scripts -->
  <script>
    (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1000);
        };
      })();
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
  </script>
</head>


<!-- Body -->

<body>

  <!-- Google Tag Manager (noscript)-->
  <noscript>
    <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
      style="display: none; visibility: hidden;" title="Google Tag Manager"></iframe>
  </noscript>

  <!-- Page loading spinner -->
  <div class="page-loading active">
    <div class="page-loading-inner">
      <div class="page-spinner"></div><span>Loading...</span>
    </div>
  </div>


  <!-- Page wrapper for sticky footer -->
  <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
  <main class="page-wrapper">


    <!-- Navbar -->
    <!-- Remove "fixed-top" class to make navigation bar scrollable with the page -->
    <header class="header navbar navbar-expand-lg position-absolute navbar-sticky">
      <div class="container px-3">
        <a href="index.html" class="navbar-brand pe-3">
          <img src="assets/img/logo.svg" width="47" alt="SWB">
          SWB
        </a>
        <div id="navbarNav" class="offcanvas offcanvas-end">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Legal Terms</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Terms & Conditions</a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                <ul class="dropdown-menu">
                  <li><a href="/register" class="dropdown-item">Create Account</a></li>
                  <li><a href="/login" class="dropdown-item">Sign In</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="offcanvas-header border-top">
            <a href="/login" class="btn btn-primary w-100" target="_blank" rel="noopener">
              <i class="bx bx-user fs-4 lh-1 me-1"></i>
              &nbsp;Login
            </a>
          </div>
        </div>
        <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
          <input type="checkbox" class="form-check-input" id="theme-mode">
          <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
          <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="/login" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank"
          rel="noopener">
          <i class="bx bx-user fs-5 lh-1 me-1"></i>
          &nbsp;Login
        </a>
      </div>
    </header>


    <!-- Page content -->
    <section class="position-relative h-100 pt-5 pb-4">

      <!-- Sign up form -->
      <div class="container d-flex flex-wrap justify-content-center justify-content-xl-start h-100 pt-5">
        <div class="w-100 align-self-end pt-1 pt-md-4 pb-4" style="max-width: 526px;">
          <h1 class="text-center text-xl-start">Welcome back!</h1>
         
          <p class="text-center text-xl-start pb-3 mb-3">Sign in to your account. <br>Don't have an account yet? <a href="/register">Sign Up
              here.</a></p>
          <form class="needs-validation" novalidate method="post" action='{{ route("login") }}'>@csrf
            <div class="row">
              @if($errors->any())
              <div class="alert alert-danger">
                <p><strong>Opps Something went wrong</strong></p>
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
             
              <div class="col-sm-6">
                <div class="position-relative mb-4">
                  <label for="email" class="form-label fs-base">Email</label>
                  <input type="email" name='email' id="email" class="form-control form-control-lg" required>
                  <div class="invalid-feedback position-absolute start-0 top-100">Please enter a valid email address!
                  </div>
                </div>
              </div>
              <div class="col-sm-6 mb-6">
                <label for="password" class="form-label fs-base">Password</label>
                <div class="password-toggle">
                  <input type="password" name='password' id="password" class="form-control form-control-lg" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox">
                    <span class="password-toggle-indicator"></span>
                  </label>
                  <div class="invalid-feedback position-absolute start-0 top-100">Please enter a password!</div>
                </div>
              </div>
           
            </div>
           
            <button type="submit" class="btn btn-primary shadow-primary btn-lg w-100">Sign in</button>
          </form>
          <hr class="my-4">
          <h6 class="text-center mb-4">Or sign in with your social network</h6>
          <div class="row row-cols-1 row-cols-sm-2">
            <div class="col mb-3">
              <a href="#" class="btn btn-icon btn-secondary btn-google btn-lg w-100">
                <i class="bx bxl-google fs-xl me-2"></i>
                Google
              </a>
            </div>
            <div class="col mb-3">
              <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-lg w-100">
                <i class="bx bxl-facebook fs-xl me-2"></i>
                Facebook
              </a>
            </div>
          </div>
        </div>
        <div class="w-100 align-self-end">
          <p class="nav d-block fs-xs text-center text-xl-start pb-2 mb-0">
            &copy; All rights reserved.
            <a class="nav-link d-inline-block p-0" href="/" target="_blank" rel="noopener">SECUREWAYBILL</a>
          </p>
        </div>
      </div>

      <!-- Background -->
      <div
        class="position-absolute top-0 end-0 w-50 h-100 bg-position-center bg-repeat-0 bg-size-cover d-none d-xl-block"
        style="background-image: url(assets/img/account/signin-bg.jpg);"></div>
    </section>
  </main>


  <!-- Back to top button -->
  <a href="#top" class="btn-scroll-top" data-scroll>
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
    <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
  </a>


  <!-- Main Theme Script -->
  <script src="assets/js/theme.min.js"></script>
</body>

<!-- Mirrored from silicon.createx.studio/account-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 15:00:20 GMT -->

</html>