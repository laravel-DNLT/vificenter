<header id="header">
    <div class="header-container">
        <div id="topbar">
            <div class="banner">
                <div class="container">
                    <div class="row"></div>
                </div>
            </div>
            <div class="nav">
                <div class="container">
                    <div class="inner">
                        @include('includes.navbar')
                            <!-- /Block languages module -->
                    </div>
                </div>
            </div>
        </div>
        <div id="header-main">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div id="header_logo" class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <a href="{{ url('/') }}" title="KT Wine Store">
                                <img class="logo img-responsive" src="{{theme('frontend/img/logo.png')}}" alt="KT Wine Store"/>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                            <nav id="cavas_menu"  class="sf-contener leo-megamenu col-xs-4 col-sm-9 col-md-9 col-lg-9">
                                <div class="" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle btn-outline-inverse" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="fa fa-bars"></span>
                                        </button>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div id="leo-top-menu" class="collapse navbar-collapse navbar-ex1-collapse">
                                        <ul class="nav navbar-nav megamenu">
                                            <li class="" >
                                                <a href="index.html" target="_self" class="has-category">
                                                    <span class="menu-title">Home</span>
                                                </a>
                                            </li>
                                            <li class=" parent dropdown aligned-fullwidth " >
                                                <a href="#" class="dropdown-toggle has-category" data-toggle="dropdown" target="_self">
                                                    <span class="menu-title">Categories</span>
                                                    <b class="caret"></b>
                                                </a>
                                                <div class="dropdown-sub dropdown-menu"  style="width:680px" >
                                                    <div class="dropdown-menu-inner">
                                                        <div class="row">
                                                            <div class="mega-col col-sm-4" >
                                                                <div class="mega-col-inner ">
                                                                    <div class="leo-widget">
                                                                        <div class="widget-subcategories">
                                                                            <div class="widget-inner">
                                                                                <div class="menu-title">Home</div>
                                                                                <ul>
                                                                                    <li class="clearfix">
                                                                                        <a href="{{ url('champagne') }}" title="Champagne" class="img">
                                                                                            Champagne
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="clearfix">
                                                                                        <a href="{{ url('kosher') }}" title="Kosher" class="img">
                                                                                            Kosher
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="clearfix">
                                                                                        <a href="15-organic.html" title="Organic" class="img">
                                                                                            Organic
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="clearfix">
                                                                                        <a href="{{ url('rose') }}" title="Rose" class="img">
                                                                                            Rose
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="clearfix">
                                                                                        <a href="17-sparkling.html" title="Sparkling" class="img">
                                                                                            Sparkling
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="clearfix">
                                                                                        <a href="18-blush.html" title="Blush" class="img">
                                                                                            Blush
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mega-col col-sm-8" >
                                                                <div class="mega-col-inner list_poduct_menu">
                                                                    <div class="leo-widget">
                                                                        <div class="widget-video">
                                                                            <div class="menu-title">
                                                                                Video code
                                                                            </div>
                                                                            <div class="widget-inner">
                                                                                <!-- <iframe width="450" height="210" allowfullscreen="" style="border:none" src="https://www.youtube.com/embed/OBOCBUZ7aLQ"></iframe> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mega-col col-sm-12" >
                                                                <div class="mega-col-inner ">
                                                                    <div class="leo-widget">
                                                                        <div class="widget-html">
                                                                            <div class="widget-inner">
                                                                                <p>
                                                                                    <img class="img-responsive" src="{{theme('frontend/img/modules/leobootstrapmenu/3.jpg')}}" alt="" />
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            {{--<li class=" parent dropdown aligned-fullwidth " >--}}
                                                {{--<a href="#" class="dropdown-toggle has-category" data-toggle="dropdown" target="_self">--}}
                                                    {{--<span class="menu-title">Community</span>--}}
                                                    {{--<b class="caret"></b>--}}
                                                {{--</a>--}}
                                                {{--<div class="dropdown-sub dropdown-menu"  style="width:680px" >--}}
                                                    {{--<div class="dropdown-menu-inner">--}}
                                                        {{--<div class="row">--}}
                                                            {{--<div class="mega-col col-sm-4" >--}}
                                                                {{--<div class="mega-col-inner ">--}}
                                                                    {{--<div class="leo-widget">--}}
                                                                        {{--<div class="widget-links">--}}
                                                                            {{--<div class="menu-title">--}}
                                                                                {{--Custom Module--}}
                                                                            {{--</div>--}}
                                                                            {{--<div class="widget-inner">--}}
                                                                                {{--<div id="tabs891488586" class="panel-group">--}}
                                                                                    {{--<ul class="nav-links">--}}
                                                                                        {{--<li >--}}
                                                                                            {{--<a href="#Link1" >Proin ac sapien ut</a>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li >--}}
                                                                                            {{--<a href="#link2" >Samsung</a>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li >--}}
                                                                                            {{--<a href="#link3" >Donec magna diam</a>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li >--}}
                                                                                            {{--<a href="#link4" >Headphones</a>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li >--}}
                                                                                            {{--<a href="#link5" >Fully Loaded</a>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li >--}}
                                                                                            {{--<a href="#Link1" >Donec magna diam</a>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li >--}}
                                                                                            {{--<a href="#Link1" >Vivamus non nisl ut</a>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li >--}}
                                                                                            {{--<a href="#Link1" >Vivamus non nisl ut</a>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li >--}}
                                                                                            {{--<a href="#Link1" ></a>--}}
                                                                                        {{--</li>--}}
                                                                                        {{--<li >--}}
                                                                                            {{--<a href="#Link1" ></a>--}}
                                                                                        {{--</li>--}}
                                                                                    {{--</ul>--}}
                                                                                {{--</div>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="mega-col col-sm-4" >--}}
                                                                {{--<div class="mega-col-inner ">--}}
                                                                    {{--<div class="leo-widget">--}}
                                                                        {{--<div class="widget-products">--}}
                                                                            {{--<div class="menu-title">--}}
                                                                                {{--Product New--}}
                                                                            {{--</div>--}}
                                                                            {{--<div class="widget-inner">--}}
                                                                                {{--<div class="product-block">--}}
                                                                                    {{--<div class="product-container clearfix" itemscope itemtype="http://schema.org/Product">--}}
                                                                                        {{--<div class="image ">--}}
                                                                                            {{--<a class="product_img_link"	href="home/19-donec-tellus-purus.html" title="Mattis augue" itemprop="url">--}}
                                                                                                {{--<img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus42small.jpg')}}" alt="Mattis augue" title="Mattis augue"  itemprop="image" />--}}
                                                                                            {{--</a>--}}
                                                                                                    {{--<span class="new-box">--}}
                                                                                                        {{--<span class="new-label product-label">New</span>--}}
                                                                                                    {{--</span>--}}
                                                                                        {{--</div>--}}
                                                                                        {{--<div class="product-meta">--}}
                                                                                            {{--<h5 itemprop="name" class="name">--}}
                                                                                                {{--<a class="product-name" href="home/19-donec-tellus-purus.html" title="Mattis augue" itemprop="url" >--}}
                                                                                                    {{--Mattis augue--}}
                                                                                                {{--</a>--}}
                                                                                            {{--</h5>--}}
                                                                                            {{--<p class="product-desc" itemprop="description">--}}
                                                                                                {{--Donec tellus purus, tristique at nulla id, mollis...--}}
                                                                                            {{--</p>--}}
                                                                                            {{--<div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">--}}
                                                                                                {{--<div class="star_content">--}}
                                                                                                    {{--<div class="star"></div>--}}
                                                                                                    {{--<div class="star"></div>--}}
                                                                                                    {{--<div class="star"></div>--}}
                                                                                                    {{--<div class="star"></div>--}}
                                                                                                    {{--<div class="star"></div>--}}
                                                                                                    {{--<meta itemprop="worstRating" content = "0" />--}}
                                                                                                    {{--<meta itemprop="ratingValue" content = "0" />--}}
                                                                                                    {{--<meta itemprop="bestRating" content = "5" />--}}
                                                                                                {{--</div>--}}
                                                                                                        {{--<span class="nb-comments">--}}
                                                                                                            {{--<span itemprop="reviewCount">0</span> Review(s)--}}
                                                                                                        {{--</span>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">--}}
                                                                                                        {{--<span itemprop="price" class="price product-price">--}}
							{{--$223.25										</span>--}}
                                                                                                {{--<meta itemprop="priceCurrency" content="1" />--}}
                                                                                                        {{--<span class="old-price product-price">--}}
								{{--$235.00--}}
							{{--</span>--}}
                                                                                                {{--<span class="price-percent-reduction">-5%</span>--}}
                                                                                            {{--</div>--}}
                                                                                        {{--</div>--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="product-container clearfix" itemscope itemtype="http://schema.org/Product">--}}
                                                                                        {{--<div class="image ">--}}
                                                                                            {{--<a class="product_img_link"	href="home/18-donec-tellus-purus.html" title="Ligula ullamcorper" itemprop="url">--}}
                                                                                                {{--<img class="replace-2x img-responsive" src="{{theme('frontend/img/products/donec-tellus-purus41small.jpg') }}" alt="Ligula ullamcorper" title="Ligula ullamcorper"  itemprop="image" />--}}
                                                                                            {{--</a>--}}
                                                                                                    {{--<span class="new-box">--}}
                                                                                                        {{--<span class="new-label product-label">New</span>--}}
                                                                                                    {{--</span>--}}
                                                                                        {{--</div>--}}
                                                                                        {{--<div class="product-meta">--}}
                                                                                            {{--<h5 itemprop="name" class="name">--}}
                                                                                                {{--<a class="product-name" href="home/18-donec-tellus-purus.html" title="Ligula ullamcorper" itemprop="url" >--}}
                                                                                                    {{--Ligula ullamcorper--}}
                                                                                                {{--</a>--}}
                                                                                            {{--</h5>--}}
                                                                                            {{--<p class="product-desc" itemprop="description">--}}
                                                                                                {{--Donec tellus purus, tristique at nulla id, mollis...--}}
                                                                                            {{--</p>--}}
                                                                                            {{--<div class="comments_note product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">--}}
                                                                                                {{--<div class="star_content">--}}
                                                                                                    {{--<div class="star"></div>--}}
                                                                                                    {{--<div class="star"></div>--}}
                                                                                                    {{--<div class="star"></div>--}}
                                                                                                    {{--<div class="star"></div>--}}
                                                                                                    {{--<div class="star"></div>--}}
                                                                                                    {{--<meta itemprop="worstRating" content = "0" />--}}
                                                                                                    {{--<meta itemprop="ratingValue" content = "0" />--}}
                                                                                                    {{--<meta itemprop="bestRating" content = "5" />--}}
                                                                                                {{--</div>--}}
                                                                                                        {{--<span class="nb-comments">--}}
                                                                                                            {{--<span itemprop="reviewCount">0</span> Review(s)--}}
                                                                                                        {{--</span>--}}
                                                                                            {{--</div>--}}
                                                                                            {{--<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">--}}
                                                                                                        {{--<span itemprop="price" class="price product-price">--}}
								{{--$223.25										</span>--}}
                                                                                                {{--<meta itemprop="priceCurrency" content="1" />--}}
                                                                                                        {{--<span class="old-price product-price">--}}
									{{--$235.00--}}
								{{--</span>--}}
                                                                                                {{--<span class="price-percent-reduction">-5%</span>--}}
                                                                                            {{--</div>--}}
                                                                                        {{--</div>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="mega-col col-sm-4" >--}}
                                                                {{--<div class="mega-col-inner ">--}}
                                                                    {{--<div class="leo-widget">--}}
                                                                        {{--<div class="widget-html">--}}
                                                                            {{--<div class="menu-title">--}}
                                                                                {{--Morbi ipsum--}}
                                                                            {{--</div>--}}
                                                                            {{--<div class="widget-inner">--}}
                                                                                {{--<div class="menu-content">--}}
                                                                                    {{--<p>--}}
                                                                                        {{--<img class="img-responsive" src="{{theme('frontend/img/modules/leobootstrapmenu/2.jpg') }}" alt="" />--}}
                                                                                    {{--</p>--}}
                                                                                    {{--<p>--}}
                                                                                        {{--<a href="#">Mauris in erat justo nullam ac urna eu felis dapibus condimentum sit amet a sed ut imperdiet nisi.</a>--}}
                                                                                    {{--</p>--}}
                                                                                {{--</div>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="row">--}}
                                                            {{--<div class="mega-col col-sm-12" >--}}
                                                                {{--<div class="mega-col-inner ">--}}
                                                                    {{--<div class="leo-widget">--}}
                                                                        {{--<div class="widget-html">--}}
                                                                            {{--<div class="widget-inner">--}}
                                                                                {{--<div class="ct_menu">--}}
                                                                                    {{--<p>100 Kindle Books for--}}
                                                                                        {{--<strong>$3.99</strong> or less--}}
                                                                                        {{--<a class="shop-now" href="#">Shop now</a>--}}
                                                                                    {{--</p>--}}
                                                                                {{--</div>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="parent dropdown  " >--}}
                                                {{--<a class="dropdown-toggle has-category" data-toggle="dropdown" href="rose.html" target="_self">--}}
                                                    {{--<span class="menu-title">Shop</span>--}}
                                                    {{--<b class="caret"></b>--}}
                                                {{--</a>--}}
                                                {{--<div class="dropdown-menu level1"  style="width:210px" >--}}
                                                    {{--<div class="dropdown-menu-inner">--}}
                                                        {{--<div class="row">--}}
                                                            {{--<div class="mega-col col-sm-12" data-type="menu" >--}}
                                                                {{--<div class="mega-col-inner ">--}}
                                                                    {{--<ul>--}}
                                                                        {{--<li class=" " >--}}
                                                                            {{--<a href="index.html">--}}
                                                                                {{--<span class="menu-title">Lorem ipsum dolor sit</span>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li class="parent dropdown-submenu " >--}}
                                                                            {{--<a class="dropdown-toggle" data-toggle="dropdown" href="index.html">--}}
                                                                                {{--<span class="menu-title">Nulla quis felis at sapien</span>--}}
                                                                                {{--<b class="caret"></b>--}}
                                                                            {{--</a>--}}
                                                                            {{--<div class="dropdown-menu level2"  >--}}
                                                                                {{--<div class="dropdown-menu-inner">--}}
                                                                                    {{--<div class="row">--}}
                                                                                        {{--<div class="mega-col col-sm-12" data-type="menu" >--}}
                                                                                            {{--<div class="mega-col-inner ">--}}
                                                                                                {{--<ul>--}}
                                                                                                    {{--<li class=" " >--}}
                                                                                                        {{--<a href="index.html">--}}
                                                                                                            {{--<span class="menu-title">Proin ac sapien ut</span>--}}
                                                                                                        {{--</a>--}}
                                                                                                    {{--</li>--}}
                                                                                                    {{--<li class=" " >--}}
                                                                                                        {{--<a href="index.html">--}}
                                                                                                            {{--<span class="menu-title">Proin ac sapien ut</span>--}}
                                                                                                        {{--</a>--}}
                                                                                                    {{--</li>--}}
                                                                                                    {{--<li class=" " >--}}
                                                                                                        {{--<a href="index.html">--}}
                                                                                                            {{--<span class="menu-title">Nulla quis felis at sapien</span>--}}
                                                                                                        {{--</a>--}}
                                                                                                    {{--</li>--}}
                                                                                                {{--</ul>--}}
                                                                                            {{--</div>--}}
                                                                                        {{--</div>--}}
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            {{--</div>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li class=" " >--}}
                                                                            {{--<a href="index.html">--}}
                                                                                {{--<span class="menu-title">Donec magna diam</span>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li class=" " >--}}
                                                                            {{--<a href="index.html">--}}
                                                                                {{--<span class="menu-title">Vivamus non nisl ut</span>--}}
                                                                            {{--</a>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            <li class="" >
                                                <a href="{{ url('blog') }}" target="_self" class="has-category">
                                                    <span class="menu-title">Blog</span>
                                                </a>
                                            </li>
                                            <li class="" >
                                                <a href="{{ url('delivery') }}" target="_self" class="has-category">
                                                    <span class="menu-title">Delivery</span>
                                                </a>
                                            </li>
                                            <li class="" >
                                                <a href="{{ url('about') }}" target="_self" class="has-category">
                                                    <span class="menu-title">About Us</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>