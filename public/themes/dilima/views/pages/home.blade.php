@extends('layouts.frontend')
@section('title','Home')
@section('content')
        <!-- Start slider area -->
<div class="slider-area">
    <div id="slider" class="nivoSlider">
        <img style ="display:none" src="{{theme('img/slider/1.jpg')}}"  data-thumb="img/slider/1.jpg')}}"  alt="" title="#htmlcaption1"/>
        <img style ="display:none" src="{{theme('img/slider/2.jpg')}}"  data-thumb="img/slider/2.jpg')}}"  alt="" title="#htmlcaption2"/>
    </div>
    <div id="htmlcaption1" class="pos-slideshow-caption nivo-html-caption nivo-caption">
        <div class="timing-bar"></div>
        <div class="pos-slideshow-info pos-slideshow-info1">
            <div class="container">
                <div class="pos_description hidden-xs hidden-sm">
                    <div class="title1"><span class="txt">Camera Digital</span></div>
                    <div class="title2"><span class="txt">Brand D5500</span></div>
                    <div class="pos-slideshow-readmore">
                        <a href="http://bootexperts.com/" title="Shop now">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="htmlcaption2" class="pos-slideshow-caption nivo-html-caption nivo-caption">
        <div class="timing-bar"></div>
        <div class="pos-slideshow-info pos-slideshow-info2">
            <div class="container">
                <div class="pos_description hidden-xs hidden-sm">
                    <div class="title1"><span class="txt">Tivi Brand Name</span></div>
                    <div class="title2"><span class="txt">48" Full HD Flat TV</span></div>
                    <div class="pos-slideshow-readmore">
                        <a href="#" title="Shop now">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End slider area -->
