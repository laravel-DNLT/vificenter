@extends('layouts.frontend')
@section('title','About')
@section('content')
    <div class="cp_inner-banner">
        <div class="cp-inner-image">
            <img src="{{theme('images/inner-about-img.jpg')}}" alt="">
        </div>
        <div class="cp_breadcrumb-holder">
            <div class="container">
                <h1>About Us</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cp_main">
        <section class="cp_about-section cp_about-section2 pd-t80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="cp_about-slider2" class="owl-carousel">
                            <div class="item">
                                <div class="cp-thumb">
                                    <img src="{{theme('images/about-slider-img-01.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="cp-thumb">
                                    <img src="{{theme('images/about-slider-img-01.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="cp-thumb">
                                    <img src="{{theme('images/about-slider-img-01.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-text">
                            <h3>Welcome to Big Salon</h3>
                            <p>Sed vehicula condimentum erat, blandit rutrum quam ultricies scelerisque. Praesent mollis tincidunt lectus, id varius urna fringilla a.</p>
                            <p>Cras auctor facilisis urna et auctor. Praesent malesuada tellus nulla, sed ultricies ligula auctor in. Aenean consequat convallis dui, ut sagittis odio cursus feugiat. Suspendisse ipsum erat, consequat vitae molestie sit amet, facilisis consectetur leo. Donec facilisis neque condimentum ornare convallis.</p>
                            <ul class="about-listed">
                                <li>Vestibulum eget elit posuere, sagittis nisl eu, bibendum ante</li>
                                <li>Donec vel nibh id massa faucibus consequat</li>
                                <li>Vestibulum molestie nisl eget elit mollis congue</li>
                            </ul>
                            <a href="gallery-masonary.html" class="cp-btn-style1">Check Our Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cp_our-team-section pd-tb80">
            <div class="container">
                <div class="cp-heding-style1">
                    <h2>Our Experts</h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="team-item">
                            <figure class="cp-thumb">
                                <img src="{{theme('images/team/team-img-01.jpg')}}" alt="">
                                <figcaption class="caption">
                                    <ul class="cp-social-list">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <div class="team-text">
                                <h3><a href="#">Eliza Cedric</a></h3>
                                <span>Make up Artist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="team-item">
                            <figure class="cp-thumb">
                                <img src="{{theme('images/team/team-img-02.jpg')}}" alt="">
                                <figcaption class="caption">
                                    <ul class="cp-social-list">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <div class="team-text">
                                <h3><a href="#">Britney Doe</a></h3>
                                <span>Hair Style Artist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="team-item">
                            <figure class="cp-thumb">
                                <img src="{{theme('images/team/team-img-03.jpg')}}" alt="">
                                <figcaption class="caption">
                                    <ul class="cp-social-list">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <div class="team-text">
                                <h3><a href="#">Dale Frank</a></h3>
                                <span>Make up Artist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="team-item">
                            <figure class="cp-thumb">
                                <img src="{{theme('images/team/team-img-04.jpg')}}" alt="">
                                <figcaption class="caption">
                                    <ul class="cp-social-list">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <div class="team-text">
                                <h3><a href="#">Halena Grey</a></h3>
                                <span>Make up Artist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cp_our-parallax-section cp_our-parallax-section2 pd-tb80">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="left-holder">
                            <h3>The Ultimate Guide to</h3>
                            <strong>Women Nail Color</strong>
                            <a href="#" class="buy-now cp-btn-style1">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cp_our-section pd-tb80">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cp_box-holder">
                            <h2>Latest News</h2>
                            <div class="cp_accodian-box">
                                <div class="cp_accodian-box" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Sed gravida ante <span><i class="fa fa-minus"></i></span></a>
                                            </div>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse in">
                                            <div class="container_cp_accor">
                                                <div class="cp-thumb">
                                                    <img src="{{theme('images/sm-thumb.jpg')}}" alt="">
                                                </div>
                                                <div class="text-holder">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent imperdiet et nisi.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Integer id turpis et magna <span><i class="fa fa-minus"></i></span></a>
                                            </div>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="container_cp_accor">
                                                <div class="cp-thumb">
                                                    <img src="{{theme('images/sm-thumb.jpg')}}" alt="">
                                                </div>
                                                <div class="text-holder">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent imperdiet et nisi.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Vivamus auctor est eu <span><i class="fa fa-minus"></i></span></a>
                                            </div>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse">
                                            <div class="container_cp_accor">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Sed gravida ante <span><i class="fa fa-minus"></i></span></a>
                                            </div>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse">
                                            <div class="container_cp_accor">
                                                <div class="cp-thumb">
                                                    <img src="{{theme('images/sm-thumb.jpg')}}" alt="">
                                                </div>
                                                <div class="text-holder">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent imperdiet et nisi.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Mauris non libero et <span><i class="fa fa-minus"></i></span></a>
                                            </div>
                                        </div>
                                        <div id="collapse5" class="panel-collapse collapse">
                                            <div class="container_cp_accor">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cp_box-holder">
                            <h2>Features</h2>
                            <p>Cras auctor facilisis urna et auctor. Praesent malesuada tellus nulla, sed ultricies ligula auctor in. Aenean consequat convallis dui, ut sagittis odio cursus feugiat. Suspendisse ipsum erat, consequat vitae molestie sit amet, facilisis consectetur leo:</p>
                            <ul class="about-listed">
                                <li>Vestibulum eget elit posuere, sagittis nisl eu</li>
                                <li>Donec vel nibh id massa faucibus consequat</li>
                                <li>Vestibulum molestie nisl eget elit mollis congue</li>
                                <li>Quisque a metus porttitor luctus orci</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cp_box-holder">
                            <h2>From Us</h2>
                            <div class="cp_tabs-box">
                                <ul class="nav nav-tabs tabs-style" role="tablist">
                                    <li class="active"><a href="#quality" role="tab" data-toggle="tab">Quality</a></li>
                                    <li><a href="#service" role="tab" data-toggle="tab">Service</a></li>
                                    <li><a href="#result" role="tab" data-toggle="tab">Result</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="quality">
                                        <div class="tab-inner-holder">
                                            <div class="thumb">
                                                <img src="{{theme('images/tab-img-01.jpg')}}" alt="">
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent imperdiet et nisi eget faucibus. Praesent nec molestie justo. dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="service">
                                        <div class="tab-inner-holder">
                                            <div class="thumb">
                                                <img src="{{theme('images/tab-img-02.jpg')}}" alt="">
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent imperdiet et nisi eget faucibus. Praesent nec molestie justo. dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="result">
                                        <div class="tab-inner-holder">
                                            <div class="thumb">
                                                <img src="{{theme('images/tab-img-01.jpg')}}" alt="">
                                            </div>
                                            <p>Praesent imperdiet et nisi eget faucibus. Praesent nec molestie justo. dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cp_testimonial-section pd-tb80">
            <div class="container">
                <div class="cp-heding-style1">
                    <h2>What Customers Say</h2>
                </div>
                <div class="testimonial-slider-holder">
                    <ul class="bxslider" id="testimonial-slider">
                        <li>
                            <div class="testimonial-holder">
								<span class="icon-holder">
									<i class="fa fa-quote-right"></i>
								</span>
                                <p>Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.Mellentesque habitant morbi tristique et Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.</p>
                                <strong class="name">“John Doe”</strong>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial-holder">
								<span class="icon-holder">
									<i class="fa fa-quote-right"></i>
								</span>
                                <p>Famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.Mellentesque habitant morbi tristique et Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada .</p>
                                <strong class="name">“Britney Doe”</strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection