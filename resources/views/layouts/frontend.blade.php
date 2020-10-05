<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="language" content="English">

    {!! SEO::generate() !!}

    <!-- favicon icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon57-57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon60-60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon72-72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon76-76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon114-114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon120-120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon144-144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon152-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon180-180.png">

    <link rel="icon" type="image/png" href="/images/favicon32-32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/images/favicon192-192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/images/favicon96-96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/images/favicon16-16.png" sizes="16x16">

    <link rel="shortcut icon" href="/images/favicon.ico" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="/css/animate.css" />

    <!-- slick-slider -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css">

    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="/css/themify-icons.css" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="/css/flaticon.css" />


    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="/revolution/css/rs6.css">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="/css/shortcodes.css" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="/css/main.css" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" />


   <!-- slippry slider -->
    
    <link rel="stylesheet" href="/dist/slippry.css">

    <!-- JQuery for D.O.B -->
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->


   @includeIf('layouts.analytics')

   @includeIf('layouts.fb_pixel')
   
   @includeIf('layouts.schema.organization')

   <style>
        .demo_wrapper {
          /* width: 50%; */
          margin: 0 auto;
        }
        @media only screen and (max-device-width: 800px), screen and (max-width: 800px) {
          .demo_wrapper {
            width: 80%;
          }  
        }
        .demo_block {
          width: 100%;
        }
    </style>
</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <!-- @include('layouts.preloader') -->
        <!-- preloader end -->

        <!--header start-->
        @section('site_navigation')
        <ul class="dropdown" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
          <li class="{{ Request::is('/') ? 'active' : '' }}" itemprop="name"><a itemprop="url" href="/">Home</a>
          </li>
          <li class="{{ Request::is('about-us') ? 'active' : '' }}" itemprop="name"><a itemprop="url" href="/about-us">About Us</a>
          </li>
          <li class="{{ Request::is('services') ? 'active' : '' }}" itemprop="name"><a itemprop="url" href="/services">Services</a>
          </li>
          <li class="{{ Request::is('faq') ? 'active' : '' }}" itemprop="name"><a itemprop="url" href="/faq">FAQ</a>
          </li>
          <li class="{{ Request::is('contact-us') ? 'active' : '' }}" itemprop="name"><a itemprop="url" href="/contact-us">Contact Us</a>
          </li>
          <li><a href="#">Shop</a>
          </li>
          <li itemprop="name" style="display:none"><a itemprop="url" href="/distributors-form">Distributor</a>
          </li>
          
      </ul>
        @endsection
        @includeIf('layouts.header')
        
        <!--header end-->

        <!-- START homeclassicmain REVOLUTION SLIDER 6.0.1 -->
        @yield('slider')
        <!-- END REVOLUTION SLIDER -->

        <!-- page-title -->
        @yield('breadcrumb')
        <!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">
            @yield('main_content')
        </div>
        <!--site-main end-->

        <!--footer start-->
        @includeIf('layouts.footer')
        <!--footer end-->

        <!--  chat plugin  -->
        @includeIf("layouts.tawk")

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->

    <!-- Javascript -->

    <script src="/js/jquery.min.js"></script>
    <script src="/js/tether.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.js"></script>
    <script src="/js/jquery-waypoints.js"></script>
    <script src="/js/jquery-validate.js"></script>
    <script src="/js/slick.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/numinate.min.js?ver=4.9.3"></script>
    <script src="/js/main.js"></script>


    <!-- Slippry Slider -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
		<script src="/dist/slippry.min.js"></script>
		<script src="//use.edgefonts.net/cabin;source-sans-pro:n2,i2,n3,n4,n6,n7,n9.js"></script>

    <!-- Revolution Slider -->
    <script src="/revolution/js/revolution.tools.min.js"></script>
    <script src="/revolution/js/rs6.min.js"></script>
    <script src="/revolution/js/slider.js"></script>

    <!-- Javascript end-->



		<script>
			$(function() {
				var demo1 = $("#demo1").slippry({
					// transition: 'fade',
					// useCSS: true,
					// speed: 1000,
					// pause: 3000,
					// auto: true,
					// preload: 'visible',
					// autoHover: false
				});

				$('.stop').click(function () {
					demo1.stopAuto();
				});

				$('.start').click(function () {
					demo1.startAuto();
				});

				$('.prev').click(function () {
					demo1.goToPrevSlide();
					return false;
				});
				$('.next').click(function () {
					demo1.goToNextSlide();
					return false;
				});
				$('.reset').click(function () {
					demo1.destroySlider();
					return false;
				});
				$('.reload').click(function () {
					demo1.reloadSlider();
					return false;
				});
				$('.init').click(function () {
					demo1 = $("#demo1").slippry();
					return false;
				});
			});
		</script>
  


    <!-- JQuery for D.O.B -->
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "1960:2050"
    });
  } );
  </script> -->

</body>

</html>
