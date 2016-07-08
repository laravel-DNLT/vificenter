<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeTube video | @yield('title')</title>
    <link rel="stylesheet" href="{{theme('css/app.css')}}">
    <link rel="stylesheet" href="{{theme('css/theme.css')}}">
    <link rel="stylesheet" href="{{theme('css/font-awesome.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{theme('layerslider/css/layerslider.css')}}">
    <link rel="stylesheet" href="{{theme('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{theme('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{theme('css/responsive.css')}}">
</head>
<body>
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <!--header-->
        <div class="off-canvas position-left light-off-menu" id="offCanvas" data-off-canvas>
            <div class="off-menu-close">
                <h3>Menu</h3>
                <span data-toggle="offCanvas-responsive"><i class="fa fa-times"></i></span>
            </div>
            <ul class="vertical menu off-menu" data-responsive-menu="drilldown">
                <li class="has-submenu">
                    <a href="#">Home</a>
                    <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                        <li><a href="home-v1.html">Home page v1</a></li>
                        <li><a href="home-v2.html">Home page v2</a></li>
                        <li><a href="home-v3.html">Home page v3</a></li>
                        <li><a href="home-v4.html">Home page v4</a></li>
                        <li><a href="home-v5.html">Home page v5</a></li>
                        <li><a href="home-v6.html">Home page v6</a></li>
                        <li><a href="home-v7.html">Home page v7</a></li>
                        <li><a href="home-v8.html">Home page v8</a></li>
                        <li><a href="home-v9.html">Home page v9</a></li>
                        <li><a href="home-v10.html">Home page v10</a></li>
                    </ul>
                </li>
                <li class="has-submenu" data-dropdown-menu="example1">
                    <a href="#">Videos</a>
                    <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                        <li><a href="single-video-v1.html">single video v1</a></li>
                        <li><a href="single-video-v2.html">single video v2</a></li>
                        <li><a href="single-video-v3.html">single video v3</a></li>
                        <li><a href="submit-post.html">submit post</a></li>
                    </ul>
                </li>
                <li><a href="categories.html">category</a></li>
                <li>
                    <a href="blog.html">blog</a>
                    <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                        <li><a href="blog-single-post.html">blog single post</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">features</a>
                    <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                        <li><a href="404.html">404 Pages</a></li>
                        <li><a href="archives.html">Archives</a></li>
                        <li><a href="login.html">login</a></li>
                        <li><a href="login-forgot-pass.html">Forgot Password</a></li>
                        <li><a href="login-register.html">Register</a></li>
                        <li>
                            <a href="#">profile</a>
                            <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                <li><a href="profile-page-v1.html">profile v1</a></li>
                                <li><a href="profile-page-v2.html">profile v2</a></li>
                                <li><a href="profile-about-me.html">Profile About Me</a></li>
                                <li><a href="profile-comments.html">profile comments</a></li>
                                <li><a href="profile-favorite.html">profile favorites</a></li>
                                <li><a href="profile-followers.html">profile followers</a></li>
                                <li><a href="profile-settings.html">profile settings</a></li>
                            </ul>
                        </li>
                        <li><a href="profile-video.html">Author Page</a></li>
                        <li><a href="search-results.html">search results</a></li>
                        <li><a href="terms-condition.html">Terms &amp; Condition</a></li>
                    </ul>
                </li>
                <li><a href="about-us.html">about</a></li>
                <li><a href="contact-us.html">contact</a></li>
            </ul>
            <div class="responsive-search">
                <form method="post">
                    <div class="input-group">
                        <input class="input-group-field" type="text" placeholder="search Here">
                        <div class="input-group-button">
                            <button type="submit" name="search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="off-social">
                <h6>Get Socialize</h6>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
            <div class="top-button">
                <ul class="menu">
                    <li>
                        <a href="submit-post.html">upload Video</a>
                    </li>
                    <li class="dropdown-login">
                        <a href="login.html">login/Register</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="off-canvas-content" data-off-canvas-content>
           @include('includes.header')
           @yield('content')
           @include('includes.footer')
        </div><!--end off canvas content-->
    </div><!--end off canvas wrapper inner-->
</div><!--end off canvas wrapper-->
<!-- script files -->
<script src="{{theme('bower_components/jquery/dist/jquery.js')}}"></script>
<script src="{{theme('bower_components/what-input/what-input.js')}}"></script>
<script src="{{theme('bower_components/foundation-sites/dist/foundation.js')}}"></script>
<script src="{{theme('js/jquery.showmore.src.js')}}" type="text/javascript"></script>
<script src="{{theme('js/app.js')}}"></script>
<script src="{{theme('layerslider/js/greensock.js')}}" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="{{theme('layerslider/js/layerslider.transitions.js')}}" type="text/javascript"></script>
<script src="{{theme('layerslider/js/layerslider.kreaturamedia.jquery.js')}}" type="text/javascript"></script>
<script src="{{theme('js/owl.carousel.min.js')}}"></script>
<script src="{{theme('js/inewsticker.js')}}" type="text/javascript"></script>
<script src="{{theme('js/jquery.kyco.easyshare.js')}}" type="text/javascript"></script>
</body>
</html>