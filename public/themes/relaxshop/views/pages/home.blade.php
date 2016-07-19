@extends('layouts.frontend')
@section('title','Home')
@section('content')

        <!-- home slider start -->
<div class="slider-container">
    <!-- Slider Image -->
    <div id="mainSlider" class="nivoSlider slider-image">
        <img src="{{theme('img/slider/3.jpg')}}" alt="main slider" title="#htmlcaption1"/>
        <img src="{{theme('img/slider/1.jpg')}}" alt="main slider" title="#htmlcaption2"/>
    </div>
    <!-- Slider Caption 1 -->
    <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
        <div class="slider-progress"></div>
        <div class="slide1-text">
            <div class="middle-text">
                <div class="cap-dec wow bounceInDown" data-wow-duration="0.9s" data-wow-delay="0s">
                    <h3>trendy summer collection 2016</h3>
                </div>
                <div class="cap-title wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
                    <h1>Top fashion for men</h1>
                </div>
                <div class="cap-readmore wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                    <a href="#">shop now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Caption 2 -->
    <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
        <div class="slider-progress"></div>
        <div class="slide1-text">
            <div class="middle-text">
                <div class="cap-dec wow bounceIn" data-wow-duration="0.7s" data-wow-delay="0s">
                    <h3>trendy summer collection 2016</h3>
                </div>
                <div class="cap-title wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h1>Top fashion for women</h1>
                </div>
                <div class="cap-readmore wow bounceIn" data-wow-duration="1.1s" data-wow-delay=".5s">
                    <a href="#">shop now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- home slider end -->
<!-- banner-area start -->
<div class="banner-area pad-60">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single-banner">
                    <a href="#">
                        <img src="{{theme('img/banner/6.jpg')}}" alt="" />
                        <div class="banner-caption">
                            <h2>Men's <span>Sunglasses</span></h2>
                            <p>Our sunglasses and retro frames are all shades of great.</p>
                        </div>
                    </a>
                </div>
                <div class="single-banner marg-20">
                    <a href="#">
                        <img src="{{theme('img/banner/5.jpg')}}" alt="" />
                        <div class="banner-caption">
                            <h2>Men's <span>Watches</span></h2>
                            <p>Designer or digital, vintage or leather - it's time to get smart.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-banner">
                    <a href="#">
                        <img src="{{theme('img/banner/b1.jpg')}}" alt="" />
                        <div class="banner-caption">
                            <h2>New Men's <span> style</span></h2>
                            <p>Style it like a boss with this week's most hyped T-shirts.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <a href="#">
                        <img src="{{theme('img/banner/1.jpg')}}" alt="" />
                        <div class="banner-caption">
                            <h2>Men's <span>Shoes</span></h2>
                            <p>Marley tried to convince her but she was not interested.</p>
                        </div>
                    </a>
                </div>
                <div class="single-banner marg-20">
                    <a href="#">
                        <img src="{{theme('img/banner/3.jpg')}}" alt="" />
                        <div class="banner-caption">
                            <h2><span> Sunglasses</span></h2>
                            <p>Our sunglasses and retro frames are all shades of great.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area end -->
<!-- featured-area start -->
<div class="featured-area pad-60">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Most Popular product</h2>
                <div class="title-icon">
                    <span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product-tab">
                    <!-- Nav tabs -->
                    <ul class="product-nav" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">most popular</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">best stellar</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">new arrival</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="product-curosel">
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/w1.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/w2.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$70.00</span>
                                                    <span class="old">$80.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/3.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/4.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/w3.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/w7.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/7.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/8.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/9.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/10.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/w8.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/w12.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/13.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/14.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/15.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/16.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="row">
                                <div class="product-curosel">
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/17.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/18.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$70.00</span>
                                                    <span class="old">$80.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/19.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/20.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/21.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/22.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/23.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/6.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/2.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/1.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/4.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/3.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/6.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/5.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/7.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/8.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <div class="row">
                                <div class="product-curosel">
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/10.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/9.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$70.00</span>
                                                    <span class="old">$80.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/12.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/11.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/14.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/13.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/16.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/15.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/18.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/17.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/20.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/19.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/21.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/22.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-md-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="{{theme('img/product/23.jpg')}}" alt="" />
                                                    <img class="secondary-img" src="{{theme('img/product/5.jpg')}}" alt="" />
                                                </a>
                                                <span class="tag-line">new</span>
                                                <div class="product-action">
                                                    <div class="button-top">
                                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                                        <a href="#" ><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="button-cart">
                                                        <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="price">
                                                    <span>$80.00</span>
                                                    <span class="old">$90.11</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- featured-area end -->
