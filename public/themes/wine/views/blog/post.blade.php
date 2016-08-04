@extends('layouts.frontend')
@section('title',config('blog.title'))
@section('content')
        <!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1>Blog Details</h1>
                    <ul>
                        <li><a href="index.html">home</a> <span class="divider">|</span></li>
                        <li><a href="blog.html">Blog</a> <span class="divider">|</span></li>
                        <li>{{ $post->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- blog-area start -->
<div class="blog-area pad-60">
    <div class="container">
        <div class="row">
            <!-- left-sidebar start -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <!-- widget start -->
                <aside class="widget widget-categories">
                    <h3 class="sidebar-title">Search</h3>
                    <div class="search-form">
                        <form action="#">
                            <input type="text" placeholder="search">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </aside>
                <!-- widget end -->
                <!-- widget-categories start -->
                <aside class="widget widget-categories">
                    <h3 class="sidebar-title">Categories</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#">Clothes</a> <span class="count">(14)</span></li>
                        <li><a href="#">Men</a> <span class="count">(9)</span></li>
                        <li><a href="#">Shoes</a> <span class="count">(2)</span></li>
                        <li><a href="#">Sunglasses</a> <span class="count">(2)</span></li>
                        <li><a href="#">Women</a> <span class="count">(8)</span></li>
                    </ul>
                </aside>
                <!-- widget-categories end -->
                <!-- widget start -->
                <aside class="widget widget-categories">
                    <h3 class="sidebar-title">Recent Product</h3>
                    <div class="recent-product">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="{{theme('img/product/12.jpg')}}" alt="" />
                                    <img class="secondary-img" src="{{theme('img/product/18.jpg')}}" alt="" />
                                </a>
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
                                    <img src="{{theme('img/product/22.jpg')}}" alt="" />
                                    <img class="secondary-img" src="{{theme('img/product/18.jpg')}}" alt="" />
                                </a>
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
                                    <img src="{{theme('img/product/14.jpg')}}" alt="" />
                                    <img class="secondary-img" src="{{theme('img/product/18.jpg')}}" alt="" />
                                </a>
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
                </aside>
                <!-- widget end -->
                <!-- filter-by start -->
                <aside class="widget filter-by">
                    <h3 class="sidebar-title">Product price</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#">L</a> <span class="count">(1)</span></li>
                        <li><a href="#">M</a> <span class="count">(1)</span></li>
                        <li><a href="#">S</a> <span class="count">(1)</span></li>
                        <li><a href="#">XL</a> <span class="count">(1)</span></li>
                        <li><a href="#">XXL</a> <span class="count">(1)</span></li>
                    </ul>
                </aside>
                <!-- filter-by end -->
                <!-- widget start -->
                <aside class="widget filter-by">
                    <h3 class="sidebar-title">Color</h3>
                    <ul class="sidebar-menu">
                        <li><a href="#">Black</a> <span class="count">(1)</span></li>
                        <li><a href="#">White</a> <span class="count">(8)</span></li>
                        <li><a href="#">Orange</a> <span class="count">(5)</span></li>
                        <li><a href="#">Blue</a> <span class="count">(7)</span></li>
                        <li><a href="#">Yellow</a> <span class="count">(11)</span></li>
                        <li><a href="#">Brown</a> <span class="count">(16)</span></li>
                        <li><a href="#">red</a> <span class="count">(9)</span></li>
                    </ul>
                </aside>
                <!-- widget end -->
                <!-- widget-tags start -->
                <aside class="widget product-tag">
                    <h3 class="sidebar-title">Popular Tags</h3>
                    <ul>
                        <li><a href="#">Top</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Collection</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">men</a></li>
                        <li><a href="#">gallery</a></li>
                        <li><a href="#">new</a></li>
                        <li><a href="#">Collection men</a></li>
                        <li><a href="#">Top</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Collection</a></li>
                        <li><a href="#">best</a></li>
                        <li><a href="shop.html">cloth</a></li>
                    </ul>
                </aside>
                <!-- widget-tags end -->
            </div>
            <!-- left-sidebar end -->
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="blog-page-main">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <img src="{{theme('img/blog/2.jpg')}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <h3>{{ $post->title }}</h3>
                            <div class="blog-meta">
                                <span class="blog-date">{{ $post->published_at}}</span>
                                <span class="blog-author">By <a href="#">themebuz</a></span>
                                <span class="blog-cat">in <a href="#">men's Style</a></span>
                            </div>
                            {!! nl2br(e($post->content_html)) !!}
                        </div>
                        <div class="single-post-comments">
                            <div class="comments-area">
                                <div class="comments-heading">
                                    <h3>3 comments</h3>
                                </div>
                                <div class="comments-list">
                                    <ul>
                                        <li>
                                            <div class="comments-details">
                                                <div class="comments-list-img">
                                                    <img alt="" src="{{theme('img/author.jpg')}}">
                                                </div>
                                                <div class="comments-content-wrap">
															<span>
																<b><a href="#">admin</a></b>
																Post author
																<span class="post-time">January 10, 2015 at 3:38 am</span>
																<a href="#">Reply</a>
															</span>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="threaded-comments">
                                            <div class="comments-details">
                                                <div class="comments-list-img">
                                                    <img alt="" src="{{theme('img/author.jpg')}}">
                                                </div>
                                                <div class="comments-content-wrap">
															<span>
																<b><a href="#">demo</a></b>
																Post author
																<span class="post-time">January 6, 2014 at 2:25 pm</span>
																<a href="#">Reply</a>
															</span>
                                                    <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comments-details">
                                                <div class="comments-list-img">
                                                    <img alt="" src="{{theme('img/author.jpg')}}">
                                                </div>
                                                <div class="comments-content-wrap">
															<span>
																<b><a href="#">admin</a></b>
																Post author
																<span class="post-time">January 6, 2014 at 3:18 pm </span>
																<a href="#">Reply</a>
															</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply </h3>
                                <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <p>Name *</p>
                                            <input type="text">
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p>Email *</p>
                                            <input type="email">
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <p>Website</p>
                                            <input type="text">
                                        </div>
                                        <div class="col-md-12 col-sm-12 comment-form-comment">
                                            <p>Website</p>
                                            <textarea rows="10" cols="30" id="message"></textarea>
                                            <input type="submit" value="Post Comment">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- single-latest-blog end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="blog-pagination">
                    <div class="shop-breadcrumb">
                        <button class="btn btn-primary" onclick="history.go(-1)">
                            « Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog-area end -->
@endsection