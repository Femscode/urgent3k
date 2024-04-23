<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/temly/demo-9/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Jun 2023 16:47:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CT_Taste</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png"> --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('coming_soon/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('coming_soon/css/fontawesome-all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('coming_soon/font/flaticon.css')}}">
    <!-- Custom Animation CSS -->
    <link rel="stylesheet" href="{{ asset('coming_soon/css/fxt-animation.css')}}">
    <!-- Google Web Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"> --}}
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('coming_soon/style.css')}}">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{--
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet"> --}}
    <link href="assets/googlefonts/ubuntu.css" rel="stylesheet">
    

    <link rel="stylesheet" href="assets/googlefonts/inter.css" />
    
</head>

<body >
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->   
    <!-- Page Loader Start -->
    <div id="preloader"></div>
    <!-- Page Loader End -->
    <div class="wrapper">
        <!-- Main Body Area Start Here -->   
        <div class="fxt-template has-animation">   
            <div class="fxt-figure-holder">
                <div class="fxt-banner" data-bg-image="{{ asset('coming_soon/media/figure/banner.png')}}"></div>  
            </div> 
            <div class="fxt-main-content" style="background:#f5f5dc;font-family: 'Ubuntu', sans-serif">   
                <div class="fxt-logo">
                    <a href="#"><img class='h-15px h-md-20px' style='height:40px; width:150px' src="assets/media/logos/logo-br.png" alt="Logo"></a>
                </div>                 
                <h1 style="font-family: 'Ubuntu', sans-serif" class="fxt-main-title">New Payment Option For <span style='color:#ebab21'>CT_Taste</span> Ready to Launch!</h1>
                <p class="fxt-paragraph" style="text-align:left">The time has come to make things even more easier on CT_Taste.<br> The easiest and the fastest way to pay for your food orders on <b><span style='color:#ebab21'>CT_Taste</span></b> to be lauched in:</p>  
                <div class="fxt-countdown">
                    <div class="countdown"></div>
                </div>  
                <h4>Features</h4>
                <ol style="text-align:left">
                    <li>Make payment for food orders.</li>
                    <li>Save your food preference for later use.</li>
                    <li>Buy data, airtime, pay for light bills and Tv subscription.</li>
                </ol>
                @if(Session::has('message'))
                <div class='alert alert-success'> {{ Session::get('message') }}</div>

                @else

               
                <form action="{{ route('notify') }}" class="subscribe-form" method="POST">@csrf
                    <div  class="input-group stylish-input-group">
                        <input type="email" name="email" class="form-control" id="newsletter-form-email" placeholder="Enter your Email">
                        <span class="input-group-addon">
                            <button id="subscribe-button" type="submit">NOTIFY ME!</button>
                        </span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-result alert">
                        <div class="content"></div>
                    </div>
                </form>   
                @endif            
                <div class="fxt-socials">
                    <ul>
                       
                       
                        <li class="fxt-facebook">
                            <a href="https://www.facebook.com/107641935325820/posts/pfbid02HNSTgXffyTr5iEeSqs1aiXhNmN9RDaLcfCZTJC63EsVRXz36y7aw8RfSNHqRRhncl/?sfnsn=scwspmo" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="fxt-twitter">
                            <a href="https://twitter.com/ct_taste?s=20&t=izEI3zXAe5nU69qdNJINTA" title="twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="fxt-google">
                            <a href="https://www.instagram.com/ct_taste/?igshid=YmMyMTA2M2Y%3D" title="google"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="fxt-linkedin">
                            <a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="fxt-copyright">&copy; 2023 CT_Taste — All Rights Reserved.</div>               
            </div>           
        </div>
        <!-- Main Body Area End Here -->  
    </div>
    <!-- jquery-->
    <!-- Include a required theme -->

    
    <script src="{{ asset('coming_soon/js/jquery-3.5.0.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('coming_soon/js/bootstrap.min.js')}}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ asset('coming_soon/js/imagesloaded.pkgd.min.js')}}"></script>   
    <!-- Countdown js -->
    <script src="{{ asset('coming_soon/js/jquery.countdown.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('coming_soon/js/main.js')}}"></script>  
   

</body>


<!-- Mirrored from affixtheme.com/html/temly/demo-9/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Jun 2023 16:48:05 GMT -->
</html>