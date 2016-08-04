@extends('layouts.frontend')
@section('title',config('blog.title'))
@section('content')
        <!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-list">
                    <h1>Blog</h1>
                    <ul>
                        <li><a href="index.html">home</a> <span class="divider">|</span></li>
                        <li>blog</li>

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
                    @foreach ($posts as $post)
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <a href="{{ $post->url($tag) }}"><img src="{{theme('img/blog/2.jpg')}}" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <h3><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h3>
                            @if ($post->subtitle)
                                <h4 class="post-subtitle">{{ $post->subtitle }}</h4>

                            @endif

                            <div class="blog-meta">
                                <span class="blog-date">{{ $post->published_at}}</span>
                                <span class="blog-author">By <a href="#">themebuz</a></span>
                                <span class="blog-cat">in <a href="#">men's Style</a></span>
                                @if ($post->tags->count())
                                    in
                                    {!! join(', ', $post->tagLinks()) !!}
                                @endif
                            </div>
                            <p>{{ str_limit($post->content) }}</p>
                            <a class="read-more" href="/blog/{{ $post->slug }}">Read more <i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="blog-pagination">
                    <ul class="pager">

                        {{-- Reverse direction --}}
                        @if ($reverse_direction)
                            @if ($posts->currentPage() > 1)
                                <li class="previous">
                                    <a href="{!! $posts->url($posts->currentPage() - 1) !!}">
                                        <i class="fa fa-long-arrow-left fa-lg"></i>
                                        Previous {{ $tag->tag }} Posts
                                    </a>
                                </li>
                            @endif
                            @if ($posts->hasMorePages())
                                <li class="next">
                                    <a href="{!! $posts->nextPageUrl() !!}">
                                        Next {{ $tag->tag }} Posts
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </li>
                            @endif
                        @else
                            @if ($posts->currentPage() > 1)
                                <li class="previous">
                                    <a href="{!! $posts->url($posts->currentPage() - 1) !!}">
                                        <i class="fa fa-long-arrow-left fa-lg"></i>
                                        Newer {{ $tag ? $tag->tag : '' }} Posts
                                    </a>
                                </li>
                            @endif
                            @if ($posts->hasMorePages())
                                <li class="next">
                                    <a href="{!! $posts->nextPageUrl() !!}">
                                        Older {{ $tag ? $tag->tag : '' }} Posts
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </li>
                            @endif
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog-area end -->
    
@endsection