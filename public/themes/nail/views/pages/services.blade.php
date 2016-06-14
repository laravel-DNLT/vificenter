@extends('layouts.frontend')
@section('title','Services')
@section('content')

    <div class="cp_inner-banner">
        <div class="cp-inner-image">
            <img src="{{theme('images/inner-services-img.jpg')}}" alt="">
        </div>
        <div class="cp_breadcrumb-holder">
            <div class="container">
                <h1>Services</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="cp_main">

        <section class="cp_our-services-section cp_our-services-section2 pd-tb80">
            <div class="container">
                <div class="cp-heding-style1">
                    <h2>Our Promotions</h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">

                        <div class="services-item">
                            <img src="{{theme('images/services/services-item-img-01.jpg')}}" alt="">
                            <div class="services-caption">
                                <h3>Hair Cutting</h3>
                                <span class="cp_linebar-style"></span>
                                <span class="icon-scissors30 icomoon"></span>
                                <a href="services.html" class="read-more cp-btn-style2">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">

                        <div class="services-item">
                            <img src="{{theme('images/services/services-item-img-02.jpg')}}" alt="">
                            <div class="services-caption">
                                <h3>Facial Services</h3>
                                <span class="cp_linebar-style"></span>
                                <span class="icon-chair8 icomoon"></span>
                                <a href="services.html" class="read-more cp-btn-style2">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">

                        <div class="services-item">
                            <img src="{{theme('images/services/services-item-img-03.jpg')}}" alt="">
                            <div class="services-caption">
                                <h3>Make UP</h3>
                                <span class="cp_linebar-style"></span>
                                <span class="icon-cup29 icomoon"></span>
                                <a href="services.html" class="read-more cp-btn-style2">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">

                        <div class="services-item">
                            <img src="{{theme('images/services/services-item-img-01.jpg')}}" alt="">
                            <div class="services-caption">
                                <h3>Manicure</h3>
                                <span class="cp_linebar-style"></span>
                                <span class="icon-finger3 icomoon"></span>
                                <a href="services.html" class="read-more cp-btn-style2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="cp_our-section cp_our-section2 pd-tb80">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="cp_box-holder">
                            <h2>How Do We Charge</h2>

                            <div class="cp_accodian-box">

                                <div class="cp_accordian-section" id="section1">
                                    <p>Cut and Style</p><span><i class="fa fa-minus"></i></span>
                                </div>
                                <div class="container_cp_accor">
                                    <ul class="cp-rates-list">
                                        <li>Long Hair .........................................................................................................................
                                            <span>Extra</span>
                                        </li>
                                        <li>Shampoo, Cut, and Blow Dry ...........................................................................................
                                            <span>32$</span>
                                        </li>
                                        <li>Shampoo and Blow Dry ....................................................................................................
                                            <span>28$</span>
                                        </li>
                                        <li>Wet Cut ...............................................................................................................................
                                            <span>40$</span>
                                        </li>
                                        <li>Children’s Cut (under 10) ..................................................................................................
                                            <span>37$</span>
                                        </li>
                                        <li>Bangs Trim .........................................................................................................................
                                            <span>12$</span>
                                        </li>
                                    </ul>
                                </div>


                                <div class="cp_accordian-section" id="section2">
                                    <p>Color and services </p><span><i class="fa fa-minus"></i></span>
                                </div>
                                <div class="container_cp_accor">
                                    <ul class="cp-rates-list">
                                        <li>Long Hair .........................................................................................................................
                                            <span>Extra</span>
                                        </li>
                                        <li>Shampoo and Blow Dry ....................................................................................................
                                            <span>28$</span>
                                        </li>
                                        <li>Wet Cut ...............................................................................................................................
                                            <span>40$</span>
                                        </li>
                                        <li>Children’s Cut (under 10) ..................................................................................................
                                            <span>37$</span>
                                        </li>
                                    </ul>
                                </div>


                                <div class="cp_accordian-section" id="section3">
                                    <p>Hands and Nails</p><span><i class="fa fa-minus"></i></span>
                                </div>
                                <div class="container_cp_accor">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="clearfix"></div>


                                <div class="cp_accordian-section" id="section4">
                                    <p>Highlight Services </p><span><i class="fa fa-minus"></i></span>
                                </div>
                                <div class="container_cp_accor">
                                    <ul class="cp-rates-list">
                                        <li>Long Hair .........................................................................................................................
                                            <span>Extra</span>
                                        </li>
                                        <li>Shampoo, Cut, and Blow Dry ...........................................................................................
                                            <span>32$</span>
                                        </li>
                                        <li>Shampoo and Blow Dry ....................................................................................................
                                            <span>28$</span>
                                        </li>
                                        <li>Wet Cut ...............................................................................................................................
                                            <span>40$</span>
                                        </li>
                                        <li>Children’s Cut (under 10) ..................................................................................................
                                            <span>37$</span>
                                        </li>
                                        <li>Bangs Trim .........................................................................................................................
                                            <span>12$</span>
                                        </li>
                                        <li>Wet Cut ...............................................................................................................................
                                            <span>40$</span>
                                        </li>
                                    </ul>
                                </div>


                                <div class="cp_accordian-section" id="section5">
                                    <p>Other Services </p><span><i class="fa fa-minus"></i></span>
                                </div>
                                <div class="container_cp_accor">
                                    <ul class="cp-rates-list">
                                        <li>Long Hair .........................................................................................................................
                                            <span>Extra</span>
                                        </li>
                                        <li>Shampoo, Cut, and Blow Dry ...........................................................................................
                                            <span>32$</span>
                                        </li>
                                        <li>Shampoo and Blow Dry ....................................................................................................
                                            <span>28$</span>
                                        </li>
                                        <li>Bangs Trim .........................................................................................................................
                                            <span>12$</span>
                                        </li>
                                        <li>Wet Cut ...............................................................................................................................
                                            <span>40$</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="cp_gallery-section pd-tb80">
            <div class="container">
                <div class="cp-heding-style1">
                    <h2>Popular Trends</h2>
                </div>
                <div class="cp_portfolioFilter">
                    <a href="#" data-filter="*" class="current">AlL</a>
                    <a href="#" data-filter=".cp_filter2">Long Cut </a>
                    <a href="#" data-filter=".cp_filter3">Make-Up</a>
                    <a href="#" data-filter=".cp_filter4"> We Cut</a>
                    <a href="#" data-filter=".cp_filter5"> Color Styles</a>
                </div>
                <ul class="portfolioContainer pretty-gallery">
                    <li class="cp_filter3">
                        <div class="cp_gallery-box">
                            <figure class="thumb">
                                <img src="{{theme('images/gallery/gallery4/01.jpg')}}" alt="">
                                <figcaption>
                                    <div class="holder">
                                        <a href="{{theme('images/gallery/gallery4/01.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="text">
                                <strong><a href="#">Donec rutrum magna</a></strong>
                                <span>Make Up, Beauty</span>
                            </div>
                        </div>
                    </li>
                    <li class="cp_filter5 cp_filter2 cp_filter4">
                        <div class="cp_gallery-box">
                            <figure class="thumb">
                                <img src="{{theme('images/gallery/gallery4/02.jpg')}}" alt="">
                                <figcaption>
                                    <div class="holder">
                                        <a href="{{theme('images/gallery/gallery4/02.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="text">
                                <strong><a href="#">Nam vel nibh eu massa</a></strong>
                                <span>Make Up, Beauty</span>
                            </div>
                        </div>
                    </li>
                    <li class="cp_filter2 cp_filter3">
                        <div class="cp_gallery-box">
                            <figure class="thumb">
                                <img src="{{theme('images/gallery/gallery4/03.jpg')}}" alt="">
                                <figcaption>
                                    <div class="holder">
                                        <a href="{{theme('images/gallery/gallery4/03.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="text">
                                <strong><a href="#">Fusce sit amet odio vitae</a></strong>
                                <span>Make Up, Beauty</span>
                            </div>
                        </div>
                    </li>
                    <li class="cp_filter4 cp_filter5">
                        <div class="cp_gallery-box">
                            <figure class="thumb">
                                <img src="{{theme('images/gallery/gallery4/04.jpg')}}" alt="">
                                <figcaption>
                                    <div class="holder">
                                        <a href="{{theme('images/gallery/gallery4/04.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="text">
                                <strong><a href="#">Sed placerat risus</a></strong>
                                <span>Make Up, Beauty</span>
                            </div>
                        </div>
                    </li>
                    <li class="cp_filter4">
                        <div class="cp_gallery-box">
                            <figure class="thumb">
                                <img src="{{theme('images/gallery/gallery4/05.jpg')}}" alt="">
                                <figcaption>
                                    <div class="holder">
                                        <a href="{{theme('images/gallery/gallery4/05.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="text">
                                <strong><a href="#">Vivamus vel nibh sodales</a></strong>
                                <span>Make Up, Beauty</span>
                            </div>
                        </div>
                    </li>
                    <li class="cp_filter5 cp_filter3 cp_filter2">
                        <div class="cp_gallery-box">
                            <figure class="thumb">
                                <img src="{{theme('images/gallery/gallery4/06.jpg')}}" alt="">
                                <figcaption>
                                    <div class="holder">
                                        <a href="{{theme('images/gallery/gallery4/06.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="text">
                                <strong><a href="#">Vestibulum sed dolor sed</a></strong>
                                <span>Make Up, Beauty</span>
                            </div>
                        </div>
                    </li>
                    <li class="cp_filter2 cp_filter5 cp_filter4">
                        <div class="cp_gallery-box">
                            <figure class="thumb">
                                <img src="{{theme('images/gallery/gallery4/07.jpg')}}" alt="">
                                <figcaption>
                                    <div class="holder">
                                        <a href="{{theme('images/gallery/gallery4/07.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="text">
                                <strong><a href="#">Morbi scelerisque est</a></strong>
                                <span>Make Up, Beauty</span>
                            </div>
                        </div>
                    </li>
                    <li class="cp_filter3 cp_filter4">
                        <div class="cp_gallery-box">
                            <figure class="thumb">
                                <img src="{{theme('images/gallery/gallery4/08.jpg')}}" alt="">
                                <figcaption>
                                    <div class="holder">
                                        <a href="{{theme('images/gallery/gallery4/08.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="text">
                                <strong><a href="#">Curabitur eu lacus a sem</a></strong>
                                <span>Make Up, Beauty</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>


        <section class="cp_pricing-section cp_pricing-section2 pd-tb80">
            <div class="container">
                <div class="cp-heding-style1">
                    <h2>Best Pricing</h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm">

                        <div class="pricing-item">
                            <div class="cp-thumb">
                                <img src="{{theme('images/pricing/price-img-01.jpg')}}" alt="">
                            </div>
                            <div class="pricing-text">
                                <span class="price">$9.99</span>
                                <a href="#" class="btn-hair-service">Hair Services</a>
                                <ul class="price-list">
                                    <li> Haircut</li>
                                    <li> Colour</li>
                                    <li> Treatments</li>
                                    <li>The Finish</li>
                                    <li> Treatments</li>
                                    <li> Haircut</li>
                                    <li> The Finish</li>
                                    <li> <a href="#" class="cp-btn-style2">Order Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm">

                        <div class="pricing-item">
                            <div class="cp-thumb">
                                <img src="{{theme('images/pricing/price-img-02.jpg')}}" alt="">
                            </div>
                            <div class="pricing-text">
                                <span class="price">$12.99</span>
                                <a href="#" class="btn-hair-service">Colour Services</a>
                                <ul class="price-list">
                                    <li> Haircut</li>
                                    <li> Colour</li>
                                    <li> Treatments</li>
                                    <li>The Finish</li>
                                    <li> Treatments</li>
                                    <li> Haircut</li>
                                    <li> The Finish</li>
                                    <li> <a href="#" class="cp-btn-style2">Order Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm">

                        <div class="pricing-item">
                            <div class="cp-thumb">
                                <img src="{{theme('images/pricing/price-img-03.jpg')}}" alt="">
                            </div>
                            <div class="pricing-text">
                                <span class="price">$78.99</span>
                                <a href="#" class="btn-hair-service">Treatments Services</a>
                                <ul class="price-list">
                                    <li> Haircut</li>
                                    <li> Colour</li>
                                    <li> Treatments</li>
                                    <li>The Finish</li>
                                    <li> Treatments</li>
                                    <li> Haircut</li>
                                    <li> The Finish</li>
                                    <li> <a href="#" class="cp-btn-style2">Order Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm">

                        <div class="pricing-item">
                            <div class="cp-thumb">
                                <img src="{{theme('images/pricing/price-img-04.jpg')}}" alt="">
                            </div>
                            <div class="pricing-text">
                                <span class="price">$85.99</span>
                                <a href="#" class="btn-hair-service">Haircut Services</a>
                                <ul class="price-list">
                                    <li> Haircut</li>
                                    <li> Colour</li>
                                    <li> Treatments</li>
                                    <li>The Finish</li>
                                    <li> Treatments</li>
                                    <li> Haircut</li>
                                    <li> The Finish</li>
                                    <li> <a href="#" class="cp-btn-style2">Order Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection