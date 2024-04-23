<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Fastpay | CT_Taste</title>
    <meta charset="utf-8" />
    <meta name="description" content="Payment Portal For CT_Taste" />
    <meta name="keywords" content="Quick pay with CT_Taste" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="CT_Taste" />
    <meta property="og:url" content="https://cttaste.com" />
    <meta property="og:site_name" content="CT_Taste" />
    <link rel="shortcut icon" href="assets/media/logos/fav_01.png" />

    @laravelPWA
    <!--begin::Fonts(mandatory for all pages)-->

    <link rel="stylesheet" href="assets/googlefonts/inter.css" />
    <!--end::Fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet"> --}}
    <link href="assets/googlefonts/ubuntu.css" rel="stylesheet">


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--Begin::Google Tag Manager -->
   
    <!--End::Google Tag Manager -->
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <!--begin::Theme mode setup on page load-->
   
    <script>
        var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}			
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}            
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('/assets/media/auth/bg4.jpg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('/assets/media/auth/bg4-dark.jpg');
            }
        </style>
        <!--end::Page bg image-->

        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <!--begin::Aside-->
            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                <!--begin::Aside-->
                <div class="d-flex flex-center flex-lg-start flex-column">
                    <!--begin::Logo-->
                    <a href="/index.html" class="mb-7">
                        <img alt="Logo" src="/assets/media/logos/ct_white.png" style='width:150px;height:40px' />
                    </a>
                    <!--end::Logo-->

                    <!--begin::Title-->
                    <h2 class="text-white fw-normal m-0">
                        Sign In into your {{ $user->brand_name }} account!
                    </h2>
                    <!--end::Title-->
                </div>
                <!--begin::Aside-->
            </div>
            <!--begin::Aside-->

            <!--begin::Body-->
            <div class="d-flex flex-center w-lg-50 p-10" >
                <!--begin::Card-->
                <div class="card rounded-3 w-md-550px" >
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column p-10 p-lg-20 pb-lg-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-center flex-column-fluid pb-15 pb-lg-20">

                            <!--begin::Form-->
                            <div id='app'>
                                <div>
                                    <!--begin::Heading-->
                                    <form method="post" action='{{ route("login") }}'>@csrf
                                      <div class="text-center mb-11" >
                                        <img class="mx-auto h-100px h-lg-150px  theme-light-show" src="https://preview.keenthemes.com/metronic8/demo1/assets/media/illustrations/unitedpalms-1/20.png" alt="">
      
                                        <h1 class="text-dark fw-bolder mb-3">Enter the <span style='color:#ebab21'>VT</span><span style='color:rgb(58, 58, 199)'>UW</span>orld</h1>
                      
                                
                                      </div>
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
                                      <!--begin::Heading-->
                                
                                      <!--begin::Login options-->
                                  
                                      <!--end::Login options-->
                                
                                      <!--begin::Separator-->
                                    
                                      <!--end::Separator-->
                                
                                      <!--begin::Input group--->
                                
                                      <div class="fv-row mb-3">
                                        <!--begin::Email-->
                                        <input
                                          autocomplete=""
                                          type="email"
                                         
                                          name='email'
                                          placeholder="Email address"
                                          class="form-control bg-transparent"
                                          required
                                        />
                                
                                        <!--end::Email-->
                                      </div>
                                
                                      <!--end::Input group--->
                                      <div class="fv-row mb-3">
                                        <!--begin::Password-->
                                        <input
                                          type="password"
                                        
                                          placeholder="Password"
                                          autocomplete=""
                                          class="form-control bg-transparent"
                                          required
                                          name='password'
                                        />
                                        <!--end::Password-->
                                      </div>
                                     {{--  <div class="separator separator-content my-14">
                                        <span class="w-125px text-gray-500 fw-semibold fs-7"
                                          >Or with social accounts</span
                                        >
                                      </div>
                                      <div class="row g-3 mb-9">
                                        <!--begin::Col-->
                                        <div class="col-md-6">
                                          <!--begin::Google link--->
                                          <a href="{{ url('authorized/google') }}"
                                            class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100"
                                          >
                                            <img
                                              alt="Logo"
                                              src="/assets/media/svg/brand-logos/google-icon.svg"
                                              class="h-15px me-3"
                                            />
                                            Sign in with Google
                                          </a>
                                          <!--end::Google link--->
                                        </div>
                                        <!--end::Col-->
                                
                                        <!--begin::Col-->
                                        <div class="col-md-6">
                                          <!--begin::Google link--->
                                          <a
                                            href="#"
                                            class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100"
                                          >
                                            <img
                                              alt="Logo"
                                              src="/assets/media/svg/brand-logos/apple-black.svg"
                                              class="theme-light-show h-15px me-3"
                                            />
                                            <img
                                              alt="Logo"
                                              src="/assets/media/svg/brand-logos/apple-black-dark.svg"
                                              class="theme-dark-show h-15px me-3"
                                            />
                                            Sign in with Apple
                                          </a>
                                          <!--end::Google link--->
                                        </div>
                                        <!--end::Col-->
                                      </div> --}}
                                      <!--end::Input group--->
                                
                                      <!--begin::Wrapper-->
                                      <div class="text-gray-500 text-center fw-semibold fs-6">
                                        Yet to have an account?
                                  
                                        <a href="/register" class="link-success"> Sign up </a>
                                      </div>
                                      <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                        <!--begin::Link-->
                                        <a href="/forgot-password" class="link-primary">
                                          Forgot Password ?
                                        </a>
                                        <!--end::Link-->
                                      </div>
                                      <!--end::Wrapper-->
                                
                                      <!--begin::Submit button-->
                                      <div class="d-grid mb-10">
                                        <button type="submit" class="btn btn-primary">Sign In</button>
                                      </div>
                                      <!--end::Submit button-->
                                
                                      <!--begin::Sign up-->
                                    </form>
                                  
                                  </div>
                                {{-- <login-component></login-component> --}}
                            </div>
                            <!--end::Form-->

                        </div>
                        <!--end::Wrapper-->

                     
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{asset('cdn/sweetalert.min.js')}}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('cdn/jquery-3.6.0.js')}}" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('assets/js/professionallocker.js')}}"></script> --}}

{{-- <script>
$(document).ready(function() {
    Swal.fire('nice one, another issues')
})
    </script> --}}

    {{-- <!--begin::Javascript-->
    <script>
        var hostUrl = "/assets/index.html";        
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle--> --}}


    <!--begin::Custom Javascript(used for this page only)-->
    {{-- <script src="/assets/js/custom/authentication/sign-in/general.js"></script> --}}

</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo34/authentication/layouts/creative/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 08:11:23 GMT -->

</html>