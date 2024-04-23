<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->


<head>
  <meta charset="utf-8">
  <title>URGENT3K | SETPIN</title>

  <!-- SEO Meta Tags -->
  <meta name="description" content="Need an URGENT fund? We gat you!">
  <meta name="keywords" content="Need an URGENT fund? We gat you!">
  <meta name="author" content="CTHOSTEL PRODUCTS AND SERVICES">

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

</head>
<!--end::Head-->

<!--begin::Body-->

<body class="app-blank">


  
      

        <div id="#kt_app_body_content"
          style="background-color:#D5D9E2; font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
          <div
            style=" padding: 45px 0 34px 0;margin:0px auto; max-width: 600px;">
           
             
                    <!--begin:Email content-->
                    <div style="text-align:center; margin:0 15px 34px 15px">
                      <!--begin:Logo-->
                      <div style="margin-bottom: 10px">
                        {{-- <a rel="noopener" target="_blank">
                          <img src="{{ asset('assets/img/logo/vtulogo.png') }}"
                            srcset="{{ asset('assets/img/logo/vtulogo.png') }}" width='140px' height='35px' alt="">
                        </a> --}}
                        <h1> URGENT3<span style='color:red'>K</span></h1>
                      </div>
                      <!--end:Logo-->

                      <!--begin:Text-->
                      <div>
                        <div>
                          <div style="
                                                        font-size: 14px;
                                                        font-weight: 500;
                                                        margin-bottom: 27px;
                                                        font-family: Arial, Helvetica, sans-serif;
                                                      ">
                            <p style="
                                                          margin-bottom: 9px;
                                                          color: #181c32;
                                                          font-size: 22px;
                                                          font-weight: 700;
                                                        ">
                              Set Up Your Transaction Pin <i class="fa fa-lock"></i>
                            </p>
                          </div>
                          <!--end:Text-->
                          <form class="m-2 p-2" id="myForm">
                            <input type='hidden' id='user_id' value='{{ $user->uuid }}' />
                            <div id="otp" class="inputs d-flex flex-row justify-content-center">
                              <input class="m-2 text-center form-control rounded" type="number" id="first" maxlength="1"
                                required />

                              <input class="m-2 text-center form-control rounded" type="number" id="second"
                                maxlength="1" required />
                              <input class="m-2 text-center form-control rounded" type="number" id="third" maxlength="1"
                                required />
                              <input class="m-2 text-center form-control rounded" type="number" id="fourth"
                                maxlength="1" required />
                            </div>
                            <button type="submit" class="btn btn-block m-auto" style="
                                                          background-color: #50cd89;
                                                          border-radius: 6px;
                                                          display: inline-block;
                                                          padding: 11px 19px;
                                                          color: #ffffff;
                                                          font-size: 14px;
                                                          font-weight: 500;
                                                        ">
                              SET PIN
                            </button>
                          </form>
                          <!--begin:Action-->
                        </div>

                      </div>
                      <!--begin:Action-->
                    </div>
                    <!--end:Email content-->
               

          </div>
        </div>
    
</body>


  <!--begin::Global Javascript Bundle(mandatory for all pages)-->
  <script src="assets/plugins/global/plugins.bundle.js"></script>
  <script src="assets/js/scripts.bundle.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function(event) {

            function OTPInput() {
                const inputs = document.querySelectorAll('#otp > *[id]');
                for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput(); });
  </script>
  <!--end::Global Javascript Bundle-->
  <script>
    $(document).ready(function() {
        $('#myForm').on('submit', function(e) {
            e.preventDefault()
      console.log(first.value)
      let fd = new FormData();
      fd.append("first", $("#first").val());
      fd.append("second", $("#second").val());
      fd.append("third", $("#third").val());
      fd.append("fourth", $("#fourth").val());
      fd.append("user_id", $("#user_id").val());
      axios
        .post("setpin", fd)
        .then((response) => {
          console.log(response.data);
          if(response.data == true) {
            Swal.fire('Pin set successfully!')
            location.reload()
          }
          else {
            Swal.fire('Pin not set','Pin not set, try again later','error')
          }
        })
        .catch((error) => {
          console.log(error.message);
          Swal.fire('Pin not set','Pin not set, try again later','error')
        });
        })
    })
  </script>


  <!--end::Javascript-->

</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo34/authentication/email/welcome-message.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 08:12:06 GMT -->

</html>