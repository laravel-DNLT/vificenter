<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') || Dilima</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{theme('img/favicon.ico')}}">

    <!-- Fonts  -->
    <link href='https://fonts.googleapis.com/css?family=Khula:400,800,700,600,300' rel='stylesheet' type='text/css'>

    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{theme('style.css')}}">

    <script src="{{theme('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body class="home-1">
<!--[if lt IE 8]>

<![endif]-->
<!-- Start main area -->
<div class="main-area">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
    <!-- End footer -->
</div>
<!-- End main area -->
<!-- JS -->

<!-- jquery-1.11.3.min js
		============================================ -->
<script src="{{theme('js/vendor/jquery-1.11.3.min.js')}}"></script>

<!-- bootstrap js
		============================================ -->
<script src="{{theme('js/bootstrap.min.js')}}"></script>

<!-- owl.carousel.min js
		============================================ -->
<script src="{{theme('js/owl.carousel.min.js')}}"></script>

<!-- jquery.nivo.slider.pack js
        ============================================ -->
<script src="{{theme('js/jquery.nivo.slider.pack.js')}}"></script>

<!-- jqueryui js
        ============================================ -->
<script src="{{theme('js/jquery.fancybox.js')}}"></script>

<!-- jquery.scrollUp.min js
        ============================================ -->
<script src="{{theme('js/jquery.scrollUp.min.js')}}"></script>

<!-- wow js
		============================================ -->
<script src="{{theme('js/wow.js')}}"></script>

<!-- jquery.meanmenu js
        ============================================ -->
<script src="{{theme('js/jquery.meanmenu.js')}}"></script>

<!-- plugins js
		============================================ -->
<script src="{{theme('js/plugins.js')}}"></script>

<!-- main js
		============================================ -->
<script src="{{theme('js/main.js')}}"></script>
</body>

<!-- Mirrored from devitems.com/tf/dilima-preview/dilima/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jun 2016 11:19:02 GMT -->
</html>