<!-- Start categori area -->
<div class="categori-area">
    <div class="container">
        <div class="row">
            <!-- Start categori menu -->
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="categori-menu">
                    <div class="sidebar-menu-title">
                        <h2><i class="fa fa-th-list"></i>Categories</h2>
                    </div>
                    <div class="sidebar-menu">
                        <ul>
                            <li><a href="shop-grid.html">Automotive & Motorcycle</a>
                                <div class="megamenudown-sub">
                                    <div class="mega-top">
                                        <div class="mega-item-menu">
                                            <a href="shop-grid.html" class="title"><span>electronic</span></a>
                                            <a href="shop-grid.html"><span>Camera & Camcorders</span></a>
                                            <a href="shop-grid.html"><span>Electronic</span></a>
                                            <a href="shop-grid.html"><span>Cosmetic</span></a>
                                            <a href="shop-grid.html"><span>Medical & Healthcare</span></a>
                                            <a href="shop-grid.html"><span>Laptop & Computer</span></a>
                                            <a href="shop-grid.html"><span>Phasellus laoreet</span></a>
                                        </div>
                                        <div class="mega-item-menu">
                                            <a href="shop-grid.html" class="title"><span>electronic</span></a>
                                            <a href="shop-grid.html"><span>Camera & Camcorders</span></a>
                                            <a href="shop-grid.html"><span>Electronic</span></a>
                                            <a href="shop-grid.html"><span>Cosmetic</span></a>
                                            <a href="shop-grid.html"><span>Medical & Healthcare</span></a>
                                            <a href="shop-grid.html"><span>Laptop & Computer</span></a>
                                            <a href="shop-grid.html"><span>Phasellus laoreet</span></a>
                                        </div>
                                        <div class="mega-item-menu">
                                            <a href="shop-grid.html" class="title"><span>laptop</span></a>
                                            <a href="shop-grid.html"><span>Phasellus laoreet</span></a>
                                            <a href="shop-grid.html"><span>Medical & Healthcare</span></a>
                                            <a href="shop-grid.html"><span>Electronic</span></a>
                                            <a href="shop-grid.html"><span>Cosmetic</span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Electronics</a>
                                <div class="megamenudown-sub">
                                    <div class="mega-top">
                                        <div class="mega-item-menu">
                                            <a href="shop-grid.html" class="title"><span>camera & camcorder</span></a>
                                            <a href="shop-grid.html"><span>Medical & Healthcare</span></a>
                                            <a href="shop-grid.html"><span>Laptop & Computer</span></a>
                                            <a href="shop-grid.html"><span>Camera</span></a>
                                        </div>
                                        <div class="mega-item-menu">
                                            <a href="shop-grid.html" class="title"><span>Medical</span></a>
                                            <a href="shop-grid.html"><span>Camera</span></a>
                                            <a href="shop-grid.html"><span>Camcorders</span></a>
                                            <a href="shop-grid.html"><span>Camera & Camcorders</span></a>
                                        </div>
                                        <div class="mega-item-menu">
                                            <a href="shop-grid.html" class="title"><span>Healthcare</span></a>
                                            <a href="shop-grid.html"><span>Medical</span></a>
                                            <a href="shop-grid.html"><span>Healthcare</span></a>
                                            <a href="shop-grid.html"><span>Medical & Healthcare</span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="shop-grid.html">Sports & Outdoors</a>
                                <div class="megamenudown-sub">
                                    <div class="mega-top">
                                        <div class="mega-item-menu">
                                            <a href="shop-grid.html" class="title"><span>category 1</span></a>
                                            <a href="shop-grid.html"><span>day</span></a>
                                            <a href="shop-grid.html"><span>evening</span></a>
                                            <a href="shop-grid.html"><span>night</span></a>
                                        </div>
                                        <div class="mega-item-menu">
                                            <a href="shop-grid.html" class="title"><span>category 2</span></a>
                                            <a href="shop-grid.html"><span>kids</span></a>
                                            <a href="shop-grid.html"><span>men</span></a>
                                            <a href="shop-grid.html"><span>Women</span></a>
                                        </div>
                                        <div class="mega-item-menu">
                                            <a href="shop-grid.html" class="title"><span>category 3</span></a>
                                            <a href="shop-grid.html"><span>clothing</span></a>
                                            <a href="shop-grid.html"><span>Accessories</span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="shop-grid.html">Smartphone & Tablets</a>
                                <div class="megamenudown-sub mini">
                                    <div class="mega-top">
                                        <div class="mega-item-menu">
                                            <a href="shop-grid.html"><span>category 1</span></a>
                                            <a href="shop-grid.html"><span>category 2</span></a>
                                            <a href="shop-grid.html"><span>category 3</span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="shop-grid.html">Health & Beauty</a>
                                <div class="megamenudown-sub mini">
                                    <div class="mega-top">
                                        <div class="mega-item-menu">
                                            <a href="shop-grid.html"><span>category 1</span></a>
                                            <a href="shop-grid.html"><span>category 2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="shop-grid.html" class="single-menu">Bags, Shoes & Accessories</a></li>
                            <li><a href="shop-grid.html" class="single-menu">Computers & Networking</a></li>
                            <li><a href="shop-grid.html" class="single-menu">Laptops & Accessories</a></li>
                            <li><a href="shop-grid.html" class="single-menu">Entertainment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End categori menu -->
            <!-- Start categori banner -->
            <div class="col-xs-12 col-sm-8 col-md-6">
                <div class="categori-banner">
                    <div class="banner-left">
                        <div class="banner-image">
                            <a href="#">
                                <img src="{{theme('img/banner/cms11.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="banner-image">
                            <a href="#">
                                <img src="{{theme('img/banner/cms12.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="banner-right">
                        <div class="banner-image">
                            <a href="#">
                                <img src="{{theme('img/banner/cms13.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End categori banner -->
            <!-- Start categori slide product -->
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="categori-slide-product">
                    <div class="slide-product-title">
                        <h3>sale off</h3>
                    </div>
                    <div class="slide-product">
                        <!-- Start slide product item -->
                        <div class="slide-product-item">
                            <div class="item3">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product-mini/printed-summer-dress1.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-5%</span>
                                </div>
                                <div class="product-info">
                                    <a href="single-product.html">Printed Summer Dress</a>
                                </div>
                            </div>
                            <div class="item3">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product-mini/printed-chiffon-dress3.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="product-info">
                                    <a href="single-product.html">printed chiffon dress</a>
                                </div>
                            </div>
                            <div class="item3">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product-mini/printed-chiffon-dress5.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="product-info">
                                    <a href="single-product.html">Printed Summer Dress</a>
                                </div>
                            </div>
                        </div>
                        <!-- End slide product item -->
                        <!-- Start slide product item -->
                        <div class="slide-product-item">
                            <div class="item3">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product-mini/printed-chiffon-dress2.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="product-info">
                                    <a href="single-product.html">Printed Summer Dress</a>
                                </div>
                            </div>
                            <div class="item3">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product-mini/printed-chiffon-dress4.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="product-info">
                                    <a href="single-product.html">Printed Summer Dress</a>
                                </div>
                            </div>
                            <div class="item3">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product-mini/printed-chiffon-dress6.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="product-info">
                                    <a href="single-product.html">Printed Summer Dress</a>
                                </div>
                            </div>
                        </div>
                        <!-- End slide product item -->
                        <!-- Start slide product item -->
                        <div class="slide-product-item">
                            <div class="item3">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product-mini/printed-chiffon-dress7.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="product-info">
                                    <a href="single-product.html">Printed Summer Dress</a>
                                </div>
                            </div>
                            <div class="item3">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product-mini/printed-chiffon-dress11.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="product-info">
                                    <a href="single-product.html">Printed Summer Dress</a>
                                </div>
                            </div>
                            <div class="item3">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product-mini/printed-chiffon-dress10.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="product-info">
                                    <a href="single-product.html">Printed Summer Dress</a>
                                </div>
                            </div>
                        </div>
                        <!-- End slide product item -->
                        <!-- Start slide product item -->
                        <div class="slide-product-item">
                            <div class="item3">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product-mini/printed-chiffon-dress8.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="product-info">
                                    <a href="single-product.html">Printed Summer Dress</a>
                                </div>
                            </div>
                            <div class="item3">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product-mini/printed-chiffon-dress4.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="product-info">
                                    <a href="single-product.html">Printed Summer Dress</a>
                                </div>
                            </div>
                            <div class="item3">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product-mini/printed-chiffon-dress12.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="product-info">
                                    <a href="single-product.html">Printed Summer Dress</a>
                                </div>
                            </div>
                        </div>
                        <!-- End slide product item -->
                    </div>
                </div>
            </div>
            <!-- End categori slide product -->
        </div>
    </div>
