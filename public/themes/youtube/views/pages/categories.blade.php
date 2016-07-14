@extends('layouts.frontend')
@section('title','Danh Mục')
@section('content')
    <section id="breadcrumb">
        <div class="row">
            <div class="large-12 columns">
                <nav aria-label="You are here:" role="navigation">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-home"></i><a href="{{ url('/') }}">Trang Chủ</a></li>
                        <li>
                            <span class="show-for-sr">Current: </span> Danh Mục
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section><!--end breadcrumbs-->
    <!-- Premium Videos -->
    <section id="premium">
        <div class="row">
            <div class="heading clearfix">
                <div class="large-11 columns">
                    <h4><i class="fa fa-play-circle-o"></i>Các Video Nổi Bật</h4>
                </div>
                <div class="large-1 columns">
                    <div class="navText show-for-large">
                        <a class="prev secondary-button"><i class="fa fa-angle-left"></i></a>
                        <a class="next secondary-button"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="owl-demo" class="owl-carousel carousel" data-car-length="4" data-items="4" data-loop="true" data-nav="false" data-autoplay="true" data-autoplay-timeout="3000" data-dots="false" data-auto-width="false" data-responsive-small="1" data-responsive-medium="2" data-responsive-xlarge="5">
            @foreach($cate as $item)
                <div class="item">
                <figure class="premium-img">
                    <img src="{{$item->thumbnails}}" alt="carousel">
                    <figcaption>
                        <h5>{{$item->title}}</h5>

                    </figcaption>
                </figure>
                <a href="video/{{$item->id}}" class="hover-posts">
                    <span><i class="fa fa-play"></i>Xem Video</span>
                </a>
            </div>
            @endforeach
        </div>
    </section><!-- End Premium Videos -->
    <section class="category-content">
    <div class="row">
        <!-- left side content area -->
        <div class="large-8 columns">
            <section class="content content-with-sidebar">
                <!-- newest video -->
                <div class="main-heading removeMargin">
                    <div class="row secBg padding-14 removeBorderBottom">
                        <div class="medium-8 small-8 columns">
                            <div class="head-title">
                                <i class="fa fa-film"></i>
                                <h4>Giải Trí</h4>
                            </div>
                        </div>
                        <div class="medium-4 small-4 columns">
                            <ul class="tabs text-right pull-right" data-tabs id="newVideos">
                                <li class="tabs-title is-active"><a href="#new-all">all</a></li>
                                <li class="tabs-title"><a href="#new-hd">HD</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="row column head-text clearfix">
                            <p class="pull-left">Tất Cả Video  : <span>1,862 Video được đăng</span></p>
                            <div class="grid-system pull-right show-for-large">
                                <a class="secondary-button grid-default" href="#"><i class="fa fa-th"></i></a>
                                <a class="secondary-button current grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                                <a class="secondary-button list" href="#"><i class="fa fa-th-list"></i></a>
                            </div>
                        </div>
                        <div class="tabs-content" data-tabs-content="newVideos">
                            <div class="tabs-panel is-active" id="new-all">
                                <div class="row list-group">
                                    @foreach($cates as $item)
                                        <div class="item large-4 medium-6 columns grid-medium">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="{{$item->thumbnails}}" alt="new video">
                                                <a href="video/{{$item->id}}" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Xem Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
                                                    <div class="thumb-stats pull-left">
                                                        <h6>HD</h6>
                                                    </div>
                                                    <div class="thumb-stats pull-left">
                                                        <i class="fa fa-heart"></i>
                                                        <span>506</span>
                                                    </div>
                                                    <div class="thumb-stats pull-right">
                                                        <span>{{$item->time}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-des">
                                                <h6><a href="video/{{$item->id}}">{{$item->title}}</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>{{$item->des}}</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="video/{{$item->id}}" class="secondary-button"><i class="fa fa-play-circle"></i>Xem video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="pagination">
                            @if($cates->currentPage() !=1)
                                <a href="{{$cates->url($cates->currentPage() - 1) }}" class="prev page-numbers">« Trước</a>
                            @endif
                            @for($i = 1 ; $i <= $cates->lastPage() ; $i = $i + 1)
                                <a href="{{$cates->url($i) }}" class="prev page-numbers">{{$i}}</a>
                            @endfor
                            @if($cates->currentPage() != $cates->lastPage())
                                <a href="{{$cates->url($cates->currentPage() + 1) }}" class="next page-numbers">Sau »</a>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            <!-- ad Section -->
            <div class="googleAdv">
                <a href="#"><img src="{{theme('images/goodleadv.png')}}" alt="googel ads"></a>
            </div><!-- End ad Section -->
        </div><!-- end left side content area -->
        <!-- sidebar -->
        @include('includes.widget')
        <!-- end sidebar -->
    </div>
</section><!-- End Category Content-->
@endsection