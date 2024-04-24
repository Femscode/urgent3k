<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>URGENT3K | DASHBOARD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('securedashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('securedashboard/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('securedashboard/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('securedashboard/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset('securedashboard/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset('securedashboard/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('securedashboard/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('securedashboard/css/style.css')}}" rel="stylesheet">
  @yield('header')

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        {{-- <img src="assets/img/logo.png" alt=""> --}}
        <span class="d-none d-lg-block">URGENT3<span style='color:red'>K</span></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Welcome to URGENT3K</h4>
                <p>Request for 3K funds in less than 3Min</p>
                <p>Just Now</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
]

         
           
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Update your profile</h4>
                  <p>Finish your registration by completing  your profile</p>
                  <p>Just now</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            @if($user->logo !== null)
            <img  class="rounded-circle" src="https://urgent3k.com/urgent_3k_files/public/brand_images/{{ $user->logo}}"
            alt="Profile Pic">
            @else 
            <img  class="rounded-circle"  src="assets/img/profile-img.jpg"
            alt="Profile Pic">
            @endif
            
           
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ $user->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ $user->name }}</h6>
              <span>{{ $user->email }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" onclick='return confirm("Are you sure you want to logout?")' href="/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <div id="navbarVerticalMenuPagesMenu">


       
        <!-- Collapse -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/profile" role="button">
            <i class="bi-person-badge"></i>
            <span class="nav-link-title" @if($active == 'profile') style='color:#377dff'@endif>Profile</span>
          </a>


        </li>
        {{-- <li class="nav-item">
          <a class="nav-link collapsed" href="/kyc" role="button">
            <i class="bi-person-badge"></i>
            <span class="nav-link-title" @if($active == 'kyc') style='color:#377dff'@endif>KYC</span>
          </a>


        </li> --}}
        <!-- End Collapse -->

       

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>My Loans</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="/requestfund">
                <i class="bi bi-circle"></i><span>Make New Request</span>
              </a>
            </li>
            <li>
              <a href="/myloans">
                <i class="bi bi-circle"></i><span>My Loans</span>
              </a>
            </li>
           
          
          </ul>
        </li>



        
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi-shield-lock"></i><span>Password</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/change_password">
              <i class="bi bi-circle"></i><span>Change Password</span>
            </a>
          </li>
         
          <li>
            <a href="/change_password">
              <i class="bi bi-circle"></i><span>Reset Password</span>
            </a>
          </li>
         
         
        </ul>
      </li><!-- End Forms Nav -->

        
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-key"></i><span>Withdrawal Pin</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/change-pin">
              <i class="bi bi-circle"></i><span>Change Pin</span>
            </a>
          </li>
          <li>
            <a href="/change-pin">
              <i class="bi bi-circle"></i><span>Reset Pin</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi-receipt"></i><span>Transactions & Activities</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="/transactions">
                <i class="bi bi-circle"></i><span>Transactions</span>
              </a>
            </li>
            <li>
              <a href="/activities">
                <i class="bi bi-circle"></i><span>Activities</span>
              </a>
            </li>
           
          </ul>
        </li><!-- End Charts Nav -->


        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-placement="left">
            <i class="bi bi-truck nav-icon"></i>
            <span class="nav-link-title">Urgent 10k <span class="badge bg-info rounded-pill ms-1">Coming
                Soon</span></span>
          </a>
        </li>
      </div>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-envelope"></i>
          <span>Contact Us</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-box-arrow-in-left"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Hi👋, {{ $user->name }}.</h1>
      {{-- <nav>
        <span class="badge bg-warning text-dark">

          <i class="bi-exclamation-triangle-fill me-1"></i>
          Your Securewaybill ID:
        </span>
        <div class="input-group input-group-merge">
          <input id='refContent' readonly type="text" id="iconExample" class="form-control" value="{{ $user->username }}">

          <a id='refCode' class="js-clipboard input-group-append input-group-text" href="javascript:;">
            <i id="iconExampleLinkIcon" class="bi-clipboard"></i>
          </a>
        </div>
      </nav> --}}
    </div><!-- End Page Title -->
    @yield('content')
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>URGENT3<span style='color:red'>K</span></span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      A product of <a href="https://cthostel.com/">CTHostel</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('securedashboard/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('securedashboard/js/main.js')}}"></script>

  {{-- //from the old dashboard  --}}
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Include Clipboard.js library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

  <script>
    @if(isset($notification))

Swal.fire(
        '{{ $notification->title }}',
        '{{ $notification->description }}',
        'info'
)
@endif

@if (session('message'))
                Swal.fire({
                        icon: 'success',
                        title: '{{ session("message") }}'
                        }) 
           
        @endif

        @if (session('success'))
                Swal.fire({
                        icon: 'success',
                        title: '{{ session("success") }}'
                        }) 
           
        @endif

        @if (session('error'))
                Swal.fire({
                        icon: 'error',
                        title: '{{ session("error") }}'
                        }) 
           
        @endif
        $('#refCode').click(function() {
      // Select the input field content
      var inputField = $('#refContent');
      inputField.select();
      

      // Copy the selected content to clipboard
      document.execCommand('copy');

      // Deselect the input field
      inputField.blur();

      // You can add a visual feedback if needed, for example, change the icon color or show a tooltip
     
      $("#refCode").text('Copied')

      // Optionally, revert the icon color after a short delay
      setTimeout(function() {
        $('#refCode').html('<i class="bi-clipboard"></i>'); // Revert to the original color (empty string removes inline style)
      }, 1000); // Adjust the delay as needed
    });
 
 
  </script>

  @yield('script')

</body>

</html>