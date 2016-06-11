<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Nail Salon </title>
    <meta name="description" content="@yield('description')" />
    <meta name="generator" content="@yield('generator')" />
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    
    <link rel="stylesheet" href="{{theme('css/custom.css')}}" type="text/css">

    <link rel="stylesheet" href="{{theme('css/bootstrap.css')}}" type="text/css">

    <link rel="stylesheet" href="{{theme('css/theme-color.css')}}" type="text/css">

    <link rel="stylesheet" href="{{theme('css/responsive.css')}}" type="text/css">

    <link rel="stylesheet" href="{{theme('css/owl.carousel.css')}}" type="text/css">

    <link rel="stylesheet" href="{{theme('css/jquery.bxslider.css')}}" type="text/css">

    <link rel="stylesheet" href="{{theme('css/prettyPhoto.css')}}" type="text/css">

    <link rel="stylesheet" href="{{theme('css/font-awesome.min.css')}}" type="text/css">

    <link rel="stylesheet" href="{{theme('css/icomoon.css')}}" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600italic,600,700,700italic,300italic,300,400italic' rel='stylesheet' type='text/css'>
    @yield('css')
    <script src="{{theme('js/html5shiv.js')}}" type="text/javascript"></script>
</head>
<body class="big-salon" id="big-salon-nail">

<div id="wrapper">
    @include('includes.header')

    @yield('content')
    <footer id="cp_footer">
        <section class="cp_footer-section1">
            <div class="container">
                <h2>Book Your Next Appointment Today!</h2>
                <a href="#" class="cp-btn-style1 buy-now">Book Now</a>
            </div>
        </section>
        <section class="cp_footer-section2 pd-tb80">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="ft-box-holder">
                            <h3>About Us</h3>
                            <div class="about-box">
                                <img src="{{theme('images/ft-about-img.jpg')}}" alt="">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus</p>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus litterarum formas humanitatis per seacula.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="ft-box-holder">
                            <h3>Contact us on</h3>
                            <ul class="ft-contact-us-list">
                                <li><span>Phone:</span> +421 394 202 139</li>
                                <li><span>Email:</span> <a href="#"><span class="__cf_email__" data-cfemail="fd94939b92bd8998908d98988ed39e9290">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
                                <li><span>Telefax:</span> +421 345 684 932</li>
                                <li><img src="{{theme('images/card-logo.png')}}" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="ft-box-holder">
                            <h3>Opening Time</h3>
                            <p>Monday-Friday: ______8.00 to 18.00</p>
                            <p>Saturday: ____________ 9.00 to 18.00</p>
                            <p>Sunday: _____________10.00 to 16.00</p>
                            <p>Every 30 day of month Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="ft-box-holder">
                            <h3>Flicker Widget</h3>
                            <ul class="cp_flicker-list">
                                <li><a href="#"><img src="{{theme('images/flickr/flickr-img-01.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{theme('images/flickr/flickr-img-02.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{theme('images/flickr/flickr-img-03.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{theme('images/flickr/flickr-img-04.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{theme('images/flickr/flickr-img-05.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{theme('images/flickr/flickr-img-06.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{theme('images/flickr/flickr-img-07.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{theme('images/flickr/flickr-img-08.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{theme('images/flickr/flickr-img-09.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{theme('images/flickr/flickr-img-10.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{theme('images/flickr/flickr-img-11.jpg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{theme('images/flickr/flickr-img-12.jpg')}}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cp_footer-section3">
            <div class="container">
                <div class="footer-logo">
                    <a href="#"><img src="{{theme('images/logo3.png')}}" alt=""></a>
                </div>
                <strong>© 2016 - Nail Salon. All Rights Reserved</strong>
                <div class="cp_back-top-holder">
					<span id="cp_back-top">
						<a href="#"><i class="fa fa-angle-up"></i></a>
					</span>
                </div>
            </div>
        </section>
    </footer>
</div>
<script type="text/javascript" src="{{theme('js/jQuery.1.11.3.js')}}"></script>
@yield('script')
<script type="text/javascript" src="{{theme('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{theme('js/migrate.js')}}"></script>
<script type="text/javascript" src="{{theme('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{theme('js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{theme('js/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{theme('js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{theme('js/custom-script.js')}}"></script>

</body>
</html>