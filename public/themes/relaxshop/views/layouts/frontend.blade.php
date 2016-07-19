<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title or config('blog.title') }} || Thương mại điện tử</title>
    <meta name="description" content="@if (!empty($meta_description))  {{$meta_description}}@endif">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ config('blog.author') }}">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- google fonts  -->

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{theme('css/bootstrap.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{theme('css/animate.css')}}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{theme('css/jquery-ui.min.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{theme('css/meanmenu.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{theme('css/owl.carousel.css')}}">
    <!-- nivo-slider css -->
    <link rel="stylesheet" href="{{theme('lib/css/nivo-slider.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{theme('css/font-awesome.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{theme('style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{theme('css/responsive.css')}}">
    <!-- modernizr js -->
    <script src="{{theme('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- header start -->
@include('includes.header')
<!-- header end -->
@yield('content')
@include('includes.brand')
<!-- brand-area start -->

<!-- brand-area end -->

<!-- footer start -->
@include('includes.footer')

<!-- footer end -->

<!-- QUICKVIEW PRODUCT -->
@include('includes.quickview')

<!-- END QUICKVIEW PRODUCT -->


<!-- all js here -->
<!-- jquery latest version -->
<script src="{{theme('js/vendor/jquery-1.12.0.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{theme('js/bootstrap.min.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{theme('js/owl.carousel.min.js')}}"></script>
<!-- meanmenu js -->
<script src="{{theme('js/jquery.meanmenu.js')}}"></script>
<!-- jquery-ui js -->
<script src="{{theme('js/jquery-ui.min.js')}}"></script>
<!-- nivo.slider js -->
<script src="{{theme('lib/js/jquery.nivo.slider.pack.js')}}"></script>
<script src="{{theme('lib/js/nivo-active.js')}}"></script>
<!-- wow js -->
<script src="{{theme('js/wow.min.js')}}"></script>
<!-- plugins js -->
<script src="{{theme('js/plugins.js')}}"></script>
<!-- main js -->
<script src="{{theme('js/main.js')}}"></script>
</body>
</html>
