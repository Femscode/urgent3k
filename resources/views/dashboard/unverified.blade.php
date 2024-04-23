<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>VTUBIZ | Verify Email</title>
    <meta charset="utf-8" />
    <meta name="description" content="Top Up, Pay Bills, Stay Connected" />
    <meta name="keywords" content="Quick pay with CT_Taste" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="CT_Taste" />
    <meta property="og:url" content="https://cttaste.com" />
    <meta property="og:site_name" content="CT_Taste" />
    <link rel="shortcut icon" href="assets/media/logos/fav_01.png" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->



    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->


</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="app-blank">
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


        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
         
            <!--end::Header-->

            <!--begin::Body-->
            <div class="scroll-y flex-column-fluid px-10 py-10" data-kt-scroll="true" data-kt-scroll-activate="true"
                data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header_nav"
                data-kt-scroll-offset="5px" data-kt-scroll-save-state="true"
                style="background-color:#D5D9E2; --kt-scrollbar-color: #d9d0cc; --kt-scrollbar-hover-color: #d9d0cc">

                <!--begin::Email template-->
                <style>
                    html,
                    body {
                        padding: 0;
                        margin: 0;
                        font-family: Inter, Helvetica, "sans-serif";
                    }

                    a:hover {
                        color: #009ef7;
                    }
                </style>

                <div id="#kt_app_body_content"
                    style="background-color:#D5D9E2; font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
                    <div
                        style="background-color:#ffffff; padding: 45px 0 34px 0; border-radius: 24px; margin:0px auto; max-width: 600px;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto"
                            style="border-collapse:collapse">
                            <tbody>
                                <tr>
                                    <td align="center" valign="center" style="text-align:center; padding-bottom: 10px">

                                        <!--begin:Email content-->
                                        <div style="text-align:center; margin:0 15px 34px 15px">
                                            <!--begin:Logo-->
                                            <div style="margin-bottom: 10px">
                                                <a rel="noopener" target="_blank">
                                                    <img src="{{ asset('assets/img/logo/vtulogo.png') }}" srcset="{{ asset('assets/img/logo/vtulogo.png') }}" width='140px' height='35px' alt="">
          
                                                </a>
                                            </div>
                                            <!--end:Logo-->

                                            <!--begin:Media-->
                                            <div style="margin-bottom: 15px">
                                                <img alt="Logo"
                                                    src="../../assets/media/email/icon-positive-vote-1.svg" />
                                            </div>
                                            <!--end:Media-->
                                            @if(Session::has('message'))

                                            <div class='alert alert-info'>{{ Session::get('message') }}</div>

                                            @endif
                                            <!--begin:Text-->
                                            <div
                                                style="font-size: 14px; font-weight: 500; margin-bottom: 27px; font-family:Arial,Helvetica,sans-serif;">
                                                <p
                                                    style="margin-bottom:9px; color:#181C32; font-size: 22px; font-weight:700">
                                                    Hey {{ $user->name }}, thank you for using VTUBIZ!</p>
                                                <p style="margin-bottom:2px; color:#7E8299">Your account has been currently blocked due to some reasons. kindly reach out to the admin to continue using our product.</p>
                                               
                                            </div>
                                            <!--end:Text-->

                                            <!--begin:Action-->
                                          
                                            <a href='https://wa.me/{{ substr($company->phone, 1) }}' target="_blank"
                                                style="background-color:#50cd89; border-radius:6px;display:inline-block; padding:11px 19px; color: #FFFFFF; font-size: 14px; font-weight:500;">
                                                Message Us
                                            </a>
                                            <!--begin:Action-->
                                        </div>
                                        <!--end:Email content-->
                                    </td>
                                </tr>



                                <tr>
                                    <td align="center" valign="center" style="text-align:center; padding-bottom: 20px;">
                                        <a href="#" style="margin-right:10px"><img alt="Logo"
                                                src="../../assets/media/email/icon-linkedin.svg" /></a>
                                        <a href="#" style="margin-right:10px"><img alt="Logo"
                                                src="../../assets/media/email/icon-dribbble.svg" /></a>
                                        <a href="#" style="margin-right:10px"><img alt="Logo"
                                                src="../../assets/media/email/icon-facebook.svg" /></a>
                                        <a href="#"><img alt="Logo"
                                                src="../../assets/media/email/icon-twitter.svg" /></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center" valign="center"
                                        style="font-size: 13px; padding:0 15px; text-align:center; font-weight: 500; color: #A1A5B7;font-family:Arial,Helvetica,sans-serif">
                                        <p> &copy Copyright
                                            <a href="#" rel="noopener" target="_blank"
                                                style="font-weight: 600;font-family:Arial,Helvetica,sans-serif">VTUBIZ.</a>&nbsp;
                                            
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end::Email template-->

            </div>
            <!--end::Body-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Root-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "../../assets/index.html";        
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="../../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->


    <!--end::Javascript-->

</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo34/authentication/email/welcome-message.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 08:12:06 GMT -->

</html>