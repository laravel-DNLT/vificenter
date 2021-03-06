@extends('layouts.frontend')
@section('title','Home')
@section('content')
    <div class="off-canvas-content" data-off-canvas-content>

        <!-- verticle thumb slider -->
        <section id="verticalSlider-light">
            <div class="row">
                <div class="large-12 columns">
                    <div class="thumb-slider">
                        <div class="main-image">
                            @foreach($video as $item)
                            <div class="image {{$item->id}}">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$item->Url}}" allowfullscreen></iframe>
                            </div>
                            @endforeach
                        </div>
                        <div class="thumbs">
                            <div class="thumbnails">
                                @foreach($video as $item)
                                    <div class="ver-thumbnail" id="{{$item->id}}">
                                    <img src="{{$item->thumbnails}}" alt="imaga">
                                    <div class="item-title">

                                        <h6>{{$item->title}}</h6>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <a class="up" href="javascript:void(0)"><i class="fa fa-angle-up"></i></a>
                            <a class="down" href="javascript:void(0)"><i class="fa fa-angle-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Premium Videos -->
        <section class="content">
            <!-- newest video -->
            <div class="main-heading">
                <div class="row secBg padding-14">
                    <div class="medium-8 small-8 columns">
                        <div class="head-title">
                            <i class="fa fa-film"></i>
                            <h4>Video Mới Nhất</h4>
                        </div>
                    </div>
                    <div class="medium-4 small-4 columns">
                        <ul class="tabs text-right pull-right" data-tabs>
                            <li class="tabs-title is-active"><a class="is-active" href="#" data-tab="1">All</a></li>
                            <li class="tabs-title" data-tab-index="1"><a href="#" data-tab="2">HD</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="row column head-text clearfix">
                        <p class="pull-left">Tất cả video : <span>1,862 Videos được đăng</span></p>
                        <div class="grid-system pull-right show-for-large">
                            <a class="secondary-button current grid-default" href="#"><i class="fa fa-th"></i></a>
                            <a class="secondary-button grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                            <a class="secondary-button list" href="#"><i class="fa fa-th-list"></i></a>
                        </div>
                    </div>
                    <div class="tabs-content">
                        <div class="tab-container tab-content active" data-content="1">
                            <div class="row list-group">
                                @foreach($video as $item)
                                <div class="item large-3 medium-6 columns group-item-grid-default">
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
                                                    <span>{{ $item->time}}</span>
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
                                                    <span>5/1/2016</span>
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
                                                <a href="https://www.youtube.com/watch?v=64FoFqx4W8c" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                        </div>

                        <div class="tab-container tab-content" data-content="2">
                            <div class="row list-group">
                                @foreach($video as $item)
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{$item->thumbnails}}" alt="new video">
                                            <a href="video/{{$item->id}}" class="hover-posts">
                                                <span><i class="fa fa-play"></i>Xem</span>
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
                                                    <span>05:56</span>
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
                                                {{$item->description}}
                                            </div>
                                            <div class="post-button">
                                                <a href="video/{{$item->id}}" class="secondary-button"><i class="fa fa-play-circle"></i>Xem</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="text-center row-btn">
                        <a class="button radius" href="{{ url('video/tat-ca-video') }}">Xem Tất Cả</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <!-- End newest video -->
            <!-- ad Section -->
            <div class="googleAdv">
                <a href="#"><img src="{{theme('images/goodleadv.png')}}" alt="googel ads"></a>
            </div><!-- End ad Section -->

            <!-- popular Videos -->
            <div class="main-heading">
                <div class="row secBg padding-14">
                    <div class="medium-8 small-8 columns">
                        <div class="head-title">
                            <i class="fa fa-star"></i>
                            <h4>Videos Xem Nhiều Nhất</h4>
                        </div>
                    </div>
                    <div class="medium-4 small-4 columns">
                        <ul class="tabs text-right pull-right" data-tabs id="popularVideos">
                            <li class="tabs-title is-active"><a href="#popular-all">all</a></li>
                            <li class="tabs-title"><a href="#popular-hd">HD</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="row column head-text clearfix">
                        <p class="pull-left">Tất cả video : <span>1,862 Videos được đăng</span></p>
                        <div class="grid-system pull-right show-for-large">
                            <a class="secondary-button current grid-default" href="#"><i class="fa fa-th"></i></a>
                            <a class="secondary-button grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                            <a class="secondary-button list" href="#"><i class="fa fa-th-list"></i></a>
                        </div>
                    </div>
                    <div class="tabs-content" data-tabs-content="popularVideos">
                        <div class="tabs-panel is-active" id="popular-all">
                            <div class="row list-group">
                                @foreach($video as $item)
                                    <div class="item large-3 medium-6 columns group-item-grid-default">
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
                                                        <span>{{ $item->time}}</span>
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
                                                        <span>5/1/2016</span>
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
                                                    <a href="https://www.youtube.com/watch?v=64FoFqx4W8c" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tabs-panel" id="popular-hd">
                            <div class="row list-group">
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/1.jpg')}}" alt="new video">
                                            <a href="single-video-v2.html" class="hover-posts">
                                                <span><i class="fa fa-play"></i>Watch Video</span>
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
                                                    <span>05:56</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-des">
                                            <h6><a href="single-video-v2.html">There are many variations of passage.</a></h6>
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
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                            </div>
                                            <div class="post-button">
                                                <a href="single-video-v2.html" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="text-center row-btn">
                        <a class="button radius" href="{{ url('video/tat-ca-video') }}">Xem Tất Cả</a>
                    </div>
                </div>
            </div>
            <!-- ad Section -->
            <div class="googleAdv">
                <a href="#"><img src="{{theme('images/goodleadv.png')}}" alt="googel ads"></a>
            </div><!-- End ad Section -->
        </section><!-- End main content -->
        <!-- movies -->
        <section id="movies">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="column row">
                        <div class="heading category-heading clearfix">
                            <div class="cat-head pull-left">
                                <i class="fa fa-video-camera"></i>
                                <h4>Xem Phim</h4>
                            </div>
                            <div>
                                <div class="navText pull-right show-for-large">
                                    <a class="prev secondary-button"><i class="fa fa-angle-left"></i></a>
                                    <a class="next secondary-button"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- movie carousel -->
                    <div id="owl-demo-movie" class="owl-carousel carousel" data-autoplay="true" data-autoplay-timeout="3000" data-autoplay-hover="true" data-car-length="5" data-items="6" data-dots="false" data-loop="true" data-auto-width="true" data-margin="10">
                        @foreach($videos as $item)

                        <div class="item-movie item thumb-border">
                            <figure class="premium-img">
                                <img src="{{$item->thumbnails}}" alt="carousel">
                                <a href="video/{{$item->id}}" class="hover-posts">
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
                       @endforeach
                    </div><!-- end carousel -->
                </div>
            </div>
        </section><!-- End movie -->
        <div class="googleAdv text-center">
            <a href="#"><img src="{{theme('images/goodleadv.png')}}" alt="googel ads"></a>
        </div><!-- End ad Section -->
        <!-- footer -->

    </div><!--end off canvas content-->
@endsection