</div>
<!-- End categori area -->
<!-- Start purches progress -->
<div class="purches-progress-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="area-title">
                    <h3>Purchase progress</h3>
                </div>
            </div>
            <div class="progress-area">
                <div class="col-sm-3">
                    <div class="progrtee-box icon">
                        <h4>step 1</h4>
                        <p>select your items</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="progrtee-box icon1">
                        <h4>step 1</h4>
                        <p>select your items</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="progrtee-box icon2">
                        <h4>step 1</h4>
                        <p>select your items</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="progrtee-box icon3">
                        <h4>step 1</h4>
                        <p>select your items</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End purches progress -->
<!-- Start featured product -->
<div class="featured-product-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="area-title">
                    <h3>Featured Products</h3>
                </div>
            </div>
            <div class="featured-product">
                <div class="featured-item">
                    <!-- Start featured item -->
                    <div class="col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/faded-short-sleeves-tshirt.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$16.51</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/blouse.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Blouse</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$27.00</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-dress1.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$26.00</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-dress2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$50.00</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-summer-dress4.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Summer Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$28.00</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-summer-dress.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Summer Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$30.00</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$16.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress4.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$16.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress8.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$16.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress5.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$306.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress3.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$26.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dresst.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$26.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dressac.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$120.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress10.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$20.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dressw.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$30.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress12.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$200.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress13.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$200.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End featured product -->
<!-- Start two banner area -->
<div class="two-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="banner-left">
                    <div class="banner-image">
                        <a href="#">
                            <img src="{{theme('img/banner/cms14.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="banner-right">
                    <div class="banner-image">
                        <a href="#">
                            <img src="{{theme('img/banner/cms15.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End two banner area -->
<!-- Start best sellar area -->
<div class="best-sellar-area featured-product-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="area-title">
                    <h3>BESTSELLER</h3>
                </div>
            </div>
            <div class="featured-product">
                <div class="featured-item">
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/faded-short-sleeves-tshirt.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$16.51</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/blouse.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Blouse</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$27.00</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-dress1.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$26.00</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-dress2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$50.00</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-summer-dress4.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Summer Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$28.00</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-summer-dress.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Summer Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$30.00</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$16.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress4.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$16.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress8.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$16.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress5.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$306.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress3.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$26.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dresst.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$26.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dressac.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$120.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress10.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$20.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dressw.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$30.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress12.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$200.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                    <!-- Start featured item -->
                    <div class="col-xs-12 col-sm-3">
                        <div class="featured-inner">
                            <div class="featured-image">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/printed-chiffon-dress13.jpg')}}" alt="">
                                </a>
                                <span class="price-percent-reduction">-20%</span>
                            </div>
                            <div class="featured-info">
                                <a href="single-product.html">Printed Chiffon Dress</a>
                                <p class="reating">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                </p>
                                <span class="price">$200.40</span>
                                <div class="featured-button">
                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End featured item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End best sellar area -->
