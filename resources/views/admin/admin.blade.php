<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>CTHostel</title>
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link href="{{ asset('myimages/fav.png') }}" src='{{ asset(' myimages/fav.png') }}' rel="icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('backend/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet') }}"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!--End::Google Tag Manager -->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed">
    <!--begin::Main-->
    <!--begin::Root-->

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <!--begin::Brand-->
                <div class="aside-logo py-8" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <a class="d-flex align-items-center" style='background:#fff;padding:5px;border-radius:4px'>
                        <img alt="Logo" src="{{ asset('myimages/fav.png') }}" class="h-45px logo" />
                    </a>
                    <!--end::Logo-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside menu-->
                <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
                    <!--begin::Aside Menu-->
                    <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper"
                        data-kt-scroll="true" data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                        data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold"
                            id="#kt_aside_menu" data-kt-menu="true">
                            <div class="menu-item py-2">
                                <a class="menu-link active menu-center" href="/logout" data-bs-trigger="hover"
                                    data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-icon me-0">
                                        <i class="bi bi-house fs-2"></i>
                                    </span>
                                    <span class="menu-title">Logout</span>
                                </a>
                            </div>
                            <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start"
                                class="menu-item py-2">
                                <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click"
                                    data-bs-placement="right">
                                    <span class="menu-icon me-0">
                                        <i class="bi bi-file-earmark-lock fs-2"></i>
                                    </span>
                                    <span class="menu-title">My Page </span>
                                </span>

                            </div>


                            </a>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Aside Menu-->
                </div>
                <!--end::Aside menu-->
                <!--begin::Footer-->
                <div class="aside-footer flex-column-auto" id="kt_aside_footer">
                    <!--begin::Menu-->
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btm-sm btn-icon btn-active-color-primary"
                            data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start"
                            data-kt-menu-flip="top-end" data-bs-toggle="tooltip" data-bs-placement="right"
                            data-bs-dismiss="click" title="Quick actions">
                            <!--begin::Svg Icon | path: icons/duotone/Communication/Dial-numbers.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                    version="1.1">
                                    <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2" />
                                    <rect fill="#000000" x="4" y="10" width="4" height="4" rx="2" />
                                    <rect fill="#000000" x="10" y="4" width="4" height="4" rx="2" />
                                    <rect fill="#000000" x="10" y="10" width="4" height="4" rx="2" />
                                    <rect fill="#000000" x="16" y="4" width="4" height="4" rx="2" />
                                    <rect fill="#000000" x="16" y="10" width="4" height="4" rx="2" />
                                    <rect fill="#000000" x="4" y="16" width="4" height="4" rx="2" />
                                    <rect fill="#000000" x="10" y="16" width="4" height="4" rx="2" />
                                    <rect fill="#000000" x="16" y="16" width="4" height="4" rx="2" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start" data-kt-menu-flip="bottom, top">
                                <!--begin::Menu item-->
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Member Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" style="" class="header align-items-stretch">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Aside mobile toggle-->
                        <div class="d-flex align-items-center d-lg-none ms-n1 me-2" title="Show aside menu">
                            <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                id="kt_aside_mobile_toggle">
                                <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                                <span class="svg-icon svg-icon-2x mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                                            <path
                                                d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Aside mobile toggle-->
                        <!--begin::Mobile logo-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <a href="index.html" class="d-lg-none">
                                <img alt="Logo" src="{{ asset('myimages/fav.png') }}" class="h-30px" />
                            </a>
                        </div>
                        <!--end::Mobile logo-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <!--begin::Navbar-->
                            <div class="d-flex align-items-stretch" id="kt_header_nav">
                                <!--begin::Menu wrapper-->
                                <div class="header-menu align-items-stretch" data-kt-drawer="true"
                                    data-kt-drawer-name="header-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                                    data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
                                    data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                                        id="#kt_header_menu" data-kt-menu="true">
                                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                                            class="menu-item here show menu-lg-down-accordion me-lg-1">
                                            <a class="menu-link active py-3">
                                                <span class="menu-title">Agent Dashboard</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>

                                        </div>
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Navbar-->
                            <!--begin::Topbar-->
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <!--begin::Toolbar wrapper-->
                                <div class="d-flex align-items-stretch flex-shrink-0">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-stretch ms-1 ms-lg-3">
                                        <!--begin::Search-->
                                        <div id="kt_header_search" class="d-flex align-items-stretch"
                                            data-kt-search-keypress="true" data-kt-search-min-length="2"
                                            data-kt-search-enter="enter" data-kt-search-layout="menu"
                                            data-kt-menu-trigger="auto" data-kt-menu-overflow="false"
                                            data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-flip="bottom">
                                            <!--begin::Search toggle-->

                                            <!--end::Search toggle-->
                                            <!--begin::Menu-->
                                            <div data-kt-search-element="content"
                                                class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                                <!--begin::Wrapper-->
                                                <div data-kt-search-element="wrapper">
                                                    <!--begin::Form-->
                                                    <form data-kt-search-element="form"
                                                        class="w-100 position-relative mb-3" autocomplete="off">
                                                        <!--begin::Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                    <path
                                                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--end::Icon-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-flush ps-10"
                                                            name="search" value="" placeholder="Search..."
                                                            data-kt-search-element="input" />
                                                        <!--end::Input-->
                                                        <!--begin::Spinner-->
                                                        <span
                                                            class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
                                                            data-kt-search-element="spinner">
                                                            <span
                                                                class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                                        </span>
                                                        <!--end::Spinner-->
                                                        <!--begin::Reset-->
                                                        <span
                                                            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
                                                            data-kt-search-element="clear">
                                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                            <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                        fill="#000000">
                                                                        <rect fill="#000000" x="0" y="7" width="16"
                                                                            height="2" rx="1" />
                                                                        <rect fill="#000000" opacity="0.5"
                                                                            transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                            x="0" y="7" width="16" height="2" rx="1" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <!--end::Reset-->
                                                        <!--begin::Toolbar-->
                                                        <div class="position-absolute top-50 end-0 translate-middle-y"
                                                            data-kt-search-element="toolbar">
                                                            <!--begin::Preferences toggle-->
                                                            <div data-kt-search-element="preferences-show"
                                                                class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1"
                                                                data-bs-toggle="tooltip"
                                                                title="Show search preferences">
                                                                <!--begin::Svg Icon | path: icons/duotone/Code/Settings4.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <path
                                                                            d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3" />
                                                                        <path
                                                                            d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                            fill="#000000" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Preferences toggle-->
                                                            <!--begin::Advanced search toggle-->
                                                            <div data-kt-search-element="advanced-options-form-show"
                                                                class="btn btn-icon w-20px btn-sm btn-active-color-primary"
                                                                data-bs-toggle="tooltip"
                                                                title="Show more search options">
                                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                                            <path
                                                                                d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Advanced search toggle-->
                                                        </div>
                                                        <!--end::Toolbar-->
                                                    </form>
                                                    <!--end::Form-->
                                                    <!--begin::Separator-->
                                                    <div class="separator border-gray-200 mb-6"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Recently viewed-->
                                                    <div data-kt-search-element="results" class="d-none">
                                                        <!--begin::Items-->
                                                        <div class="scroll-y mh-200px mh-lg-350px">
                                                            <!--begin::Category title-->
                                                            <h3 class="fs-5 text-muted m-0 pb-5"
                                                                data-kt-search-element="category-title">Users</h3>
                                                            <!--end::Category title-->
                                                            <!--begin::Item-->
                                                            <a href="#"
                                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-40px me-4">
                                                                    <img src="backend/media/avatars/150-1.jpg" alt="" />
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div
                                                                    class="d-flex flex-column justify-content-start fw-bold">
                                                                    <span class="fs-6 fw-bold">Karina Clark</span>
                                                                    <span class="fs-7 fw-bold text-muted">Marketing
                                                                        Manager</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <a href="#"
                                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-40px me-4">
                                                                    <img src="backend/media/avatars/150-3.jpg" alt="" />
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div
                                                                    class="d-flex flex-column justify-content-start fw-bold">
                                                                    <span class="fs-6 fw-bold">Olivia Bold</span>
                                                                    <span class="fs-7 fw-bold text-muted">Software
                                                                        Engineer</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <a href="#"
                                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-40px me-4">
                                                                    <img src="backend/media/avatars/150-8.jpg" alt="" />
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div
                                                                    class="d-flex flex-column justify-content-start fw-bold">
                                                                    <span class="fs-6 fw-bold">Ana Clark</span>
                                                                    <span class="fs-7 fw-bold text-muted">UI/UX
                                                                        Designer</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <a href="#"
                                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-40px me-4">
                                                                    <img src="backend/media/avatars/150-11.jpg"
                                                                        alt="" />
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div
                                                                    class="d-flex flex-column justify-content-start fw-bold">
                                                                    <span class="fs-6 fw-bold">Nick Pitola</span>
                                                                    <span class="fs-7 fw-bold text-muted">Art
                                                                        Director</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <a href="#"
                                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-40px me-4">
                                                                    <img src="backend/media/avatars/150-12.jpg"
                                                                        alt="" />
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div
                                                                    class="d-flex flex-column justify-content-start fw-bold">
                                                                    <span class="fs-6 fw-bold">Edward Kulnic</span>
                                                                    <span class="fs-7 fw-bold text-muted">System
                                                                        Administrator</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::Item-->
                                                            <!--begin::Category title-->
                                                            <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                                data-kt-search-element="category-title">Customers</h3>
                                                            <!--end::Category title-->
                                                            <!--begin::Item-->
                                                            <a href="#"
                                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-40px me-4">
                                                                    <span class="symbol-label bg-light">
                                                                        <img class="w-20px h-20px"
                                                                            src="backend/media/svg/brand-logos/volicity-9.svg"
                                                                            alt="" />
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div
                                                                    class="d-flex flex-column justify-content-start fw-bold">
                                                                    <span class="fs-6 fw-bold">Company Rbranding</span>
                                                                    <span class="fs-7 fw-bold text-muted">UI
                                                                        Design</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <a href="#"
                                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-40px me-4">
                                                                    <span class="symbol-label bg-light">
                                                                        <img class="w-20px h-20px"
                                                                            src="backend/media/svg/brand-logos/tvit.svg"
                                                                            alt="" />
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div
                                                                    class="d-flex flex-column justify-content-start fw-bold">
                                                                    <span class="fs-6 fw-bold">Company
                                                                        Re-branding</span>
                                                                    <span class="fs-7 fw-bold text-muted">Web
                                                                        Development</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <a href="#"
                                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-40px me-4">
                                                                    <span class="symbol-label bg-light">
                                                                        <img class="w-20px h-20px"
                                                                            src="backend/media/svg/misc/infography.svg"
                                                                            alt="" />
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div
                                                                    class="d-flex flex-column justify-content-start fw-bold">
                                                                    <span class="fs-6 fw-bold">Business Analytics
                                                                        App</span>
                                                                    <span
                                                                        class="fs-7 fw-bold text-muted">Administration</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <a href="#"
                                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-40px me-4">
                                                                    <span class="symbol-label bg-light">
                                                                        <img class="w-20px h-20px"
                                                                            src="backend/media/svg/brand-logos/leaf.svg"
                                                                            alt="" />
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div
                                                                    class="d-flex flex-column justify-content-start fw-bold">
                                                                    <span class="fs-6 fw-bold">EcoLeaf App Launch</span>
                                                                    <span
                                                                        class="fs-7 fw-bold text-muted">Marketing</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <a href="#"
                                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-40px me-4">
                                                                    <span class="symbol-label bg-light">
                                                                        <img class="w-20px h-20px"
                                                                            src="backend/media/svg/brand-logos/tower.svg"
                                                                            alt="" />
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div
                                                                    class="d-fslex flex-column justify-content-start fw-bold">
                                                                    <span class="fs-6 fw-bold">Tower Group
                                                                        Website</span>
                                                                    <span class="fs-7 fw-bold text-muted">Google
                                                                        Adwords</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::Item-->
                                                            <!--begin::Category title-->
                                                            <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                                data-kt-search-element="category-title">Projects</h3>
                                                            <!--end::Category title-->
                                                            <!--begin::Item-->
                                                            <a href="#"
                                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-40px me-4">
                                                                    <span class="symbol-label bg-light">
                                                                        <!--begin::Svg Icon | path: icons/duotone/Communication/Clipboard-list.svg-->
                                                                        <span
                                                                            class="svg-icon svg-icon-2 svg-icon-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <path
                                                                                    d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                                <path
                                                                                    d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                                    fill="#000000" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    x="10" y="9" width="7" height="2"
                                                                                    rx="1" />
                                                                                <rect fill="#000000" opacity="0.3" x="7"
                                                                                    y="9" width="2" height="2" rx="1" />
                                                                                <rect fill="#000000" opacity="0.3" x="7"
                                                                                    y="13" width="2" height="2"
                                                                                    rx="1" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    x="10" y="13" width="7" height="2"
                                                                                    rx="1" />
                                                                                <rect fill="#000000" opacity="0.3" x="7"
                                                                                    y="17" width="2" height="2"
                                                                                    rx="1" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    x="10" y="17" width="7" height="2"
                                                                                    rx="1" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class="d-flex flex-column">
                                                                    <span class="fs-6 fw-bold">Si-Fi Project by AU
                                                                        Themes</span>
                                                                    <span class="fs-7 fw-bold text-muted">#45670</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->

                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <a href="#"
                                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-40px me-4">
                                                                    <span class="symbol-label bg-light">
                                                                        <!--begin::Svg Icon | path: icons/duotone/Communication/Group-chat.svg-->
                                                                        <span
                                                                            class="svg-icon svg-icon-2 svg-icon-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <path
                                                                                    d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                                    fill="#000000" />
                                                                                <path
                                                                                    d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class="d-flex flex-column">
                                                                    <span class="fs-6 fw-bold">Finance Monitoring SAAS
                                                                        Discussion</span>
                                                                    <span class="fs-7 fw-bold text-muted">#21090</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <a href="#"
                                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-40px me-4">
                                                                    <span class="symbol-label bg-light">
                                                                        <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                                                        <span
                                                                            class="svg-icon svg-icon-2 svg-icon-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1"
                                                                                    fill="none" fill-rule="evenodd">
                                                                                    <polygon
                                                                                        points="0 0 24 0 24 24 0 24" />
                                                                                    <path
                                                                                        d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                                                        fill="#000000"
                                                                                        fill-rule="nonzero"
                                                                                        opacity="0.3" />
                                                                                    <path
                                                                                        d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                                                        fill="#000000"
                                                                                        fill-rule="nonzero" />
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class="d-flex flex-column">
                                                                    <span class="fs-6 fw-bold">Dashboard Analitics
                                                                        Launch</span>
                                                                    <span class="fs-7 fw-bold text-muted">#34560</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </a>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Recently viewed-->
                                                    <!--begin::Recently viewed-->
                                                    <div class="mb-4" data-kt-search-element="main">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex flex-stack fw-bold mb-4">
                                                            <!--begin::Label-->
                                                            <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Heading-->

                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Recently viewed-->
                                                    <!--begin::Empty-->
                                                    <div data-kt-search-element="empty" class="text-center d-none">
                                                        <!--begin::Icon-->
                                                        <div class="pt-10 pb-10">
                                                            <!--begin::Svg Icon | path: icons/duotone/Interface/File-Search.svg-->
                                                            <span class="svg-icon svg-icon-4x opacity-50">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.25"
                                                                        d="M3 4C3 2.34315 4.34315 1 6 1H15.7574C16.553 1 17.3161 1.31607 17.8787 1.87868L20.1213 4.12132C20.6839 4.68393 21 5.44699 21 6.24264V20C21 21.6569 19.6569 23 18 23H6C4.34315 23 3 21.6569 3 20V4Z"
                                                                        fill="#12131A" />
                                                                    <path
                                                                        d="M15 1.89181C15 1.39927 15.3993 1 15.8918 1V1C16.6014 1 17.2819 1.28187 17.7836 1.78361L20.2164 4.21639C20.7181 4.71813 21 5.39863 21 6.10819V6.10819C21 6.60073 20.6007 7 20.1082 7H16C15.4477 7 15 6.55228 15 6V1.89181Z"
                                                                        fill="#12131A" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M13.032 15.4462C12.4365 15.7981 11.7418 16 11 16C8.79086 16 7 14.2091 7 12C7 9.79086 8.79086 8 11 8C13.2091 8 15 9.79086 15 12C15 12.7418 14.7981 13.4365 14.4462 14.032L16.7072 16.293C17.0977 16.6835 17.0977 17.3167 16.7072 17.7072C16.3167 18.0977 15.6835 18.0977 15.293 17.7072L13.032 15.4462ZM13 12C13 13.1046 12.1046 14 11 14C9.89543 14 9 13.1046 9 12C9 10.8954 9.89543 10 11 10C12.1046 10 13 10.8954 13 12Z"
                                                                        fill="#12131A" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Icon-->
                                                        <!--begin::Message-->
                                                        <div class="pb-15 fw-bold">
                                                            <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                                            <div class="text-muted fs-7">Please try again with a
                                                                different query</div>
                                                        </div>
                                                        <!--end::Message-->
                                                    </div>
                                                    <!--end::Empty-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Preferences-->
                                                <form data-kt-search-element="advanced-options-form"
                                                    class="pt-1 d-none">
                                                    <!--begin::Heading-->
                                                    <h3 class="fw-bold text-dark mb-7">Advanced Search</h3>
                                                    <!--end::Heading-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Contains the word" name="query" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <!--begin::Radio group-->
                                                        <div class="nav-group nav-group-fluid">
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type="radio" class="btn-check" name="type"
                                                                    value="has" checked="checked" />
                                                                <span
                                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type="radio" class="btn-check" name="type"
                                                                    value="users" />
                                                                <span
                                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type="radio" class="btn-check" name="type"
                                                                    value="orders" />
                                                                <span
                                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type="radio" class="btn-check" name="type"
                                                                    value="projects" />
                                                                <span
                                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Radio group-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" name="assignedto"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Assigned to" value="" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" name="collaborators"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Collaborators" value="" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <!--begin::Radio group-->
                                                        <div class="nav-group nav-group-fluid">
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type="radio" class="btn-check" name="attachment"
                                                                    value="has" checked="checked" />
                                                                <span
                                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has
                                                                    attachment</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label>
                                                                <input type="radio" class="btn-check" name="attachment"
                                                                    value="any" />
                                                                <span
                                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Radio group-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <select name="timezone" aria-label="Select a Timezone"
                                                            data-control="select2" data-placeholder="date_period"
                                                            class="form-select form-select-sm form-select-solid">
                                                            <option value="next">Within the next</option>
                                                            <option value="last">Within the last</option>
                                                            <option value="between">Between</option>
                                                            <option value="on">On</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="row mb-8">
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <input type="number" name="date_number"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Lenght" value="" />
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <select name="date_typer" aria-label="Select a Timezone"
                                                                data-control="select2" data-placeholder="Period"
                                                                class="form-select form-select-sm form-select-solid">
                                                                <option value="days">Days</option>
                                                                <option value="weeks">Weeks</option>
                                                                <option value="months">Months</option>
                                                                <option value="years">Years</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset"
                                                            class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2"
                                                            data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                                                        <a href="pages/search/horizontal.html"
                                                            class="btn btn-sm fw-bolder btn-primary"
                                                            data-kt-search-element="advanced-options-form-search">Search</a>
                                                    </div>
                                                    <!--end::Actions-->
                                                </form>
                                                <!--end::Preferences-->
                                                <!--begin::Preferences-->
                                                <form data-kt-search-element="preferences" class="pt-1 d-none">
                                                    <!--begin::Heading-->
                                                    <h3 class="fw-bold text-dark mb-7">Search Preferences</h3>
                                                    <!--end::Heading-->
                                                    <!--begin::Input group-->
                                                    <div class="pb-4 border-bottom">
                                                        <label
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                            <span
                                                                class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Projects</span>
                                                            <input class="form-check-input" type="checkbox" value="1"
                                                                checked="checked" />
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="py-4 border-bottom">
                                                        <label
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                            <span
                                                                class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Targets</span>
                                                            <input class="form-check-input" type="checkbox" value="1"
                                                                checked="checked" />
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="py-4 border-bottom">
                                                        <label
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                            <span
                                                                class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Affiliate
                                                                Programs</span>
                                                            <input class="form-check-input" type="checkbox" value="1" />
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="py-4 border-bottom">
                                                        <label
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                            <span
                                                                class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Referrals</span>
                                                            <input class="form-check-input" type="checkbox" value="1"
                                                                checked="checked" />
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="py-4 border-bottom">
                                                        <label
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                            <span
                                                                class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Users</span>
                                                            <input class="form-check-input" type="checkbox" value="1" />
                                                        </label>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end pt-7">
                                                        <button type="reset"
                                                            class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2"
                                                            data-kt-search-element="preferences-dismiss">Cancel</button>
                                                        <button type="submit"
                                                            class="btn btn-sm fw-bolder btn-primary">Save
                                                            Changes</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </form>
                                                <!--end::Preferences-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                        <!--begin::Menu wrapper-->
                                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                            data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                            data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                            <img src="/agent/{{$user->profilePic}}" alt="profilePic" />
                                        </div>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <img alt="Logo" src="backend/media/avatars/150-26.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-5">
                                                            {{ $user->name }}
                                                            <span
                                                                class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                                                        </div>
                                                        <a href="#"
                                                            class="fw-bold text-muted text-hover-primary fs-7">{{
                                                            $user->email }}</a>
                                                    </div>
                                                    <!--end::Username-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href='{{route("logout")}}' class="menu-link px-5">Logout</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="pages/projects/list.html" class="menu-link px-5">
                                                    <span class="menu-text">My Projects</span>
                                                    <span class="menu-badge">
                                                        <span
                                                            class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="left-start" data-kt-menu-flip="bottom, top">
                                                <a href="#" class="menu-link px-5">
                                                    <span class="menu-title">My Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="account/referrals.html"
                                                            class="menu-link px-5">Referrals</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="account/billing.html"
                                                            class="menu-link px-5">Billing</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="account/statements.html"
                                                            class="menu-link px-5">Payments</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="account/statements.html"
                                                            class="menu-link d-flex flex-stack px-5">Statements
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="View your statements"></i></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <input class="form-check-input w-30px h-20px"
                                                                    type="checkbox" value="1" checked="checked"
                                                                    name="notifications" />
                                                                <span
                                                                    class="form-check-label text-muted fs-7">Notifications</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="account/statements.html" class="menu-link px-5">My
                                                    Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="left-start" data-kt-menu-flip="bottom, top">
                                                <a href="#" class="menu-link px-5">
                                                    <span class="menu-title position-relative">Language
                                                        <span
                                                            class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                                            <img class="w-15px h-15px rounded-1 ms-2"
                                                                src="agent/{{$user->profilePic}}"
                                                                alt="profilePic" /></span></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="account/settings.html"
                                                            class="menu-link d-flex px-5 active">
                                                            <span class="symbol symbol-20px me-4">
                                                                <img class="rounded-1"
                                                                    src="agent/{{$user->profilePic}}"
                                                                    alt="metronic" />
                                                            </span>English</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="account/settings.html" class="menu-link d-flex px-5">
                                                            <span class="symbol symbol-20px me-4">
                                                                <img class="rounded-1"
                                                                    src="agent/{{$user->profilePic}}"
                                                                    alt="metronic" />
                                                            </span>Spanish</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="account/settings.html" class="menu-link d-flex px-5">
                                                            <span class="symbol symbol-20px me-4">
                                                                <img class="rounded-1"
                                                                    src="/agent/{{$user->profilePic}}" alt="metronic" />
                                                            </span>German</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="account/settings.html" class="menu-link d-flex px-5">
                                                            <span class="symbol symbol-20px me-4">
                                                                <img class="rounded-1"
                                                                    src="/agent/{{$user->profilePic}}" alt="metronic" />
                                                            </span>Japanese</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="account/settings.html" class="menu-link d-flex px-5">
                                                            <span class="symbol symbol-20px me-4">
                                                                <img class="rounded-1"
                                                                    src="agent/{{$user->profilePic}}"
                                                                    alt="metronic" />
                                                            </span></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5 my-1">
                                                <a href="account/settings.html" class="menu-link px-5">Account
                                                    Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="authentication/flows/basic/sign-in.html"
                                                    class="menu-link px-5">Sign Out</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::User -->
                                    <!--begin::Heaeder menu toggle-->
                                    <div class="d-flex align-items-center d-lg-none ms-2" title="Show header menu">
                                        <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                            id="kt_header_menu_mobile_toggle">
                                            <!--begin::Svg Icon | path: icons/duotone/Text/Toggle-Right.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M22 11.5C22 12.3284 21.3284 13 20.5 13H3.5C2.6716 13 2 12.3284 2 11.5C2 10.6716 2.6716 10 3.5 10H20.5C21.3284 10 22 10.6716 22 11.5Z"
                                                            fill="black" />
                                                        <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14.5 20C15.3284 20 16 19.3284 16 18.5C16 17.6716 15.3284 17 14.5 17H3.5C2.6716 17 2 17.6716 2 18.5C2 19.3284 2.6716 20 3.5 20H14.5ZM8.5 6C9.3284 6 10 5.32843 10 4.5C10 3.67157 9.3284 3 8.5 3H3.5C2.6716 3 2 3.67157 2 4.5C2 5.32843 2.6716 6 3.5 6H8.5Z"
                                                            fill="black" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Heaeder menu toggle-->
                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>

                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container">

                        <div class="card mb-5 mb-xl-10">
                            <div class="card-body pt-9 pb-0">
                                @if(Session::has('success'))
                                <div class='alert alert-success'>
                                    <p>{{Session::get('success')}}</p>
                                </div>
                                @endif
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                                    <!--begin: Pic-->
                                    <div class="me-7 mb-4">
                                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                            <img src="agent/{{$user->profilePic}}" alt="image" />
                                            <div
                                                class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Pic-->
                                    <!--begin::Info-->
                                    <div class="flex-grow-1">
                                        <!--begin::Title-->
                                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                            <!--begin::User-->
                                            <div class="d-flex flex-column">
                                                <!--begin::Name-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <a href="#"
                                                        class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{
                                                        $user->name }}</a>
                                                    <a href="#">
                                                        <!--begin::Svg Icon | path: icons/duotone/Design/Verified.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <path
                                                                    d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                                                    fill="#00A3FF" />
                                                                <path class="permanent"
                                                                    d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                                                    fill="white" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a href="/{{$user->username}}"
                                                        class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3">cthostel.com/{{$user->username}}</a>
                                                </div>
                                                <!--end::Name-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                                    <a href="#"
                                                        class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                        <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                                        <span class="svg-icon svg-icon-4 me-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path
                                                                        d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                    <path
                                                                        d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Agent
                                                    </a>
                                                    <a href="#"
                                                        class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                        <!--begin::Svg Icon | path: icons/duotone/Map/Marker1.svg-->

                                                        <!--end::Svg Icon-->{{ $user->school->name }}
                                                    </a>
                                                    <a href="#"
                                                        class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                        <!--begin::Svg Icon | path: icons/duotone/Communication/Mail-at.svg-->
                                                        <span class="svg-icon svg-icon-4 me-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <path
                                                                    d="M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z"
                                                                    fill="#000000" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->{{ $user->email }}
                                                    </a>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Actions-->
                                            <div class="modal fade" id="kt_modal_new_target" tabindex="-1"
                                                aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content rounded">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header pb-0 border-0 justify-content-end">
                                                            <!--begin::Close-->
                                                            <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                                data-bs-dismiss="modal">
                                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                            fill="#000000">
                                                                            <rect fill="#000000" x="0" y="7" width="16"
                                                                                height="2" rx="1" />
                                                                            <rect fill="#000000" opacity="0.5"
                                                                                transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                                x="0" y="7" width="16" height="2"
                                                                                rx="1" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>
                                                        <!--begin::Modal header-->
                                                        <!--begin::Modal body-->
                                                        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                                            <!--begin:Form-->
                                                            <form id="updateProfile" class="form">
                                                                <!--begin::Heading-->
                                                                <div class="mb-13 text-center">
                                                                    <!--begin::Title-->
                                                                    <h1 class="mb-3">Update Profile</h1>
                                                                    <!--end::Title-->
                                                                    <!--begin::Description-->

                                                                    <!--end::Description-->
                                                                </div>
                                                                <!--end::Heading-->
                                                                <!--begin::Input group-->

                                                                <input type='hidden' id='profileId'
                                                                    value="{{$user->id}}">
                                                                <div class="d-flex flex-column mb-8 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                        <span class="required">Username</span>
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Specify a target name for future usage and reference"></i>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <input type="text" required
                                                                        class="form-control form-control-solid"
                                                                        id='profilename' value='{{$user->username}}'
                                                                        name="name" />
                                                                </div>
                                                                <div class="d-flex flex-column mb-8 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                        <span class="required">Email</span>
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Specify a target name for future usage and reference"></i>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        id='profileemail' value='{{$user->email}}'
                                                                        name="email" />
                                                                </div>
                                                                <div class="d-flex flex-column mb-8 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                        <span class="required">Phone Number</span>
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Specify a target name for future usage and reference"></i>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <input required type="text"
                                                                        class="form-control form-control-solid"
                                                                        id='profilephone' value='{{$user->phone}}'
                                                                        name="phone" />
                                                                </div>
                                                                <div class="d-flex flex-column mb-8 fv-row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                        <span class="required">Profile Picture</span>
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Specify a target name for future usage and reference"></i>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <input accept="image/png,image/jpg, image/jpeg"
                                                                        required type="file"
                                                                        class="form-control form-control-solid"
                                                                        id='profilePic' name="profilePic" />
                                                                </div>

                                                                <div class="text-center">
                                                                    <button type="reset" id="kt_modal_new_target_cancel"
                                                                        class="btn btn-light me-3">Cancel</button>
                                                                    <button type="submit"
                                                                        id="kt_modal_new_target_submit"
                                                                        class="btn btn-primary">
                                                                        <span class="indicator-label">Submit</span>
                                                                        <span class="indicator-progress">Please wait...
                                                                            <span
                                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                    </button>
                                                                </div>
                                                                <!--end::Actions-->
                                                            </form>
                                                            <!--end:Form-->
                                                        </div>
                                                        <!--end::Modal body-->
                                                    </div>
                                                    <!--end::Modal content-->
                                                </div>
                                                <!--end::Modal dialog-->
                                            </div>
                                            <div class="d-flex my-4">

                                                <a href="/" class="btn btn-sm btn-dark me-3" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_new_target">My Profile</a>
                                                <a href="/" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_offer_a_deal">Home</a>
                                                <!--begin::Menu-->
                                                <div class="me-0">

                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                                        data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="menu-item px-3">
                                                            <div
                                                                class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                                Payments</div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-end"
                                                            data-kt-menu-flip="bottom, top">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">Subscription</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator my-2"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3">
                                                                        <!--begin::Switch-->
                                                                        <label
                                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input
                                                                                class="form-check-input w-30px h-20px"
                                                                                type="checkbox" value="1"
                                                                                checked="checked"
                                                                                name="notifications" />
                                                                            <!--end::Input-->
                                                                            <!--end::Label-->
                                                                            <span
                                                                                class="form-check-label text-muted fs-6">Recuring</span>
                                                                            <!--end::Label-->
                                                                        </label>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3">Settings</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Stats-->
                                        <div class="d-flex flex-wrap flex-stack">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                                <!--begin::Stats-->
                                                <div class="d-flex flex-wrap">
                                                    <!--begin::Stat-->
                                                    <div
                                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                        <!--begin::Number-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-up.svg-->
                                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <rect fill="#000000" opacity="0.5" x="11" y="5"
                                                                            width="2" height="14" rx="1" />
                                                                        <path
                                                                            d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                                                                            fill="#000000" fill-rule="nonzero" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <div class="fs-2 fw-bolder" data-kt-countup="true"
                                                                data-kt-countup-value="{{count($hostel)}}">
                                                                0</div>
                                                        </div>
                                                        <!--end::Number-->
                                                        <!--begin::Label-->
                                                        <div class="fw-bold fs-6 text-gray-400">Total Hostel</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Stat-->

                                                </div>
                                                <!--end::Stats-->
                                            </div>

                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Navs-->

                            </div>
                        </div>
                        @if($user->type == 'agent')
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">My hostels</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    {{-- <a href="{{route('album.create')}}"> --}}
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">

                                            <button type="button" class="btn btn-sm btn btn-primary">
                                                <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1"
                                                                fill="#000000" />
                                                            <rect x="14" y="5" width="5" height="5" rx="1"
                                                                fill="#000000" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5" rx="1"
                                                                fill="#000000" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5" rx="1"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                Create New Hostel
                                                <!--end::Svg Icon-->
                                            </button>
                                        </a>
                                        <!--begin::Menu 2-->

                                        <div class="modal fade" id="kt_modal_new_address" tabindex="-1"
                                            aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">

                                                    <form method='post' id='create_hostel_form'
                                                        enctype="multipart/form-data">@csrf
                                                        {{-- <form method='post'
                                                            action="{{route('album.storewithroute')}}"
                                                            enctype="multipart/form-data">@csrf --}}
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header" id="kt_modal_new_address_header">
                                                                <!--begin::Modal title-->
                                                                <h2>Add New Hostel</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                                    data-bs-dismiss="modal">
                                                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                                fill="#000000">
                                                                                <rect fill="#000000" x="0" y="7"
                                                                                    width="16" height="2" rx="1" />
                                                                                <rect fill="#000000" opacity="0.5"
                                                                                    transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                                    x="0" y="7" width="16" height="2"
                                                                                    rx="1" />
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </div>
                                                                <!--end::Close-->
                                                            </div>
                                                            <!--end::Modal header-->
                                                            <!--begin::Modal body-->
                                                            <div class="modal-body py-10 px-lg-17">
                                                                <!--begin::Scroll-->
                                                                <div class="scroll-y me-n7 pe-7"
                                                                    id="kt_modal_new_address_scroll"
                                                                    data-kt-scroll="true"
                                                                    data-kt-scroll-activate="{default: false, lg: true}"
                                                                    data-kt-scroll-max-height="auto"
                                                                    data-kt-scroll-dependencies="#kt_modal_new_address_header"
                                                                    data-kt-scroll-wrappers="#kt_modal_new_address_scroll"
                                                                    data-kt-scroll-offset="300px">
                                                                    <!--begin::Notice-->
                                                                    <!--begin::Notice-->
                                                                    <div
                                                                        class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                                                        <!--begin::Icon-->
                                                                        <!--begin::Svg Icon | path: icons/duotone/Code/Warning-1-circle.svg-->
                                                                        <span
                                                                            class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <circle fill="#000000" opacity="0.3"
                                                                                    cx="12" cy="12" r="10" />
                                                                                <rect fill="#000000" x="11" y="7"
                                                                                    width="2" height="8" rx="1" />
                                                                                <rect fill="#000000" x="11" y="16"
                                                                                    width="2" height="2" rx="1" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                        <!--end::Icon-->
                                                                        <!--begin::Wrapper-->
                                                                        <div class="d-flex flex-stack flex-grow-1">
                                                                            <!--begin::Content-->
                                                                            <div class="fw-bold">
                                                                                <h4 class="text-gray-900 fw-bolder">
                                                                                    Warning</h4>
                                                                                <div class="fs-6 text-gray-700">Please
                                                                                    input a
                                                                                    very friendly price while creating
                                                                                    hostel,
                                                                                    this will help us for getting you
                                                                                    customers
                                                                                    frequently
                                                                                    <a href="#"></a>
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Content-->
                                                                        </div>
                                                                        <!--end::Wrapper-->
                                                                    </div>
                                                                    <!--end::Notice-->
                                                                    <!--end::Notice-->
                                                                    <!--begin::Input group-->
                                                                    <div class="row mb-5">
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="required fs-5 fw-bold mb-2">Name</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <input required type="text" id='name'
                                                                                name='name'
                                                                                class="form-control form-control-solid"
                                                                                placeholder="" />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                            <!--end::Label-->
                                                                            <label
                                                                                class="required fs-5 fw-bold mb-2">Price</label>
                                                                            <!--end::Label-->
                                                                            <!--end::Input-->
                                                                            <input required type="number" id='price'
                                                                                name='price'
                                                                                class="form-control form-control-solid"
                                                                                placeholder="" />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="d-flex flex-column mb-5 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="required fs-5 fw-bold mb-2">Hostel
                                                                            Type</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <select name="hostel_type" id='hostel_type'
                                                                            class='form-control' tabindex="-1"
                                                                            aria-hidden="true">


                                                                            <option value='Single Room'>Single Room
                                                                            </option>
                                                                            <option value='Self-Contain'>Self- Contain
                                                                            </option>
                                                                            <option value='1 Bedroom Flat'>1 Bedroom
                                                                                Flat</option>
                                                                            <option value='2 Bedroom Flat'>2 Bedroom
                                                                                Flat</option>
                                                                            <option value='3 Bedroom Flat'>3 Bedroom
                                                                                Flat</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="d-flex flex-column mb-5 fv-row">

                                                                        <label
                                                                            class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                                            <span class="required">Resources
                                                                                Availability</span>

                                                                        </label>
                                                                        <select name="description[]" id='desc'
                                                                            multiple=""
                                                                            aria-label="Select Resources Available"
                                                                            data-control="select2"
                                                                            data-placeholder="Select Resources Available..."
                                                                            class="form-select mb-2 select2-hidden-accessible"
                                                                            data-select2-id="select2-data-10-t0j9"
                                                                            tabindex="-1" aria-hidden="true">

                                                                            <option value='Water Supply'>Water Supply
                                                                            </option>
                                                                            <option value='Wardrobe'>Wardrobe</option>
                                                                            <option value='Kitchen Cabinet'>Kitchen
                                                                                Cabinet</option>
                                                                            <option value='Generator'>Generator</option>
                                                                            <option value='Hostel Fence'>Hostel Fence
                                                                            </option>
                                                                        </select>

                                                                    </div>
                                                                    <div class="d-flex flex-column mb-5 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label
                                                                            class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                                            <span class="required">Location</span>

                                                                        </label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Select-->
                                                                        <select required name="category_id"
                                                                            id='category_id' data-control="select2"
                                                                            data-dropdown-parent="#kt_modal_new_address"
                                                                            data-placeholder="Select hostel location"
                                                                            class="form-select form-select-solid">
                                                                            <option value=''>Select Hostel Location
                                                                                @foreach ($category as $category)
                                                                            <option value='{{ $category->id }}'>
                                                                                {{ $category->name }}</option>
                                                                            @endforeach

                                                                        </select>
                                                                        <!--end::Select-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->

                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="d-flex flex-column mb-5 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="required fs-5 fw-bold mb-2">Hostel
                                                                            Image</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input accept="image/*" required
                                                                            class="form-control form-control-solid"
                                                                            id='image' type='file'
                                                                            placeholder="Display image of hostel"
                                                                            name="image" />
                                                                        <!--end::Input-->
                                                                    </div>

                                                                </div>
                                                                <!--end::Scroll-->
                                                            </div>
                                                            <!--end::Modal body-->
                                                            <!--begin::Modal footer-->
                                                            <div class="modal-footer flex-center">
                                                                <!--begin::Button-->
                                                                <button type="reset" id="kt_modal_new_address_cancel"
                                                                    class="btn btn-light me-3">Discard</button>
                                                                <!--end::Button-->
                                                                <!--begin::Button-->
                                                                <button type="submit" id='create_hostel'
                                                                    class="btn btn-primary">
                                                                    <span class="indicator-label">Submit</span>
                                                                    {{-- <span class="indicator-progress">Please wait...
                                                                        <span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                    --}}
                                                                </button>
                                                                <!--end::Button-->
                                                            </div>
                                                            <!--end::Modal footer-->
                                                        </form>
                                                        <!--end::Form-->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                    Actions
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start" data-kt-menu-flip="bottom, top">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="myTable table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                        <thead>
                                            <tr>
                                                <th scope="col">SN</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">View</th>
                                                <th scope="col">Upload</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Available</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($hostel as $index => $hostel)
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>
                                                <img src="{{asset('hostelimage/'.$hostel->image)}}"
                                                    style='height:100px;width:100px'>
                                            </td>
                                            <td> {{ $hostel->name }}<a href=""></a> </td>
                                            <td> {{ $hostel->description }}</td>
                                            <td> #{{ $hostel->price }}</td>
                                            <td>{{ $hostel->category->name }}</td>
                                            <td>@if($hostel->status == 1)

                                                <a title='View Hostel' href='/cthostel/{{$hostel->slug}}/{{$hostel->id}}'
                                                    class="btn btn-icon btn-bg-light btn-active-color-secondary btn-sm me-1">
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                    fill="#000000" />
                                                                <path
                                                                    d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </a>
                                                @endif

                                            </td>
                                            <td>
                                                <a id='upload_image_id' title='Upload Hostel Additional Images'
                                                    data-bs-toggle="modal" data-id='{{$hostel->id}}'
                                                    data-bs-target="#kt_modal_create_api_key"
                                                    class="btn btn-icon btn-bg-dark btn-color-primary btn-sm me-1">
                                                    {{-- <a href="{{ Route('upload.album', [$hostel->id]) }}"
                                                        class="btn btn-icon btn-bg-light btn-color-info btn-sm me-1">
                                                        --}}
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                        fill="#000000" />
                                                                    <path
                                                                        d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </a>
                                            </td>
                                            <div class="modal fade" id="kt_modal_create_api_key" tabindex="-1"
                                                aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header" id="kt_modal_create_api_key_header">
                                                            <!--begin::Modal title-->
                                                            <h2>Upload Hostel Additional Images</h2>
                                                            <!--end::Modal title-->
                                                            <!--begin::Close-->
                                                            <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                                data-bs-dismiss="modal">
                                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                            fill="#000000">
                                                                            <rect fill="#000000" x="0" y="7" width="16"
                                                                                height="2" rx="1" />
                                                                            <rect fill="#000000" opacity="0.5"
                                                                                transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                                x="0" y="7" width="16" height="2"
                                                                                rx="1" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>
                                                        <!--end::Modal header-->
                                                        <!--begin::Form-->
                                                        <form id="kt_upload_hostel_additional_images" class="form"
                                                            enctype="multipart/form-data" action="#">
                                                            {{-- <form action="{{route('uploadImagewithroute')}}"
                                                                enctype="multipart/form-data" class="form"
                                                                method="post"> --}}
                                                                @csrf
                                                                <!--begin::Modal body-->
                                                                <div class="modal-body py-10 px-lg-17">
                                                                    <!--begin::Scroll-->
                                                                    <div class="scroll-y me-n7 pe-7"
                                                                        id="kt_modal_create_api_key_scroll"
                                                                        data-kt-scroll="true"
                                                                        data-kt-scroll-activate="{default: false, lg: true}"
                                                                        data-kt-scroll-max-height="auto"
                                                                        data-kt-scroll-dependencies="#kt_modal_create_api_key_header"
                                                                        data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll"
                                                                        data-kt-scroll-offset="300px">
                                                                        <!--begin::Notice-->
                                                                        <div
                                                                            class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                                                                            <!--begin::Icon-->
                                                                            <!--begin::Svg Icon | path: icons/duotone/Code/Warning-1-circle.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24" version="1.1">
                                                                                    <circle fill="#000000" opacity="0.3"
                                                                                        cx="12" cy="12" r="10" />
                                                                                    <rect fill="#000000" x="11" y="7"
                                                                                        width="2" height="8" rx="1" />
                                                                                    <rect fill="#000000" x="11" y="16"
                                                                                        width="2" height="2" rx="1" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            <!--end::Icon-->
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex flex-stack flex-grow-1">
                                                                                <!--begin::Content-->
                                                                                <div class="fw-bold">
                                                                                    <h4 class="text-gray-900 fw-bolder">
                                                                                        Please Note!</h4>
                                                                                    <div class="fs-6 text-gray-700">It
                                                                                        is
                                                                                        advisable to upload three(3)
                                                                                        images
                                                                                        at a time for fast upload.
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Content-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </div>
                                                                        <!--end::Notice-->
                                                                        <!--begin::Input group-->
                                                                        <div class="mb-5 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="required fs-5 fw-bold mb-2">Images</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <input type='hidden' name='hostel_id'
                                                                                id='hostelimage' value='{{$hostel->id}}'>
                                                                            <input required
                                                                                accept="image/png,image/jpg, image/jpeg"
                                                                                type="file" multiple
                                                                                class="form-control form-control-solid"
                                                                                id='upload_file' name='hostelimage[]'
                                                                                placeholder="kitchen, toilet, room e.t.c" />
                                                                            <!--end::Input-->
                                                                        </div>

                                                                    </div>
                                                                    <!--end::Scroll-->
                                                                </div>

                                                                <!--end::Modal body-->
                                                                <!--begin::Modal footer-->
                                                                <div class="modal-footer flex-center">
                                                                    <!--begin::Button-->
                                                                    <button type="reset"
                                                                        id="kt_modal_create_api_key_cancel"
                                                                        class="btn btn-light me-3">Discard</button>
                                                                    <!--end::Button-->
                                                                    <!--begin::Button-->
                                                                    <button type="submit"
                                                                        id="kt_modal_create_api_key_submit"
                                                                        class="btn btn-primary">
                                                                        <span class="indicator-label">Upload</span>
                                                                        <span class="indicator-progress">Please wait...
                                                                            <span
                                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                    </button>

                                                                </div>
                                                                <div class='mb-5 fv-row'>

                                                                    <div style='padding: 15px 15px 15px 15px;margin: 20px 20px 20px 20px;background: #fff;overflow: visible;position: relative;'
                                                                        id='uploadedimagediv'>
                                                                    </div>

                                                                </div>
                                                                <!--end::Modal footer-->
                                                            </form>
                                                            <!--end::Form-->
                                                    </div>
                                                    <!--end::Modal content-->
                                                </div>
                                                <!--end::Modal dialog-->
                                            </div>

                                            <td>
                                                <a title='Edit Hostel' href="#" data-id='{{ $hostel->id }}'
                                                    id='edit_hostel'
                                                    class="btn btn-icon btn-bg-light btn-color-primary btn-sm me-1"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_new_target2">

                                                    {{-- <a href='{{Route("edit.album",[$hostel->id])}}'
                                                        class="btn btn-icon btn-bg-light btn-color-primary btn-sm me-1">
                                                        --}}
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <path
                                                                    d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                <path
                                                                    d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <input type='hidden' value='{{$user->school_id}}' id='sch_id' />
                                            </td>
                                            <div class="modal fade" id="kt_modal_new_target2" tabindex="-1"
                                                aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">

                                                    <!--begin::Modal content-->
                                                    <div class="modal-content rounded">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header pb-0 border-0 justify-content-end">
                                                            <!--begin::Close-->
                                                            <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                                data-bs-dismiss="modal">
                                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                            fill="#000000">
                                                                            <rect fill="#000000" x="0" y="7" width="16"
                                                                                height="2" rx="1" />
                                                                            <rect fill="#000000" opacity="0.5"
                                                                                transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                                x="0" y="7" width="16" height="2"
                                                                                rx="1" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>
                                                        <div class="modal-header" style
                                                            id="kt_modal_new_address_header">
                                                            <!--begin::Modal title-->
                                                            <h2>Edit Hostel</h2>

                                                        </div>

                                                        <form id='update_hostel' method="POST"
                                                            enctype="multipart/form-data">@csrf
                                                            {{ method_field('PUT') }}


                                                            <div class="modal-body py-10 px-lg-17">
                                                                <!--begin::Scroll-->
                                                                <div class="scroll-y me-n7 pe-7"
                                                                    id="kt_modal_new_address_scroll"
                                                                    data-kt-scroll="true"
                                                                    data-kt-scroll-activate="{default: false, lg: true}"
                                                                    data-kt-scroll-max-height="auto"
                                                                    data-kt-scroll-dependencies="#kt_modal_new_address_header"
                                                                    data-kt-scroll-wrappers="#kt_modal_new_address_scroll"
                                                                    data-kt-scroll-offset="300px">
                                                                    <!--begin::Notice-->
                                                                    <!--begin::Notice-->
                                                                    <div
                                                                        class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                                                        <!--begin::Icon-->
                                                                        <!--begin::Svg Icon | path: icons/duotone/Code/Warning-1-circle.svg-->
                                                                        <span
                                                                            class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <circle fill="#000000" opacity="0.3"
                                                                                    cx="12" cy="12" r="10" />
                                                                                <rect fill="#000000" x="11" y="7"
                                                                                    width="2" height="8" rx="1" />
                                                                                <rect fill="#000000" x="11" y="16"
                                                                                    width="2" height="2" rx="1" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                        <!--end::Icon-->
                                                                        <!--begin::Wrapper-->
                                                                        <div class="d-flex flex-stack flex-grow-1">
                                                                            <!--begin::Content-->
                                                                            <div class="fw-bold">
                                                                                <h4 class="text-gray-900 fw-bolder">
                                                                                    Warning</h4>
                                                                                <div class="fs-6 text-gray-700">
                                                                                    Please input a very friendly
                                                                                    price while creating hostel,
                                                                                    this will help us in getting
                                                                                    you customers frequently
                                                                                    <a href="#"></a>
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Content-->
                                                                        </div>
                                                                        <!--end::Wrapper-->
                                                                    </div>
                                                                    <!--end::Notice-->
                                                                    <!--end::Notice-->
                                                                    <!--begin::Input group-->
                                                                    <div class="row mb-5">
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="required fs-5 fw-bold mb-2">Name</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <input required type="text" name='name'
                                                                                id='edit_name'
                                                                                class="form-control form-control-solid"
                                                                                placeholder="" />
                                                                            <input type='hidden' id='type'
                                                                                value='hostel' />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                            <!--end::Label-->
                                                                            <label
                                                                                class="required fs-5 fw-bold mb-2">Price</label>
                                                                            <!--end::Label-->
                                                                            <!--end::Input-->
                                                                            <input required type="number"
                                                                                id='edit_price' name='price'
                                                                                class="form-control form-control-solid"
                                                                                placeholder="" />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>

                                                                    <div class="d-flex flex-column mb-5 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="required fs-5 fw-bold mb-2">Hostel
                                                                            Type</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <select name="edit_hostel_type" required
                                                                            id='edit_hostel_type' class='form-control'
                                                                            tabindex="-1" aria-hidden="true">


                                                                            <option value='Single Room'>Single Room
                                                                            </option>
                                                                            <option value='Self-Contain'>Self- Contain
                                                                            </option>
                                                                            <option value='1 Bedroom Flat'>1 Bedroom
                                                                                Flat</option>
                                                                            <option value='2 Bedroom Flat'>2 Bedroom
                                                                                Flat</option>
                                                                            <option value='3 Bedroom Flat'>3 Bedroom
                                                                                Flat</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="d-flex flex-column mb-5 fv-row">

                                                                        <label
                                                                            class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                                            <span class="required">Resources
                                                                                Availability</span>

                                                                        </label>
                                                                        <select name="description[]" id='edit_desc'
                                                                            multiple=""
                                                                            aria-label="Select Resources Available"
                                                                            data-control="select2"
                                                                            data-placeholder="Select Resources Available..."
                                                                            class="form-select mb-2 select2-hidden-accessible"
                                                                            data-select2-id="select2-data-10-t0j8"
                                                                            tabindex="-1" aria-hidden="true" required>


                                                                            <option value='Water Supply'>Water Supply
                                                                            </option>
                                                                            <option value='Wardrobe'>Wardrobe</option>
                                                                            <option value='Kitchen Cabinet'>Kitchen
                                                                                Cabinet</option>
                                                                            <option value='Generator'>Generator</option>
                                                                            <option value='Hostel Fence'>Hostel Fence
                                                                            </option>
                                                                        </select>



                                                                    </div>




                                                                    <div class="d-flex flex-column mb-5 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label
                                                                            class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                                            <span class="required">Location</span>
                                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Your payment statements may very based on selected country"></i>
                                                                        </label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Select-->
                                                                        <select name="category_id" id='edit_category_id'
                                                                            data-control="select2" required
                                                                            data-placeholder="Select hostel location"
                                                                            class="form-select form-select-solid">
                                                                            <option value=''>Select Hostel Location
                                                                            </option>

                                                                        </select>
                                                                        <!--end::Select-->
                                                                    </div>
                                                                    <input type='hidden' id='id' value=''>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->

                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="d-flex flex-column mb-5 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="required fs-5 fw-bold mb-2">Hostel
                                                                            Image</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input accept="image/png,image/jpg, image/jpeg"
                                                                            required
                                                                            class="form-control form-control-solid"
                                                                            type='file' id='edit_image'
                                                                            placeholder="Display image of hostel"
                                                                            name="image" />
                                                                        <!--end::Input-->
                                                                    </div>

                                                                </div>
                                                                <!--end::Scroll-->
                                                            </div>
                                                            <!--end::Modal body-->
                                                            <!--begin::Modal footer-->
                                                            <div class="modal-footer flex-center">
                                                                <!--begin::Button-->
                                                                <button type="reset" id="kt_modal_new_address_cancel"
                                                                    class="btn btn-light me-3">Discard</button>
                                                                <!--end::Button-->
                                                                <!--begin::Button-->
                                                                <button type="submit" id="kt_modal_new_address_submit"
                                                                    class="btn btn-primary">
                                                                    <span class="indicator-label">Submit</span>
                                                                    <span class="indicator-progress">Please wait...
                                                                        <span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                </button>
                                                                <!--end::Button-->
                                                            </div>
                                                            <!--end::Modal footer-->
                                                        </form>

                                                        {{--
                                                    </div> --}}
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                </div>
                                <td>
                                    <label
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input title='Hostel Availability' class="status_id form-check-input"
                                            data-id='{{$hostel->id}}' name="github" type="checkbox" value="1"
                                            @if($hostel->status == 1)checked='checked'@else
                                        @endif>

                                    </label>
                                </td>
                                <td>
                                    <a title='Set Hostel Geolocation Address' class='fa fa-map-marker fa-2x'
                                        href='{{route("address",[$hostel->id])}}'>

                                    </a>
                                </td>
                                <td>
                                    {{-- <form action="{{ Route('destroy.album', [$hostel->id]) }}" --}} <form
                                        id='delete_hostel' data-id="{{$hostel->id}}"
                                        class="btn btn-icon btn-bg-light btn-color-danger btn-sm">
                                        @csrf
                                        {{ method_field('delete') }}
                                        <input type='hidden' id='delete_id' value='{{$hostel->id}}'>
                                        <span class="svg-icon svg-icon-3">
                                            <svg title='Delete Hostel' xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                    <path
                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                    </form>
                                </td>

                                </tr>
                                @endforeach
                                </tbody>

                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>

                        @elseif($user->type == 'Vendor')
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">My Properties</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    {{-- <a href="{{route('album.create')}}"> --}}
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">

                                            <button type="button" class="btn btn-sm btn btn-primary">
                                                <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1"
                                                                fill="#000000" />
                                                            <rect x="14" y="5" width="5" height="5" rx="1"
                                                                fill="#000000" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5" rx="1"
                                                                fill="#000000" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5" rx="1"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                Create New Property
                                                <!--end::Svg Icon-->
                                            </button>
                                        </a>
                                        <!--begin::Menu 2-->

                                        <div class="modal fade" id="kt_modal_new_address" tabindex="-1"
                                            aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">

                                                    <form method='post' id='create_hostel_form'
                                                        enctype="multipart/form-data">@csrf
                                                        {{-- <form method='post'
                                                            action="{{route('album.storewithroute')}}"
                                                            enctype="multipart/form-data">@csrf --}}
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header" id="kt_modal_new_address_header">
                                                                <!--begin::Modal title-->
                                                                <h2>Add New Property</h2>
                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                                    data-bs-dismiss="modal">
                                                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                                fill="#000000">
                                                                                <rect fill="#000000" x="0" y="7"
                                                                                    width="16" height="2" rx="1" />
                                                                                <rect fill="#000000" opacity="0.5"
                                                                                    transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                                    x="0" y="7" width="16" height="2"
                                                                                    rx="1" />
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </div>
                                                                <!--end::Close-->
                                                            </div>
                                                            <!--end::Modal header-->
                                                            <!--begin::Modal body-->
                                                            <div class="modal-body py-10 px-lg-17">
                                                                <!--begin::Scroll-->
                                                                <div class="scroll-y me-n7 pe-7"
                                                                    id="kt_modal_new_address_scroll"
                                                                    data-kt-scroll="true"
                                                                    data-kt-scroll-activate="{default: false, lg: true}"
                                                                    data-kt-scroll-max-height="auto"
                                                                    data-kt-scroll-dependencies="#kt_modal_new_address_header"
                                                                    data-kt-scroll-wrappers="#kt_modal_new_address_scroll"
                                                                    data-kt-scroll-offset="300px">
                                                                    <!--begin::Notice-->
                                                                    <!--begin::Notice-->
                                                                    <div
                                                                        class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                                                        <!--begin::Icon-->
                                                                        <!--begin::Svg Icon | path: icons/duotone/Code/Warning-1-circle.svg-->
                                                                        <span
                                                                            class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <circle fill="#000000" opacity="0.3"
                                                                                    cx="12" cy="12" r="10" />
                                                                                <rect fill="#000000" x="11" y="7"
                                                                                    width="2" height="8" rx="1" />
                                                                                <rect fill="#000000" x="11" y="16"
                                                                                    width="2" height="2" rx="1" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                        <!--end::Icon-->
                                                                        <!--begin::Wrapper-->
                                                                        <div class="d-flex flex-stack flex-grow-1">
                                                                            <!--begin::Content-->
                                                                            <div class="fw-bold">
                                                                                <h4 class="text-gray-900 fw-bolder">
                                                                                    Warning</h4>
                                                                                <div class="fs-6 text-gray-700">Please
                                                                                    input a
                                                                                    very friendly price while creating
                                                                                    properties,
                                                                                    this will help us for getting you
                                                                                    customers
                                                                                    frequently
                                                                                    <a href="#"></a>
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Content-->
                                                                        </div>
                                                                        <!--end::Wrapper-->
                                                                    </div>
                                                                    <!--end::Notice-->
                                                                    <!--end::Notice-->
                                                                    <!--begin::Input group-->
                                                                    <div class="row mb-5">
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="required fs-5 fw-bold mb-2">Name</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <input required type="text" id='name'
                                                                                name='name'
                                                                                class="form-control form-control-solid"
                                                                                placeholder="" />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                            <!--end::Label-->
                                                                            <label
                                                                                class="required fs-5 fw-bold mb-2">Price</label>
                                                                            <!--end::Label-->
                                                                            <!--end::Input-->
                                                                            <input required type="number" id='price'
                                                                                name='price'
                                                                                class="form-control form-control-solid"
                                                                                placeholder="" />
                                                                            <input type='hidden' id='type'
                                                                                value='property' />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="d-flex flex-column mb-5 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label
                                                                            class="required fs-5 fw-bold mb-2">Property
                                                                            Type</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <select required name="hostel_type"
                                                                            id='hostel_type' class='form-control'
                                                                            tabindex="-1" aria-hidden="true">

                                                                            <option value=''>--Select Type--</option>
                                                                            <option value='Furnitures'>Furnitures
                                                                            </option>
                                                                            <option value='Electronics'>Electronics
                                                                            </option>
                                                                            <option value='Kitchen'>Kitchen Utensils
                                                                            </option>
                                                                            <option value='Decorations'>Decorations
                                                                            </option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-12 fv-row">
                                                                        <!--end::Label-->
                                                                        <label
                                                                            class="required fs-5 fw-bold mb-2">Description</label>
                                                                        <!--end::Label-->
                                                                        <!--end::Input-->
                                                                        <textarea required type="text" id='desc'
                                                                            name='description'
                                                                            class="form-control form-control-solid"
                                                                            placeholder=""></textarea>
                                                                        <!--end::Input-->
                                                                    </div>

                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->

                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="d-flex flex-column mb-5 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label
                                                                            class="required fs-5 fw-bold mb-2">Display
                                                                            Image</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input accept="image/*" required
                                                                            class="form-control form-control-solid"
                                                                            id='image' type='file'
                                                                            placeholder="Display image of hostel"
                                                                            name="image">
                                                                        <!--end::Input-->
                                                                    </div>

                                                                </div>
                                                                <!--end::Scroll-->
                                                            </div>
                                                            <!--end::Modal body-->
                                                            <!--begin::Modal footer-->
                                                            <div class="modal-footer flex-center">
                                                                <!--begin::Button-->
                                                                <button type="reset" id="kt_modal_new_address_cancel"
                                                                    class="btn btn-light me-3">Discard</button>
                                                                <!--end::Button-->
                                                                <!--begin::Button-->
                                                                <button type="submit" id='create_hostel'
                                                                    class="btn btn-primary">
                                                                    <span class="indicator-label">Submit</span>
                                                                    {{-- <span class="indicator-progress">Please wait...
                                                                        <span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                    --}}
                                                                </button>
                                                                <!--end::Button-->
                                                            </div>
                                                            <!--end::Modal footer-->
                                                        </form>
                                                        <!--end::Form-->
                                                </div>
                                            </div>
                                        </div>


                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="myTable table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                        <thead>
                                            <tr>
                                                <th scope="col">SN</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Price</th>

                                                <th scope="col">View</th>
                                                <th scope="col">Upload</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Available</th>

                                                <th scope="col">Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($hostel as $index => $hostel)
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>
                                                <img src="{{asset('hostelimage/'.$hostel->image)}}"
                                                    style='height:100px;width:100px'>
                                            </td>
                                            <td> {{ $hostel->name }}<a href=""></a> </td>
                                            <td> {{ $hostel->description }}</td>
                                            <td> #{{ $hostel->price }}</td>

                                            <td>@if($hostel->status == 1)

                                                <a title='View Hostel' href='/cthostel/{{$hostel->slug}}/{{$hostel->id}}'
                                                    class="btn btn-icon btn-bg-light btn-active-color-secondary btn-sm me-1">
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                    fill="#000000" />
                                                                <path
                                                                    d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </a>
                                                @endif

                                            </td>
                                            <td>
                                                <a id='upload_image_id' title='Upload Hostel Additional Images'
                                                    data-bs-toggle="modal" data-id='{{$hostel->id}}'
                                                    data-bs-target="#kt_modal_create_api_key"
                                                    class="btn btn-icon btn-bg-dark btn-color-primary btn-sm me-1">
                                                    {{-- <a href="{{ Route('upload.album', [$hostel->id]) }}"
                                                        class="btn btn-icon btn-bg-light btn-color-info btn-sm me-1">
                                                        --}}
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                        fill="#000000" />
                                                                    <path
                                                                        d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </a>
                                            </td>
                                            <div class="modal fade" id="kt_modal_create_api_key" tabindex="-1"
                                                aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header" id="kt_modal_create_api_key_header">
                                                            <!--begin::Modal title-->
                                                            <h2>Upload Hostel Additional Images</h2>
                                                            <!--end::Modal title-->
                                                            <!--begin::Close-->
                                                            <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                                data-bs-dismiss="modal">
                                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                            fill="#000000">
                                                                            <rect fill="#000000" x="0" y="7" width="16"
                                                                                height="2" rx="1" />
                                                                            <rect fill="#000000" opacity="0.5"
                                                                                transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                                x="0" y="7" width="16" height="2"
                                                                                rx="1" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>
                                                        <!--end::Modal header-->
                                                        <!--begin::Form-->
                                                        <form id="kt_upload_hostel_additional_images2" class="form"
                                                            enctype="multipart/form-data" action="#">
                                                            {{-- <form action="{{route('uploadImagewithroute')}}"
                                                                enctype="multipart/form-data" class="form"
                                                                method="post"> --}}
                                                                @csrf
                                                                <!--begin::Modal body-->
                                                                <div class="modal-body py-10 px-lg-17">
                                                                    <!--begin::Scroll-->
                                                                    <div class="scroll-y me-n7 pe-7"
                                                                        id="kt_modal_create_api_key_scroll"
                                                                        data-kt-scroll="true"
                                                                        data-kt-scroll-activate="{default: false, lg: true}"
                                                                        data-kt-scroll-max-height="auto"
                                                                        data-kt-scroll-dependencies="#kt_modal_create_api_key_header"
                                                                        data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll"
                                                                        data-kt-scroll-offset="300px">
                                                                        <!--begin::Notice-->
                                                                        <div
                                                                            class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                                                                            <!--begin::Icon-->
                                                                            <!--begin::Svg Icon | path: icons/duotone/Code/Warning-1-circle.svg-->
                                                                            <span
                                                                                class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24" version="1.1">
                                                                                    <circle fill="#000000" opacity="0.3"
                                                                                        cx="12" cy="12" r="10" />
                                                                                    <rect fill="#000000" x="11" y="7"
                                                                                        width="2" height="8" rx="1" />
                                                                                    <rect fill="#000000" x="11" y="16"
                                                                                        width="2" height="2" rx="1" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            <!--end::Icon-->
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex flex-stack flex-grow-1">
                                                                                <!--begin::Content-->
                                                                                <div class="fw-bold">
                                                                                    <h4 class="text-gray-900 fw-bolder">
                                                                                        Please Note!</h4>
                                                                                    <div class="fs-6 text-gray-700">It
                                                                                        is
                                                                                        advisable to upload three(3)
                                                                                        images
                                                                                        at a time for fast upload.
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Content-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </div>
                                                                        <!--end::Notice-->
                                                                        <!--begin::Input group-->
                                                                        <div class="mb-5 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="required fs-5 fw-bold mb-2">Images</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <input type='hidden' name='hostel_id'
                                                                                id='hostelimage' value='{{$hostel->id}}'>
                                                                            <input required
                                                                                accept="image/png,image/jpg, image/jpeg"
                                                                                type="file" multiple
                                                                                class="form-control form-control-solid"
                                                                                id='upload_file' name='hostelimage[]'
                                                                                placeholder="kitchen, toilet, room e.t.c" />
                                                                            <!--end::Input-->
                                                                        </div>

                                                                    </div>
                                                                    <!--end::Scroll-->
                                                                </div>

                                                                <!--end::Modal body-->
                                                                <!--begin::Modal footer-->
                                                                <div class="modal-footer flex-center">
                                                                    <!--begin::Button-->
                                                                    <button type="reset"
                                                                        id="kt_modal_create_api_key_cancel"
                                                                        class="btn btn-light me-3">Discard</button>
                                                                    <!--end::Button-->
                                                                    <!--begin::Button-->
                                                                    <button type="submit"
                                                                        id="kt_modal_create_api_key_submit"
                                                                        class="btn btn-primary">
                                                                        <span class="indicator-label">Upload</span>
                                                                        <span class="indicator-progress">Please wait...
                                                                            <span
                                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                    </button>

                                                                </div>
                                                                <div class='mb-5 fv-row'>

                                                                    <div style='padding: 15px 15px 15px 15px;margin: 20px 20px 20px 20px;background: #fff;overflow: visible;position: relative;'
                                                                        id='uploadedimagediv'>
                                                                    </div>

                                                                </div>
                                                                <!--end::Modal footer-->
                                                            </form>
                                                            <!--end::Form-->
                                                    </div>
                                                    <!--end::Modal content-->
                                                </div>
                                                <!--end::Modal dialog-->
                                            </div>

                                            <td>
                                                <a title='Edit Hostel' href="#" data-id='{{ $hostel->id }}'
                                                    id='edit_hostel'
                                                    class="btn btn-icon btn-bg-light btn-color-primary btn-sm me-1"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_new_target2">

                                                    {{-- <a href='{{Route("edit.album",[$hostel->id])}}'
                                                        class="btn btn-icon btn-bg-light btn-color-primary btn-sm me-1">
                                                        --}}
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <path
                                                                    d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                <path
                                                                    d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <input type='hidden' value='{{$user->school_id}}' id='sch_id' />
                                            </td>
                                            <div class="modal fade" id="kt_modal_new_target2" tabindex="-1"
                                                aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">

                                                    <!--begin::Modal content-->
                                                    <div class="modal-content rounded">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header pb-0 border-0 justify-content-end">
                                                            <!--begin::Close-->
                                                            <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                                data-bs-dismiss="modal">
                                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                            fill="#000000">
                                                                            <rect fill="#000000" x="0" y="7" width="16"
                                                                                height="2" rx="1" />
                                                                            <rect fill="#000000" opacity="0.5"
                                                                                transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                                x="0" y="7" width="16" height="2"
                                                                                rx="1" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>
                                                        <div class="modal-header" style
                                                            id="kt_modal_new_address_header">
                                                            <!--begin::Modal title-->
                                                            <h2>Edit Hostel</h2>

                                                        </div>

                                                        <form id='update_hostel' method="POST"
                                                            enctype="multipart/form-data">@csrf
                                                            {{ method_field('PUT') }}


                                                            <div class="modal-body py-10 px-lg-17">
                                                                <!--begin::Scroll-->
                                                                <div class="scroll-y me-n7 pe-7"
                                                                    id="kt_modal_new_address_scroll"
                                                                    data-kt-scroll="true"
                                                                    data-kt-scroll-activate="{default: false, lg: true}"
                                                                    data-kt-scroll-max-height="auto"
                                                                    data-kt-scroll-dependencies="#kt_modal_new_address_header"
                                                                    data-kt-scroll-wrappers="#kt_modal_new_address_scroll"
                                                                    data-kt-scroll-offset="300px">
                                                                    <!--begin::Notice-->
                                                                    <!--begin::Notice-->
                                                                    <div
                                                                        class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                                                        <!--begin::Icon-->
                                                                        <!--begin::Svg Icon | path: icons/duotone/Code/Warning-1-circle.svg-->
                                                                        <span
                                                                            class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <circle fill="#000000" opacity="0.3"
                                                                                    cx="12" cy="12" r="10" />
                                                                                <rect fill="#000000" x="11" y="7"
                                                                                    width="2" height="8" rx="1" />
                                                                                <rect fill="#000000" x="11" y="16"
                                                                                    width="2" height="2" rx="1" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                        <!--end::Icon-->
                                                                        <!--begin::Wrapper-->
                                                                        <div class="d-flex flex-stack flex-grow-1">
                                                                            <!--begin::Content-->
                                                                            <div class="fw-bold">
                                                                                <h4 class="text-gray-900 fw-bolder">
                                                                                    Warning</h4>
                                                                                <div class="fs-6 text-gray-700">
                                                                                    Please input a very friendly
                                                                                    price while creating hostel,
                                                                                    this will help us in getting
                                                                                    you customers frequently
                                                                                    <a href="#"></a>
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Content-->
                                                                        </div>
                                                                        <!--end::Wrapper-->
                                                                    </div>
                                                                    <!--end::Notice-->
                                                                    <!--end::Notice-->
                                                                    <!--begin::Input group-->
                                                                    <div class="row mb-5">
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="required fs-5 fw-bold mb-2">Name</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <input required type="text" name='name'
                                                                                id='edit_name'
                                                                                class="form-control form-control-solid"
                                                                                placeholder="" />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                            <!--end::Label-->
                                                                            <label
                                                                                class="required fs-5 fw-bold mb-2">Price</label>
                                                                            <!--end::Label-->
                                                                            <!--end::Input-->
                                                                            <input required type="number"
                                                                                id='edit_price' name='price'
                                                                                class="form-control form-control-solid"
                                                                                placeholder="" />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>

                                                                    <div class="d-flex flex-column mb-5 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="required fs-5 fw-bold mb-2">Hostel
                                                                            Type</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <select name="edit_hostel_type" required
                                                                            id='edit_hostel_type' class='form-control'
                                                                            tabindex="-1" aria-hidden="true">


                                                                            <option value='Single Room'>Single Room
                                                                            </option>
                                                                            <option value='Self-Contain'>Self- Contain
                                                                            </option>
                                                                            <option value='1 Bedroom Flat'>1 Bedroom
                                                                                Flat</option>
                                                                            <option value='2 Bedroom Flat'>2 Bedroom
                                                                                Flat</option>
                                                                            <option value='3 Bedroom Flat'>3 Bedroom
                                                                                Flat</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="d-flex flex-column mb-5 fv-row">

                                                                        <label
                                                                            class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                                            <span class="required">Resources
                                                                                Availability</span>

                                                                        </label>
                                                                        <select name="description[]" id='edit_desc'
                                                                            multiple=""
                                                                            aria-label="Select Resources Available"
                                                                            data-control="select2"
                                                                            data-placeholder="Select Resources Available..."
                                                                            class="form-select mb-2 select2-hidden-accessible"
                                                                            data-select2-id="select2-data-10-t0j8"
                                                                            tabindex="-1" aria-hidden="true" required>


                                                                            <option value='Water Supply'>Water Supply
                                                                            </option>
                                                                            <option value='Wardrobe'>Wardrobe</option>
                                                                            <option value='Kitchen Cabinet'>Kitchen
                                                                                Cabinet</option>
                                                                            <option value='Generator'>Generator</option>
                                                                            <option value='Hostel Fence'>Hostel Fence
                                                                            </option>
                                                                        </select>



                                                                    </div>




                                                                    <div class="d-flex flex-column mb-5 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label
                                                                            class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                                            <span class="required">Location</span>
                                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                                data-bs-toggle="tooltip"
                                                                                title="Your payment statements may very based on selected country"></i>
                                                                        </label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Select-->
                                                                        <select name="category_id" id='edit_category_id'
                                                                            data-control="select2" required
                                                                            data-placeholder="Select hostel location"
                                                                            class="form-select form-select-solid">
                                                                            <option value=''>Select Hostel Location
                                                                            </option>

                                                                        </select>
                                                                        <!--end::Select-->
                                                                    </div>
                                                                    <input type='hidden' id='id' value=''>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->

                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="d-flex flex-column mb-5 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="required fs-5 fw-bold mb-2">Hostel
                                                                            Image</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input accept="image/png,image/jpg, image/jpeg"
                                                                            required
                                                                            class="form-control form-control-solid"
                                                                            type='file' id='edit_image'
                                                                            placeholder="Display image of hostel"
                                                                            name="image" />
                                                                        <!--end::Input-->
                                                                    </div>

                                                                </div>
                                                                <!--end::Scroll-->
                                                            </div>
                                                            <!--end::Modal body-->
                                                            <!--begin::Modal footer-->
                                                            <div class="modal-footer flex-center">
                                                                <!--begin::Button-->
                                                                <button type="reset" id="kt_modal_new_address_cancel"
                                                                    class="btn btn-light me-3">Discard</button>
                                                                <!--end::Button-->
                                                                <!--begin::Button-->
                                                                <button type="submit" id="kt_modal_new_address_submit"
                                                                    class="btn btn-primary">
                                                                    <span class="indicator-label">Submit</span>
                                                                    <span class="indicator-progress">Please wait...
                                                                        <span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                </button>
                                                                <!--end::Button-->
                                                            </div>
                                                            <!--end::Modal footer-->
                                                        </form>

                                                        {{--
                                                    </div> --}}
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                </div>
                                <td>
                                    <label
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input title='Hostel Availability' class="status_id form-check-input"
                                            data-id='{{$hostel->id}}' name="github" type="checkbox" value="1"
                                            @if($hostel->status == 1)checked='checked'@else
                                        @endif>

                                    </label>
                                </td>

                                <td>
                                    {{-- <form action="{{ Route('destroy.album', [$hostel->id]) }}" --}} <form
                                        id='delete_hostel' data-id="{{$hostel->id}}"
                                        class="btn btn-icon btn-bg-light btn-color-danger btn-sm">
                                        @csrf
                                        {{ method_field('delete') }}
                                        <input type='hidden' id='delete_id' value='{{$hostel->id}}'>
                                        <span class="svg-icon svg-icon-3">
                                            <svg title='Delete Hostel' xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                    <path
                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                    </form>
                                </td>

                                </tr>
                                @endforeach
                                </tbody>

                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->

                        @else

                        @endif


                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2021©</span>
                            <a target="_blank" class="text-gray-800 text-hover-primary">CTHostel</a>
                        </div>
                        <!--end::Copyright-->

                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->

   
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
</body>

    <script src="{{ asset('backend/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('backend/js/scripts.bundle.js') }}"></script>

    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('backend/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('backend/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('backend/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('backend/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('backend/js/custom/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('backend/js/custom/intro.js') }}"></script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets2/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets2/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('js/sweetalert/dist/sweetalert.min.js') }}"></script>

    <script src="{{ asset('js/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js\requestController.js') }}"></script>
    <script src="{{ asset('js\formController.js') }}"></script>


    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>

    <script src="{{ asset('assets2/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets2/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets2/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets2/js/custom/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets2/js/custom/intro.js') }}"></script>
    <script>
        $(document).ready(function() {
             
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $(".mytable").DataTable({
            pageLength: 5,
            filter: true,
            deferRender: true,

            "searching": true,
        });
                    $("#image").on('change', function(e) {

                            var file = e.target.files[0];
                            console.log(file);
                       
				   $("#create_hostel_form").submit(async function(e) {
                       e.preventDefault()
                       Swal.fire('Creating property, please wait...')
                            //  $("#create_hostel").attr('disabled',true);
                            var fd = new FormData();

                            // Append data 
                            fd.append('name', $("#name").val());
                            fd.append('hostel_type', $("#hostel_type").val());
                            fd.append('description', $("#desc").val());
                            fd.append('price', $("#price").val());
                            fd.append('type', $("#type").val());
                            fd.append('category_id', $("#category_id").val());
                            fd.append('school_id', $("#sch_id").val());
                            fd.append('image', file);

                            console.log(fd, 'this is the fd');

                            $.ajax({
                                type: 'POST',
                                url: "../album/albums/store",
                                data: fd,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    swal.close()
                                    Swal.fire("Success", 'Hostel/Property created successfully', 'success');
                                    console.log(data)
									window.location.reload();

                                },
                                error: function(data) {
                                    console.log(data);
                                    swal.close()
                                    Swal.fire('Oops', 'Hostel/Property not created','error')
                                }
                            });
						});

                        });

						$("#edit_image").on('change', function(e) {

						var file = e.target.files[0];
						console.log(file);
				$("#update_hostel").on('submit', async function(e){
                e.preventDefault();
                Swal.fire('Updating hostel, please wait...');
                $("#kt_modal_new_address_submit").attr('disabled',true)
							fd = new FormData();
							fd.append('id',  $("#id").val());
							fd.append('name', $("#edit_name").val());
                            fd.append('description', $("#edit_desc").val());
                            fd.append('hostel_type', $("#hostel_type").val());
                            fd.append('price', $("#edit_price").val());
                            fd.append('category_id', $("#edit_category_id").val());
                            fd.append('image', file);

                            console.log(fd, 'this is the fd');

                            $.ajax({
                                type: 'POST',
                                url: "../album/albums/update",
                                data: fd,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    swal.close()
                                    Swal.fire("Success", 'Hostel Updated successfully', 'success');
                                    console.log(data)
									window.location.reload();


                                },
                                error: function(data) {
                                    console.log(data);
                                    Swal.fire("Oops!", 'Image size is too big', 'error');
                                }
                            });
                            });
            });
				$('body').on('click', '#upload_image_id', function () {
				var id = $(this).data('id');
				$("#hostelimage").val(id);

				$.get('{{ route('loaduploadedimages') }}?id=' + id, function (data) {
				
                    console.log(data)
                    
                    $("#uploadedimagediv").empty()
					for(i = 0;i<= data.length-1;i++) {
			console.log(data[i].image,'the image')
                    
                    $("#uploadedimagediv").append("<a style='position:absolute;background:red;display: inline-block;border:2px solid white;padding:5px;' class='deleteuploaded btn btn-danger btn-sm' data-id='"+data[i].id+"'>&times;</a><img class='imgpreview' style='width:100px;height:100px;margin:5px;box-shadow: 5px 5px 2px #888888' src='/public/images/"+data[i].image+"'>")
					
                    }
			
				 });

			
			});
           
            
            $(document).on("click",".deleteuploaded",function() {
              
              var id = $(this).data('id')
            

             
            console.log(id)
            var token = $("meta[name='csrf-token']").attr("content");
            var el = this;
            // alert(user_id);
            resetImage(el,id);
            });


        async function resetImage(el,id) {
                const willUpdate = await Swal.fire({
                    title: "Confirm Hostel/Property Image Delete",
                    text: `Delete this particular image from the additional images of this hostel/property?`,
                    icon: "warning",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes!",
                    showCancelButton: true,
                    buttons: ["Cancel", "Yes, Delete"]
                });
                if (willUpdate) {
                    //performReset()
                    deleteImage(el,id);
                } else {
                    Swal.fire("Image will not be deleted  :)");
                }
            }


        function deleteImage(el,id)
            {
               
                try {
                        $.get('{{ route('deleteuploadedimages') }}?id=' + id,
                        function (data, status) {
                            console.log(status);
                            console.table(data);
                            if( status === "success") {
                               
                                let alert = Swal.fire('success',"Image successfully deleted!.",'success');
                                $(el).closest( ".imgpreview" ).remove();
                                $(el).next( ".imgpreview" ).remove();
                                $(el).closest( "a" ).remove();
                            }
                        }
                    );
                } catch (e) {
                    let alert = Swal.fire(e.message);
                }
            }

  
			$("#upload_file").on('change', function(e) {
                thecount = e.target.files.length;
                
                files = []
                for(i = 0;i<thecount;i++) {
			var file = e.target.files[i];
            files.push(file)
        }
        console.log(files,'the files');

			$("#kt_upload_hostel_additional_images2").on('submit', async function(e){
                e.preventDefault();
                Swal.fire('Uploading Additional Images, Please Wait...')
                $("#kt_modal_create_api_key_submit").attr('disabled',true)
				var id = $("#hostelimage").val();
				file = $("#upload_file").val();
                console.log(file,'the file')
				var id = $("#hostelimage").val();
							fd = new FormData();
							fd.append('id', id);
                            for(i = 0;i<thecount;i++) {
							fd.append('file[]', files[i]);
                            }
                          	console.log(fd, 'this is the fd');

                            $.ajax({
                                type: 'POST',
                                url: "../uploadImage",
                                data: fd,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    Swal.fire("Success", 'Hostel Addtional Images Uploaded successfully', 'success');
                                    console.log(data,'this data')
									// window.location.reload();
									 },
                                error: function(data) {
                                    console.log(data);
                                    Swal.fire("Oops!", 'Image size is too big', 'error');
                                }
                            });
                            });
                            });

							$("#profilePic").on('change', function(e) {

var file = e.target.files[0];
console.log(file);

$("#updateProfile").on('submit', async function(e){
	e.preventDefault();
	var id = $("#profileId").val();
	
				fd = new FormData();
				fd.append('profilePic', file);
				fd.append('id', id);
				fd.append('name', $("#profilename").val());
				fd.append('email', $("#profileemail").val());
				fd.append('phone', $("#profilephone").val());
				
				  console.log(fd, 'this is the fd');

				$.ajax({
					type: 'POST',
					url: "../updateprofile",
					data: fd,
					cache: false,
					contentType: false,
					processData: false,
					success: (data) => {
						Swal.fire("Success", 'Hostel Updated successfully', 'success');
						window.location.reload();
						 },
					error: function(data) { 
						console.log(data);
						Swal.fire('Oops!','Image size is too big','error')
					}
				});
				});
				});

             $('body').on('click', '#edit_hostel', function () {

                var id = $(this).data('id');
            

                $.get('{{ route('edit.album') }}?id=' + id, function (data) {
                    $('#ajax-crud-modal').modal('show');
                    $('#edit_name').val(data.name);
                    $('#edit_desc').val(data.description);
                    $('#edit_price').val(data.price);
                    $('#edit_category_id').val(data.category_id);
                    // $('#edit_image').val(data.image);
                    $('#id').val(id);
                    console.log(data)

                })
            });

             /* When click delete button */
     $('body').on('click', '#delete_hostel', function () {
            // var id = $("#delete_id").val();
			id = $(this).data('id');
            console.log(id)
            var token = $("meta[name='csrf-token']").attr("content");
            var el = this;
            // alert(user_id);
            resetAccount(el,id);
            });


        async function resetAccount(el,id) {
                const willUpdate = await Swal.fire({
                    title: "Confirm Hostel/Property Delete",
                    text: `Are you sure you want to delete this hostel/property?`,
                    icon: "warning",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes!",
                    showCancelButton: true,
                    buttons: ["Cancel", "Yes, Delete"]
                });
                if (willUpdate) {
                    //performReset()
                    performDelete(el,id);
                } else {
                    Swal.fire("Hostel/Property will not be deleted  :)");
                }
            }


        function performDelete(el,id)
            {
               
                try {
                        $.get('{{ route('destroy.album') }}?id=' + id,
                        function (data, status) {
                            console.log(status);
                            console.table(data);
                            if( status === "success") {
                                let alert = Swal.fire('success',"Hostel successfully deleted!.",'success');
                                $(el).closest( "tr" ).remove();
                                // alert.then(() => {
                                // });
                            }
                        }
                    );
                } catch (e) {
                    let alert = Swal.fire(e.message);
                }
            }
			var id = $("#sch_id").val();
			$.get('{{ route('getlocation') }}?id=' + id, function (data) {
			console.log(data,'the locations')
   for (var index = 0; index <= data.length - 1; index++) {
      $('#edit_category_id').append('<option value="' + data[index].id + '">' + data[index].name + '</option>');
   }
			});
    //  $(document).on('click', '.status_id', function () {

              $(".status_id").click(function() {
                  id = $(this).data('id');
                
                if($(this).is(':checked')) {
                   
			    $.get('{{ route('statusenable') }}?id=' + id, function (data) {
                  Swal.fire('Hostel Enabled','This hostel is now available for students','success') 
                // window.location.reload()
                });
                    
               } 
                else {
                   
                    $.get('{{ route('statusdisable') }}?id=' + id, function (data) {
                    Swal.fire('Hostel Disabled','This hostel is no longer available for students','info') 
                    // window.location.reload()
                });
                }
            });

                    });
    </script>
    <!--     <script src="{{asset('assets/professionallocker.js')}}"></script>-->
</body>

</html>