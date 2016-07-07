@extends('layouts.frontend')
@section('title', 'Shop List')
@section('content')
    <div class="page-content">
        <!-- Start breadcume area -->
        <div class="breadcume-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb">
                            <a title="Return to Home" href="index-2.html" class="home"><i class="fa fa-home"></i></a>
                            <span class="navigation-pipe">&gt;</span>
                             Electronics
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcume area -->
        <!-- Start shop area -->
        <div class="shop-area">
            <div class="container">
                <div class="row">
                    <!-- Start shop categori area -->
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="shop-categori-area">
                            <div class="sidebar-menu-title">
                                <h2><i class="fa fa-th-list"></i>Catalog</h2>
                            </div>
                            <div class="shop-categori">
                                <div class="shop-categori-inner">
                                    <!-- Start Categori -->
                                    <div class="categoris categori-border">
                                        <span class="cat-title">Categories</span>
                                        <ul>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">category 1<span> (17)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">category 2<span> (17)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">category 3<span> (17)</span></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Categori -->
                                    <!-- Start Categori -->
                                    <div class="categoris categori-border">
                                        <span class="cat-title">Availability</span>
                                        <ul>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">In stock<span> (17)</span></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Categori -->
                                    <!-- Start Categori -->
                                    <div class="categoris categori-border">
                                        <span class="cat-title">Condition</span>
                                        <ul>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">New<span> (17)</span></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Categori -->
                                    <!-- Start Categori -->
                                    <div class="categoris categori-border">
                                        <span class="cat-title">Manufacturer</span>
                                        <ul>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">Fashion Manufacturer<span> (17)</span></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Categori -->
                                    <!-- Start Categori -->
                                    <div class="categoris categori-border">
                                        <span class="cat-title">Price</span>
                                        <ul>
                                            <li class="price-range">
                                                <label for="amount">Range: <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"></label>
                                                <div id="slider-range"></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Categori -->
                                    <!-- Start Categori -->
                                    <div class="categoris categori-border">
                                        <span class="cat-title">Size</span>
                                        <ul>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">S<span> (17)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">M<span> (17)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">L<span> (17)</span></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Categori -->
                                    <!-- Start Categori -->
                                    <div class="categoris categori-border">
                                        <span class="cat-title">Compositions</span>
                                        <ul>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">Cotton<span> (3)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">Polyester<span> (12)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">Viscose<span> (2)</span></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Categori -->
                                    <!-- Start Categori -->
                                    <div class="categoris categori-border">
                                        <span class="cat-title">Styles</span>
                                        <ul>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">Casual<span> (3)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">Dressy<span> (1)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">Girly<span> (13)</span></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Categori -->
                                    <!-- Start Categori -->
                                    <div class="categoris categori-border">
                                        <span class="cat-title">Properties</span>
                                        <ul>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">Colorful Dress<span> (1)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">Maxi Dress<span> (1)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">Midi Dress<span> (11)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">Short Dress<span> (2)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                    <a href="#">Short Sleeve<span> (2)</span></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Categori -->
                                </div>
                            </div>
                            <div class="tag-area">
                                <h2 class="tag-title">Tags</h2>
                                <div class="tags">
                                    <a href="#">camera</a>
                                    <a href="#">mobile</a>
                                    <a href="#">electronic</a>
                                    <a href="#">destop</a>
                                    <a href="#">tablet</a>
                                    <a href="#">accessories</a>
                                    <a href="#">camcorder</a>
                                    <a href="#">laptop</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End shop categori area -->
                    <!-- Start categori content -->
                    <div class="col-xs-12 col-sm-8 col-md-9">
                        <div id="content-shop" class="categori-content">
                            <div class="categori-baner">
                                <img src="img/shop/sports-outdoors.jpg" alt="">
                            </div>
                            <h1 class="page-heading product-listing"><span class="cat-name">Electronics</span><span class="heading-counter">...</span>
                            </h1>
                            <!-- Start catagori short -->
                            <div class="catagori-short">
                                <ul id="gridlist" class="nav nav-tabs" data-tabs="tabs">
                                    <li><a href="#grid" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                                    <li class="active"><a href="#list" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                                <div class="chose-box">
                                    <p class="selector1 hidden-xs">
                                        <label>Sort by</label>
                                        <select class="selectProductSort form-control" id="selectProductSort1">
                                            <option selected="selected" value="position:asc">--</option>
                                            <option value="price:asc">Price: Lowest first</option>
                                            <option value="price:desc">Price: Highest first</option>
                                            <option value="name:asc">Product Name: A to Z</option>
                                            <option value="name:desc">Product Name: Z to A</option>
                                            <option value="quantity:desc">In stock</option>
                                            <option value="reference:asc">Reference: Lowest first</option>
                                            <option value="reference:desc">Reference: Highest first</option>
                                        </select>
                                    </p>
                                    <p class="selector1 selector2">
                                        <label>Show</label>
                                        <select class="selectProductSort form-control" id="selectProductSort2">
                                            <option selected="selected" value="position:asc">12</option>
                                            <option value="price:asc">24</option>
                                        </select>
                                    </p>
                                </div>
                            </div>
                            <!-- End catagori short -->
                             <div id="my-tab-content" class="tab-content">
                                <!-- Start categori grid view -->
                                <div id="grid" class="tab-pane categoti-grid-view row">
                                    <!-- Start featured item -->
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="single-product.html">
                                                    <img src="img/product/faded-short-sleeves-tshirt.jpg" alt="">
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
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="single-product.html">
                                                    <img src="img/product/blouse.jpg" alt="">
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
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="single-product.html">
                                                    <img src="img/product/printed-dress1.jpg" alt="">
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
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="single-product.html">
                                                    <img src="img/product/printed-dress2.jpg" alt="">
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
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="single-product.html">
                                                    <img src="img/product/printed-summer-dress4.jpg" alt="">
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
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="single-product.html">
                                                    <img src="img/product/printed-summer-dress.jpg" alt="">
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
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="single-product.html">
                                                    <img src="img/product/printed-chiffon-dress1.jpg" alt="">
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
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="single-product.html">
                                                    <img src="img/product/printed-chiffon-dress4.jpg" alt="">
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
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="single-product.html">
                                                    <img src="img/product/printed-chiffon-dress8.jpg" alt="">
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
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="single-product.html">
                                                    <img src="img/product/printed-chiffon-dress5.jpg" alt="">
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
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="single-product.html">
                                                    <img src="img/product/printed-chiffon-dress3.jpg" alt="">
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
                                </div>
                                <!-- End categori grid view -->
                                <div id="list" class="tab-pane active categori-list-view row">
                                    <!-- Start featured item -->
                                    <div class="col-sm-12">
                                        @foreach($products as $product)
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="single-product.html">
                                                    <img src="{{ $product->imagePath }}" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-info">
                                                <a href="single-product.html">{{ $product->title }}</a>
                                                <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </p>
                                                <p class="product-text">{{ $product->description }} </p>
                                                <span class="price">{{ $product->price }}</span>
                                                <div class="featured-button">
                                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                                    <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                                    <a href="{{ route('pages.cart', ['id' => $product->id]) }}" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- End featured item -->
                                </div>
                            </div>
                            <!-- Start categori show item -->
                            <div class="categori-show-item">
                                <div class="cat-show-item">
                                    <p>Showing 1 - 8 of 8 items</p>
                                </div>
                                <div class="cat-show-button">
                                    <a class="cat-button" href="#"><span>Compare(0)<i class="fa fa-angle-right"></i></span></a>
                                </div>
                            </div>
                            <!-- End categori show item -->
                        </div>
                    </div>
                    <!-- Start categori content -->
                </div>
            </div>
        </div>
        <!-- End shop area -->
    </div>
    <!-- End page content -->
    <!-- Start brand and client -->
    <div class="brand-and-client">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="area-title">
                        <h3>BRAND & CLIENTS</h3>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="brand-logo featured-product-area">
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/1.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/2.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/3.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/4.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/5.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/6.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/1.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/3.jpg" alt=""></a>
                        </div>
                        <div class="clients">
                            <a href="#"><img src="img/brand-logo/4.jpg" alt=""></a>
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
                <div class="col-sm-12">
                    <div class="area-title">
                        <h3>The Blog</h3>
                    </div>
                </div>
                <div class="blog-box featured-product-area">
                    <div class="col-sm-4">
                        <a href="single-blog.html"><img src="img/blog/4-home-default.jpg" alt=""></a>
                        <span class="blog-date">2015-08-12 04:40:21</span>
                        <div class="blog-info">
                            <h3><a href="single-blog.html">Share the Love for PrestaShop 1.6</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                            <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="single-blog.html"><img src="img/blog/3-home-default.jpg" alt=""></a>
                        <span class="blog-date">2015-08-12 04:40:21</span>
                        <div class="blog-info">
                            <h3><a href="single-blog.html">Answers to your Questions about PrestaShop</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                            <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="single-blog.html"><img src="img/blog/2-home-default.jpg" alt=""></a>
                        <span class="blog-date">2015-08-12 04:40:21</span>
                        <div class="blog-info">
                            <h3><a href="single-blog.html">What is Bootstrap? – The History and the Hype</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                            <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="single-blog.html"><img src="img/blog/1-home-default.jpg" alt=""></a>
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
@endsection