<!-- Start camera and cosmatic area -->
<div class="camera-and-cosmatic-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="area-title">
                    <h3>Camera & Camcorders</h3>
                </div>
                <div class="camera-area">
                    <p class="extra-link">
                        <a href="#"><i class="fa fa-bar-chart"></i>10 products here</a>
                        <a href="#"><i class="fa fa-star-o"></i>View more in category</a>
                    </p>
                    <div class="row">
                        <div class="camera-slide featured-product-area">
                            <!-- Start featured item -->
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product/printed-chiffon-dress10.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                    </p>
                                    <span class="price">$20.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product/printed-chiffon-dressw.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                    </p>
                                    <span class="price">$30.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product/printed-chiffon-dress12.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                    </p>
                                    <span class="price">$200.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product/printed-chiffon-dress13.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                    </p>
                                    <span class="price">$200.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="area-title">
                    <h3>Cosmetic</h3>
                </div>
                <div class="cosmatic-area">
                    <p class="extra-link">
                        <a href="#"><i class="fa fa-bar-chart"></i>10 products here</a>
                        <a href="#"><i class="fa fa-star-o"></i>View more in category</a>
                    </p>
                    <div class="row">
                        <div class="camera-slide featured-product-area">
                            <!-- Start featured item -->
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product/printed-chiffon-dress12.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                    </p>
                                    <span class="price">$200.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product/printed-chiffon-dress13.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                    </p>
                                    <span class="price">$200.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product/printed-chiffon-dress10.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                    </p>
                                    <span class="price">$20.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="{{theme('img/product/printed-chiffon-dressw.jpg')}}" alt="">
                                    </a>
                                    <span class="price-percent-reduction">-20%</span>
                                </div>
                                <div class="featured-info">
                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                    <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                    </p>
                                    <span class="price">$30.40</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End camera and cosmatic area -->
<!-- Start popular tab categori -->
<div class="popular-tab-categori">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="area-title">
                    <h3>Popular categories</h3>
                </div>
            </div>
            <div id="content" class="tab-menu-slide">
                <ul id="tabs" class="popular-tab-menu" data-tabs="tabs">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">
                            <i class="fa fa-laptop"></i>
                            <h3>Electronic</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">
                            <i class="fa fa-mobile"></i>
                            <h3>Cosmetic</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#tab3" data-toggle="tab">
                            <i class="fa fa-plug"></i>
                            <h3>Medical & Healthcare</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#tab4" data-toggle="tab">
                            <i class="fa fa-microphone"></i>
                            <h3>Laptop & Computer</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#tab5" data-toggle="tab">
                            <i class="fa fa-gamepad"></i>
                            <h3>Phasellus laoreet</h3>
                        </a>
                    </li>
                    <li><a href="#tab6" data-toggle="tab">
                            <i class="fa fa-camera-retro"></i>
                            <h3>mobile & tablet</h3>
                        </a>
                    </li>
                </ul>
                <div id="my-tab-content" class="tab-content row">
                    <!-- Start popular tab product -->
                    <div class="tab-pane active" id="tab1">
                        <div class="popular-tab-product featured-product-area">
                            <!-- Start featured item -->
                            <div class="col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/faded-short-sleeves-tshirt.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.51</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/blouse.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Blouse</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$27.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-dress1.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-dress2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$50.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-summer-dress4.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$28.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-summer-dress.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$30.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress4.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress8.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress5.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$306.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress3.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dresst.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dressac.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$120.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress10.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$20.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dressw.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$30.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress12.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$200.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress13.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$200.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                        </div>
                    </div>
                    <!-- End popular tab product -->
                    <!-- Start popular tab product -->
                    <div class="tab-pane" id="tab2">
                        <div class="popular-tab-product featured-product-area">
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-summer-dress4.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$28.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress3.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dresst.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dressac.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$120.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress10.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$20.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dressw.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$30.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-summer-dress.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$30.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress4.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress8.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress5.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$306.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/faded-short-sleeves-tshirt.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.51</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/blouse.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Blouse</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$27.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-dress1.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-dress2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$50.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress12.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$200.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress13.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$200.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                        </div>
                    </div>
                    <!-- End popular tab product -->
                    <!-- Start popular tab product -->
                    <div class="tab-pane" id="tab3">
                        <div class="popular-tab-product featured-product-area">
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress4.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress8.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress5.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$306.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress3.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dresst.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/faded-short-sleeves-tshirt.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.51</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/blouse.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Blouse</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$27.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-dress1.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-dress2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$50.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-summer-dress4.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$28.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-summer-dress.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$30.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dressac.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$120.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress10.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$20.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dressw.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$30.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress12.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$200.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress13.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$200.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                        </div>
                    </div>
                    <!-- End popular tab product -->
                    <!-- Start popular tab product -->
                    <div class="tab-pane" id="tab4">
                        <div class="popular-tab-product featured-product-area">
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-dress1.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-dress2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$50.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-summer-dress4.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$28.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-summer-dress.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$30.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/faded-short-sleeves-tshirt.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.51</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/blouse.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Blouse</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$27.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress4.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress8.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress5.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$306.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress3.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dresst.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dressac.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$120.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress10.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$20.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dressw.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$30.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress12.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$200.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress13.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$200.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                        </div>
                    </div>
                    <!-- End popular tab product -->
                    <!-- Start popular tab product -->
                    <div class="tab-pane" id="tab5">
                        <div class="popular-tab-product featured-product-area">
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress8.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress5.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$306.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress3.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dresst.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dressac.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$120.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/faded-short-sleeves-tshirt.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.51</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/blouse.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Blouse</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$27.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-dress1.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-dress2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$50.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-summer-dress4.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$28.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-summer-dress.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$30.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress4.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress10.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$20.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dressw.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$30.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress12.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$200.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress13.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$200.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                        </div>
                    </div>
                    <!-- End popular tab product -->
                    <!-- Start popular tab product -->
                    <div class="tab-pane" id="tab6">
                        <div class="popular-tab-product featured-product-area">
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-dress2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$50.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-summer-dress4.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$28.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-summer-dress.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$30.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress4.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/faded-short-sleeves-tshirt.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.51</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/blouse.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Blouse</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$27.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-dress1.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.00</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress8.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$16.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress5.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$306.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress3.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dresst.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$26.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dressac.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$120.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress10.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$20.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dressw.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$30.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress12.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$200.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                            <!-- Start featured item -->
                            <div class="col-xs-12 col-sm-3">
                                <div class="featured-inner">
                                    <div class="featured-image">
                                        <a href="single-product.html">
                                            <img src="{{theme('img/product/printed-chiffon-dress13.jpg')}}" alt="">
                                        </a>
                                        <span class="price-percent-reduction">-20%</span>
                                    </div>
                                    <div class="featured-info">
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <p class="reating">
                                                        <span class="rate">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                        </p>
                                        <span class="price">$200.40</span>
                                        <div class="featured-button">
                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End featured item -->
                        </div>
                    </div>
                    <!-- End popular tab product -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End popular tab categori -->
