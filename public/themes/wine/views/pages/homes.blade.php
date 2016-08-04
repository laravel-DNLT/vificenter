@extends('layouts.frontend')
@section('title', 'Home Page')
@section('content')
    {{--SLIDE SHOW--}}
    <div id="slideshow" class="clearfix">
        <div class="bannercontainer banner-fullwidth" style="padding: 0 0;margin: 0 ;background-color:#ffffff">
            <div id="sliderlayer146517296" class="rev_slider fullwidthbanner" style="width:100%;height:585px; " >
                <ul>

                    <li data-link="#"  data-masterspeed="300"  data-transition="random" data-slotamount="7" data-thumb="img/modules/leosliderlayer/bg-slider.jpg">
                        <img src="{{ theme('img/modules/leosliderlayer/bg-slider.jpg') }}" alt=""/>
                        <div class="caption lfr easeOutExpo                        "
                             data-x="30"
                             data-y="45"
                             data-speed="300"
                             data-start="400"
                             data-easing="easeOutExpo">

                            <img src="{{ theme('img/modules/leosliderlayer/image2.png') }}" alt=""/>

                        </div>
                        <div class="caption very_large_black_text lft easeOutExpo                        ltt"
                             data-x="708"
                             data-y="120"
                             data-speed="300"
                             data-start="800"
                             data-easing="easeOutExpo"                           style="font-size:62px;color:#ffffff">



                        </div>
                        <div class="caption large_text lfl easeOutExpo                        ltb"
                             data-x="711"
                             data-y="222"
                             data-speed="300"
                             data-start="1200"
                             data-easing="easeOutExpo"                           style="font-size:62px;background-color:transparent;color:#7b9f52">



                        </div>
                        <div class="caption small_text lfr easeOutExpo                        randomrotateout"
                             data-x="715"
                             data-y="293"
                             data-speed="300"
                             data-start="1600"
                             data-easing="easeOutExpo"  data-link="http://www.prestashop.com/"                         style="font-size:14px;color:#fff">


                        </div>
                        <div class="caption link_detail lfr easeOutExpo                        "
                             data-x="721"
                             data-y="362"
                             data-speed="300"
                             data-start="2000"
                             data-easing="easeOutExpo"                           style="font-size:14px;color:#fff">



                        </div>
                    </li>

                    <li   data-masterspeed="300"  data-transition="random" data-slotamount="7" data-thumb="img/modules/leosliderlayer/bg-slider.jpg">
                        <img src="{{ theme('img/modules/leosliderlayer/bg-slider.jpg') }}" alt=""/>
                        <div class="caption very_large_black_text lfb easeOutExpo                        randomrotateout"
                             data-x="57"
                             data-y="107"
                             data-speed="300"
                             data-start="800"
                             data-easing="easeOutExpo"                           style="font-size:62px;color:#ffffff">



                        </div>
                        <div class="caption large_text lfr easeOutExpo                        stb"
                             data-x="62"
                             data-y="203"
                             data-speed="300"
                             data-start="1200"
                             data-easing="easeOutExpo"                           style="font-size:62px;color:#7b9f52">


                        </div>
                        <div class="caption small_text lfb easeOutExpo                        stl"
                             data-x="69"
                             data-y="276"
                             data-speed="300"
                             data-start="1600"
                             data-easing="easeOutExpo"  data-link="http://www.prestashop.com/"                         style="font-size:14px;color:#FFF">



                        </div>
                        <div class="caption link_detail lfb easeOutExpo                        "
                             data-x="70"
                             data-y="342"
                             data-speed="300"
                             data-start="2000"
                             data-easing="easeOutExpo"                           style="color:#FFF">



                        </div>
                        <div class="caption lfb easeOutExpo                        "
                             data-x="554"
                             data-y="24"
                             data-speed="300"
                             data-start="2400"
                             data-easing="easeOutExpo"                           >

                            <img src="{{ theme('img/modules/leosliderlayer/image1.png') }}" alt=""/>

                        </div>
                    </li>

                    <li   data-masterspeed="300"  data-transition="random" data-slotamount="7" data-thumb="img/modules/leosliderlayer/bg-slider.jpg">
                        <img src="{{ theme('img/modules/leosliderlayer/bg-slider.jpg') }}" alt=""/>
                        <div class="caption randomrotate easeOutExpo                        "
                             data-x="62"
                             data-y="61"
                             data-speed="300"
                             data-start="600"
                             data-easing="easeOutExpo"                           >

                            <img src="{{ theme('img/modules/leosliderlayer/image5.png') }}" alt=""/>

                        </div>
                        <div class="caption very_large_black_text lft easeOutExpo                        "
                             data-x="588"
                             data-y="104"
                             data-speed="300"
                             data-start="1000"
                             data-easing="easeOutExpo"  data-link="#"                         style="font-size:62px;color:#FFF">



                        </div>
                        <div class="caption large_text lfb easeOutExpo                        "
                             data-x="589"
                             data-y="211"
                             data-speed="300"
                             data-start="1200"
                             data-easing="easeOutExpo"                           style="font-size:62px;color:#7b9f52">



                        </div>
                        <div class="caption small_text randomrotate easeOutExpo                        "
                             data-x="599"
                             data-y="294"
                             data-speed="300"
                             data-start="1600"
                             data-easing="easeOutExpo"  data-link="http://www.prestashop.com/"                         style="font-size:14px;color:#fff">


                        </div>
                        <div class="caption link_detail randomrotate easeOutExpo                        "
                             data-x="598"
                             data-y="373"
                             data-speed="300"
                             data-start="2000"
                             data-easing="easeOutExpo"                           style="color:#FFF">



                        </div>
                    </li>
                </ul>

                <div class="tp-bannertimer tp-top"></div>
            </div>
        </div>


    </div>
    {{--END SLIDE SHOW--}}

    <div id="columns" class="columns-container">
        <div class="container">
            <div class="row">
                <div id="top_column" class="center_column col-xs-12 col-sm-12 col-md-12">

                </div>
            </div>
            <div class="row">
                <!-- Center -->
                <div id="center_column" class="col-md-12">
                    <div class="clearfix">

                        <div class="clearfix">                                                                                                                                    <div class="row " >
                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 nopadding nobackground" >
                                    <div class="widget-html block">
                                        <div class="block_content">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12 block ">
                                                    <div class=" banner-image"><img class="img-responsive" src="{{theme('img/modules/leomanagewidgets/banner1.jpg')}}" alt="" /></div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 block">
                                                    <div class=" banner-image"><img class="img-responsive " src="{{theme('img/modules/leomanagewidgets/banner2.jpg')}}" alt="" /></div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 block">
                                                    <div class=" banner-image "><img class="img-responsive" src="{{theme('img/modules/leomanagewidgets/banner3.jpg')}}" alt="" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 nopadding nobackground hidden-xs hidden-sm hidden-sp" >
                                    <div class="widget-html block">
                                        <div class="block_content">
                                            <div class="media-list clearfix">
                                                <div class="wapper wapper-left">
                                                    <div class="media free">
                                                        <div class="media-content"><a class="pull-left" href="#"><img src="{{ theme('img/modules/leomanagewidgets/icon-free.png') }}" alt="" /></a>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">Free Shipping</h4>
                                                                <p>On order over $99.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wapper  wapper-center">
                                                    <div class="media Discount">
                                                        <div class="media-content"><a class="pull-left" href="#"><img src="{{ theme('img/modules/leomanagewidgets/icon-discounts.pn') }}g" alt="" /></a>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">Discount on Orders</h4>
                                                                <p>Tellus aodio consequat odio sed.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wapper  wapper-right">
                                                    <div class="media need">
                                                        <div class="media-content"><a class="pull-left" href="#"><img src="{{ theme('img/modules/leomanagewidgets/icon-need.png') }}" alt="" /></a>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">Need on Help</h4>
                                                                <p>On order over $88.00</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12" >
                                    <div class="products_block exclusive leomanagerwidgets nopadding nobackground text-center block" >
                                        <h4 class="page-heading text-center">New products</h4>
                                        <div class="block_content text-left">
                                            <div class="carousel slide" id="leoproductcarousel152678724">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <div class="product_list grid">
                                                            <div class="row">
                                                                @foreach($products as $item)
                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">
                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="8"></div>
                                                                                <a class="product_img_link"	href="{{  URL('detail',[$item->id,$item->title]) }}" title="Donec tellus purus" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{ asset('uploads/wine/image/'.$item->imagePath) }}" alt="{{ $item->title }}" title="{{ $item->title }}" itemprop="image" style="height: 360px"/>
                                                                                    <span class="product-additional" data-idproduct="8"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="{{  URL('detail',[$item->id,$item->title]) }}" rel="{{  URL('detail',[$item->id,$item->title]) }}" title="Quick view" ></a>
                                                                                <span class="new-box">
                                                                                    <span class="new-label product-label">New</span>
                                                                                </span>
                                                                                <span class="sale-box">
                                                                                    <span class="sale-label product-label">Sale!</span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="{{  URL('detail',[$item->id,$item->title]) }}" title="Donec tellus purus" itemprop="url" >
                                                                                       {{ $item->title }}
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    {{ $item->description }}
                                                                                </p>
                                                                                <div itemprop="offers" itemscope itemtype="{{  URL('detail',[$item->id,$item->title]) }}" class="content_price">
																			<span itemprop="price" class="price product-price">{{ $item->price }}</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />


                                                                                </div>
                                                                                <div class="product-flags">
                                                                                    <span class="online_only label label-warning">Online only</span>
                                                                                </div>


                                                                                <div itemprop="offers" itemscope itemtype="{{  URL('detail',[$item->id,$item->title]) }}" class="availability">
																				<span class="available-now">
																					<link itemprop="availability" href="http://schema.org/InStock" />In stock							</span>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- .product-container> -->
                                                                </div>
                                                                @endforeach
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div id="blockleoblogstabs" class="block blogs_block exclusive blockleoblogs nobackground products_block text-center nopadding">
                                    <h4 class="page-heading ">Latest Blogs</h4>
                                    <div class="block_content">
                                        <div class="carousel slide" id="blockleoblogs">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_block ajax_block_blog first_item">
                                                            <div class="blog_container clearfix">

                                                                <div class="blog-image">
                                                                    <img src="{{ theme('img/blog/blog.jpg') }}" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="img-responsive" alt="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" style="width: 250px; padding-top: 7px"/>
                                                                </div>

                                                                <div class="blog-meta text-left">
                                                                    <h5><a href="blog" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum">Urna pretium...</a></h5>





                                                                    <div class="blog-shortinfo">

                                                                        Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum...

                                                                    </div>
                                                                    <p>
                                                                        <a href="blog" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="view">Read more</a>
                                                                    </p>
                                                                </div>



                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_block ajax_block_blog last_item">
                                                            <div class="blog_container clearfix">

                                                                <div class="blog-image">
                                                                    <img src="{{ theme('img/blog/blog1.jpg') }}" title="Morbi condimentum molestie Nam enim odio sodales" class="img-responsive" alt="Morbi condimentum molestie Nam enim odio sodales" style="width: 250px; padding-top: 7px"/>
                                                                </div>

                                                                <div class="blog-meta text-left">
                                                                    <h5><a href="blog" title="Morbi condimentum molestie Nam enim odio sodales">Morbi...</a></h5>





                                                                    <div class="blog-shortinfo">

                                                                        Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum....

                                                                    </div>
                                                                    <p>
                                                                        <a href="blog" title="Morbi condimentum molestie Nam enim odio sodales" class="view">Read more</a>
                                                                    </p>
                                                                </div>



                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="item ">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_block ajax_block_blog first_item">
                                                            <div class="blog_container clearfix">

                                                                <div class="blog-image">
                                                                    <img src="img/leoblog/b/8/276_234/b-blog-6.jpg" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" class="img-responsive" alt="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus"/>
                                                                </div>

                                                                <div class="blog-meta text-left">
                                                                    <h5><a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">Turpis at...</a></h5>





                                                                    <div class="blog-shortinfo">

                                                                        Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi...

                                                                    </div>
                                                                    <p>
                                                                        <a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" class="view">Read more</a>
                                                                    </p>
                                                                </div>



                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_block ajax_block_blog last_item">
                                                            <div class="blog_container clearfix">

                                                                <div class="blog-image">
                                                                    <img src="img/leoblog/b/9/276_234/b-blog-7.jpg" title="Nullam ullamcorper nisl quis ornare molestie" class="img-responsive" alt="Nullam ullamcorper nisl quis ornare molestie"/>
                                                                </div>

                                                                <div class="blog-meta text-left">
                                                                    <h5><a href="blog/nullam-ullamcorper-nisl-quis-ornare-molestie-b9.html" title="Nullam ullamcorper nisl quis ornare molestie">Nullam...</a></h5>





                                                                    <div class="blog-shortinfo">

                                                                        Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus,...

                                                                    </div>
                                                                    <p>
                                                                        <a href="blog/nullam-ullamcorper-nisl-quis-ornare-molestie-b9.html" title="Nullam ullamcorper nisl quis ornare molestie" class="view">Read more</a>
                                                                    </p>
                                                                </div>



                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="item ">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_block ajax_block_blog first_item">
                                                            <div class="blog_container clearfix">

                                                                <div class="blog-image">
                                                                    <img src="img/leoblog/b/5/276_234/b-blog-3.jpg" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="img-responsive" alt="Urna pretium elit mauris cursus Curabitur at elit Vestibulum"/>
                                                                </div>

                                                                <div class="blog-meta text-left">
                                                                    <h5><a href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b5.html" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum">Urna pretium...</a></h5>





                                                                    <div class="blog-shortinfo">

                                                                        Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum...

                                                                    </div>
                                                                    <p>
                                                                        <a href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b5.html" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="view">Read more</a>
                                                                    </p>
                                                                </div>



                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog_block ajax_block_blog last_item">
                                                            <div class="blog_container clearfix">

                                                                <div class="blog-image">
                                                                    <img src="img/leoblog/b/4/276_234/b-blog-2.jpg" title="Ipsum cursus vestibulum at interdum Vivamus" class="img-responsive" alt="Ipsum cursus vestibulum at interdum Vivamus"/>
                                                                </div>

                                                                <div class="blog-meta text-left">
                                                                    <h5><a href="blog/ipsum-cursus-vestibulum-at-interdum-vivamus-b4.html" title="Ipsum cursus vestibulum at interdum Vivamus">Ipsum cursus...</a></h5>





                                                                    <div class="blog-shortinfo">

                                                                        Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget...

                                                                    </div>
                                                                    <p>
                                                                        <a href="blog/ipsum-cursus-vestibulum-at-interdum-vivamus-b4.html" title="Ipsum cursus vestibulum at interdum Vivamus" class="view">Read more</a>
                                                                    </p>
                                                                </div>



                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12" >

                                    <div class="products_block exclusive leomanagerwidgets nopadding nobackground text-center block" >
                                        <h4 class="page-heading text-center">
                                            Featured products
                                        </h4>
                                        <div class="block_content text-left">
                                            <div class="carousel slide" id="leoproductcarousel595809559">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <div class="product_list grid">
                                                            <div class="row">
                                                                @foreach($product as $items)
                                                                <div class="ajax_block_product product_block col-md-3 col-xs-6 col-sp-12 first_item">

                                                                    <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="left-block">
                                                                            <div class="product-image-container image">
                                                                                <div class="leo-more-info" data-idproduct="12"></div>
                                                                                <a class="product_img_link"	href="{{  URL('detail',[$items->id,$items->title]) }}" title="{{ $items->title }}" itemprop="url">
                                                                                    <img class="replace-2x img-responsive" src="{{ asset('uploads/wine/image/'.$items->imagePath) }}" alt="{{ $items->title }}" title="{{ $items->title }}" itemprop="image" style="height: 360px"/>
                                                                                    <span class="product-additional" data-idproduct="12"></span>
                                                                                </a>
                                                                                <a class="quick-view btn-outline btn" href="{{  URL('detail',[$items->id,$items->title]) }}" rel="{{  URL('detail',[$items->id,$items->title]) }}" title="Quick view" ></a><span class="new-box"><span class="new-label product-label">New</span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="right-block">
                                                                            <div class="product-meta">
                                                                                <h5 itemprop="name" class="name">
                                                                                    <a class="product-name" href="{{  URL('detail',[$items->id,$items->title]) }}" title="Morbi ullamcorper" itemprop="url" >
                                                                                        {{ $items->title }}
                                                                                    </a>
                                                                                </h5>
                                                                                <p class="product-desc" itemprop="description">
                                                                                    {{ $items->description }}
                                                                                </p>
                                                                                <div itemprop="offers" itemscope itemtype="{{  URL('detail',[$items->id,$items->title]) }}" class="content_price">
                                                                                    <span itemprop="price" class="price product-price">{{ $items->price }}</span>
                                                                                    <meta itemprop="priceCurrency" content="USD" />
                                                                                </div>
                                                                                <!--  -->
                                                                                <div class="functional-buttons clearfix"></div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .product-container> -->


                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection