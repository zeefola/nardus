<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Agrotek – Agriculture HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title> @yield('title') </title>

<!-- favicon icon -->
<link rel="shortcut icon" href="/images/favicon.ico" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="/css/animate.css"/>

<!-- slick-slider -->
<link rel="stylesheet" type="text/css" href="/css/slick.css">

<link rel="stylesheet" type="text/css" href="/css/slick-theme.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="/css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="/css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="/css/flaticon.css"/>


<!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="/revolution/css/rs6.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="/css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="/css/main.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="/css/responsive.css"/>

<!-- JQuery for D.O.B -->
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->



</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
       <!-- @include('layouts.preloader') -->
        <!-- preloader end -->

        <!--header start-->
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
        </div><!--site-main end-->

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

        <!-- Revolution Slider -->
        <script src="/revolution/js/revolution.tools.min.js"></script>
        <script src="/revolution/js/rs6.min.js"></script>
        <script src="/revolution/js/slider.js"></script>

        <!-- Javascript end-->


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