<!-- Start brand and client -->
<div class="brand-and-client">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="area-title">
                    <h3>BRAND & CLIENTS</h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="brand-logo featured-product-area">
                    <div class="clients">
                        <a href="#"><img src="{{theme('img/brand-logo/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="{{theme('img/brand-logo/2.jpg')}}" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="{{theme('img/brand-logo/3.jpg')}}" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="{{theme('img/brand-logo/4.jpg')}}" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="{{theme('img/brand-logo/5.jpg')}}" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="{{theme('img/brand-logo/6.jpg')}}" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="{{theme('img/brand-logo/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="{{theme('img/brand-logo/3.jpg')}}" alt=""></a>
                    </div>
                    <div class="clients">
                        <a href="#"><img src="{{theme('img/brand-logo/4.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End brand and client -->
<!-- Start blog area -->
<div class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="area-title">
                    <h3>The Blog</h3>
                </div>
            </div>
            <div class="blog-box featured-product-area">
                <div class="col-xs-12 col-sm-4">
                    <a href="single-blog.html"><img src="{{theme('img/blog/4-home-default.jpg')}}" alt=""></a>
                    <span class="blog-date">2015-08-12 04:40:21</span>
                    <div class="blog-info">
                        <h3><a href="single-blog.html">Share the Love for PrestaShop 1.6</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                        <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <a href="single-blog.html"><img src="{{theme('img/blog/3-home-default.jpg')}}" alt=""></a>
                    <span class="blog-date">2015-08-12 04:40:21</span>
                    <div class="blog-info">
                        <h3><a href="single-blog.html">Answers to your Questions about PrestaShop</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                        <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <a href="single-blog.html"><img src="{{theme('img/blog/2-home-default.jpg')}}" alt=""></a>
                    <span class="blog-date">2015-08-12 04:40:21</span>
                    <div class="blog-info">
                        <h3><a href="single-blog.html">What is Bootstrap? – The History and the Hype</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                        <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <a href="single-blog.html"><img src="{{theme('img/blog/1-home-default.jpg')}}" alt=""></a>
                    <span class="blog-date">2015-08-12 04:40:21</span>
                    <div class="blog-info">
                        <h3><a href="single-blog.html">From Now we are certified web agency</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                        <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End blog area -->
<!-- Start footer -->
@endsection