<!-- upcoming-product-area start -->
<div class="upcoming-product-area pad-60">
    <div class="container">
        <div class="row">
            <div class="upcoming-curosel">
                <!-- upcoming-single start -->
                <div class="upcoming-single">
                    <div class="col-md-4 col-sm-4">
                        <div class="upcoming-img">
                            <a href="single-product.html"><img src="{{theme('img/product/9.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="upcoming-content">
                            <h2><a href="#">Lorem ipsum dolor</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Nam liber tempor cum.</p>
                            <div class="timer">
                                <div data-countdown="2017/02/01"></div>
                            </div>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- upcoming-single end -->
                <!-- upcoming-single start -->
                <div class="upcoming-single">
                    <div class="col-md-4 col-sm-4">
                        <div class="upcoming-img">
                            <a href="single-product.html"><img src="{{theme('img/product/w1.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="upcoming-content">
                            <h2><a href="#">Lorem ipsum dolor</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Nam liber tempor cum.</p>
                            <div class="timer">
                                <div data-countdown="2017/02/01"></div>
                            </div>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- upcoming-single end -->
                <!-- upcoming-single start -->
                <div class="upcoming-single">
                    <div class="col-md-4 col-sm-4">
                        <div class="upcoming-img">
                            <a href="single-product.html"><img src="{{theme('img/product/5.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="upcoming-content">
                            <h2><a href="#">Lorem ipsum dolor</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Nam liber tempor cum.</p>
                            <div class="timer">
                                <div data-countdown="2017/02/01"></div>
                            </div>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- upcoming-single end -->
                <!-- upcoming-single start -->
                <div class="upcoming-single">
                    <div class="col-md-4 col-sm-4">
                        <div class="upcoming-img">
                            <a href="single-product.html"><img src="{{theme('img/product/w9.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="upcoming-content">
                            <h2><a href="#">Lorem ipsum dolor</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Nam liber tempor cum.</p>
                            <div class="timer">
                                <div data-countdown="2017/02/01"></div>
                            </div>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- upcoming-single end -->
            </div>
        </div>
    </div>
</div>
<!-- upcoming-product-area end -->
<!-- category-area start -->
<div class="category-area pad-60">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Exclusive collection</h2>
                <div class="title-icon">
                    <span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-curosel">
                <!-- single-product start -->
                <div class="col-md-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/2.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/1.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$70.00</span>
                                <span class="old">$80.11</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/5.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/7.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$70.00</span>
                                <span class="old">$80.11</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-md-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/16.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/14.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/13.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/12.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-md-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/11.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/6.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/9.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/8.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-md-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/7.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/8.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/5.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/2.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-md-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/1.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/2.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/9.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/10.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-md-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/12.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/18.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/7.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/12.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-md-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/16.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/17.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/8.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/9.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-md-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/9.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/10.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="{{theme('img/product/12.jpg')}}" alt="" />
                                <img class="secondary-img" src="{{theme('img/product/9.jpg')}}" alt="" />
                            </a>
                            <span class="tag-line">new</span>
                            <div class="product-action">
                                <div class="button-top">
                                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a>
                                    <a href="#" ><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="button-cart">
                                    <button><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                            <div class="price">
                                <span>$80.00</span>
                                <span class="old">$90.11</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
            </div>
        </div>
    </div>
</div>
<!-- category-area end -->
<!-- latest-blog-area start -->
<div class="latest-blog-area pad-60">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Latest Blog</h2>
                <div class="title-icon">
                    <span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-curosel">
                <div class="col-md-12">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <a href="single-blog.html"><img src="{{theme('img/blog/4.jpg')}}" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <h3><a href="single-blog.html">Lorem ipsum dolor sit</a></h3>
                            <div class="blog-meta">
                                <span class="blog-date">sep 21,2015</span>
                                <span class="blog-author">By <a href="#">ThemeBuz</a></span>
                                <span class="blog-cat">in <a href="#">men's Style</a></span>
                            </div>
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut .....</p>
                            <a class="read-more" href="#">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <a href="single-blog.html"><img src="{{theme('img/blog/2.jpg')}}" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <h3><a href="single-blog.html">Lorem ipsum dolor sit</a></h3>
                            <div class="blog-meta">
                                <span class="blog-date">sep 21,2015</span>
                                <span class="blog-author">By <a href="#">ThemeBuz</a></span>
                                <span class="blog-cat">in <a href="#">men's Style</a></span>
                            </div>
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut .....</p>
                            <a class="read-more" href="#">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <a href="single-blog.html"><img src="{{theme('img/blog/3.jpg')}}" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <h3><a href="single-blog.html">Lorem ipsum dolor sit</a></h3>
                            <div class="blog-meta">
                                <span class="blog-date">sep 21,2015</span>
                                <span class="blog-author">By <a href="#">ThemeBuz</a></span>
                                <span class="blog-cat">in <a href="#">men's Style</a></span>
                            </div>
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut .....</p>
                            <a class="read-more" href="#">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <a href="single-blog.html"><img src="{{theme('img/blog/1.jpg')}}" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <h3><a href="single-blog.html">Lorem ipsum dolor sit</a></h3>
                            <div class="blog-meta">
                                <span class="blog-date">sep 21,2015</span>
                                <span class="blog-author">By <a href="#">ThemeBuz</a></span>
                                <span class="blog-cat">in <a href="#">men's Style</a></span>
                            </div>
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut .....</p>
                            <a class="read-more" href="#">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <a href="single-blog.html"><img src="{{theme('img/blog/5.jpg')}}" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <h3><a href="single-blog.html">Lorem ipsum dolor sit</a></h3>
                            <div class="blog-meta">
                                <span class="blog-date">sep 21,2015</span>
                                <span class="blog-author">By <a href="#">ThemeBuz</a></span>
                                <span class="blog-cat">in <a href="#">men's Style</a></span>
                            </div>
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut .....</p>
                            <a class="read-more" href="#">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-blog">
                        <a href="single-blog.html"><img src="{{theme('img/blog/2.jpg')}}" alt="" /></a>
                    </div>
                    <div class="blog-content">
                        <h3><a href="single-blog.html">Lorem ipsum dolor sit</a></h3>
                        <div class="blog-meta">
                            <span class="blog-date">sep 21,2015</span>
                            <span class="blog-author">By <a href="#">ThemeBuz</a></span>
                            <span class="blog-cat">in <a href="#">men's Style</a></span>
                        </div>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut .....</p>
                        <a class="read-more" href="#">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- latest-blog-area end -->
@endsection