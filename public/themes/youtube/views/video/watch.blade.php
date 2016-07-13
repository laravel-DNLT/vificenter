@extends('layouts.frontend')
@section('title','Watch')
@section('content')
<!--breadcrumbs-->
<section id="breadcrumb" class="breadcrumb-video-2">
    <div class="row">
        <div class="large-12 columns">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home"></i><a href="/">Home</a></li>
                    <li><a href="#">Video</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span>{{$video->title}}
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--end breadcrumbs-->

<div class="row">
    <!-- left side content area -->
    <div class="large-8 columns">
        <!--single inner video-->
        <section class="inner-video">
            <div class="row secBg">
                <div class="large-12 columns inner-flex-video">
                    <div class="flex-video widescreen">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/{{$video->Url}}" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- single post stats -->
        <section class="SinglePostStats">
            <!-- newest video -->
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="media-object stack-for-small">
                        <div class="media-object-section">
                            <div class="author-img-sec">
                                <div class="thumbnail author-single-post">
                                    <a href="#"><img src="{{theme('images/post-author-post.png')}}" alt="post"></a>
                                </div>
                                <p class="text-center"><a href="#">Joseph John</a></p>
                            </div>
                        </div>

                        <div class="media-object-section object-second">
                            <div class="author-des clearfix">

                                <div class="post-title">
                                    <h4>{{$video->title}}</h4>

                                    <p>
                                        <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                        <span><i class="fa fa-eye"></i>1,862K</span>
                                    </p>
                                </div>
                            </div>

                            <div class="social-share">
                                <div class="post-like-btn clearfix">

                                    <div class="float-right easy-share" data-easyshare data-easyshare-http data-easyshare-url="http://joinwebs.com/">
                                        <!-- Facebook -->
                                        <button data-easyshare-button="facebook">
                                            <span class="fa fa-facebook"></span>
                                            <span>Share</span>
                                        </button>
                                        <span data-easyshare-button-count="facebook">0</span>

                                        <!-- Twitter -->
                                        <button data-easyshare-button="twitter" data-easyshare-tweet-text="">
                                            <span class="fa fa-twitter"></span>
                                            <span>Tweet</span>
                                        </button>
                                        <span data-easyshare-button-count="twitter">0</span>

                                        <!-- Google+ -->
                                        <button data-easyshare-button="google">
                                            <span class="fa fa-google-plus"></span>
                                            <span>+1</span>
                                        </button>
                                        <span data-easyshare-button-count="google">0</span>

                                        <div data-easyshare-loader>Loading...</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- End single post stats -->

        <!-- single post description -->
        <section class="singlePostDescription">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="heading">
                        <h5>Mô Tả</h5>
                    </div>
                    <div class="description showmore_one">
                        <p>{{$video->des}}</p>
                    </div>
                </div>
            </div>
        </section><!-- End single post description -->

        <!-- related Posts -->
        <section class="content content-with-sidebar related">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="main-heading borderBottom">
                        <div class="row padding-14">
                            <div class="medium-12 small-12 columns">
                                <div class="head-title">
                                    <i class="fa fa-film"></i>
                                    <h4>Các Video Đề Cử</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row list-group">
                        @foreach($video_cate as $item)
                        <div class="item large-4 columns end group-item-grid-default">
                            <div class="post thumb-border">
                                <div class="post-thumb">
                                    <img src="{{$item->thumbnails}}" alt="landing">
                                    <a href="#" class="hover-posts">
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
                                            <span>05:56</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-des">
                                    <h6><a href="#">{{$item->title}}</a></h6>
                                    <div class="post-stats clearfix">
                                        <p class="pull-left">
                                            <i class="fa fa-eye"></i>
                                            <span>1,862K</span>
                                        </p>
                                    </div>
                                    <div class="post-summary">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    </div>
                                    <div class="post-button">
                                        <a href="#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </section><!--end related posts-->
    </div><!-- end left side content area -->
    <!-- sidebar -->
    <div class="large-4 columns">
        <aside class="secBg sidebar">
            <div class="row">
                <!-- search Widget -->

                <div class="large-12 medium-7 medium-centered columns">
                    <div class="widgetBox">
                        <div class="widgetContent">
                            <div class="advBanner text-center">
                                <a href="#"><img src="{{theme('images/sideradv.png')}}" alt="sidebar adv"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- end ad banner widget -->
                <!-- most view Widget -->
                <div class="large-12 medium-7 medium-centered columns">
                    <div class="widgetBox">
                        <div class="widgetTitle">
                            <h5>Video Đề Xuất</h5>
                        </div>
                        <div class="widgetContent">
                            @foreach($video_cate as $item)
                            <div class="video-box thumb-border">
                                <div class="video-img-thumb">
                                    <img src="{{$item->thumbnails}}" alt="most viewed videos">
                                    <a href="#" class="hover-posts">
                                        <span><i class="fa fa-play"></i>Watch Video</span>
                                    </a>
                                </div>
                                <div class="video-box-content">
                                    <h6><a href="#">{{$item->title}}</a></h6>
                                    <p>
                                        <span><i class="fa fa-eye"></i>1,862K</span>
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div><!-- end most view Widget -->
                <!-- social Fans Widget -->
                <div class="large-12 medium-7 medium-centered columns">
                    <div class="widgetBox">
                        <div class="widgetTitle">
                            <h5>social fans</h5>
                        </div>
                        <div class="widgetContent">
                            <div class="social-links">
                                <a class="socialButton" href="#">
                                    <i class="fa fa-facebook"></i>
                                    <span>698K</span>
                                    <span>fans</span>
                                </a>
                                <a class="socialButton" href="#">
                                    <i class="fa fa-twitter"></i>
                                    <span>598</span>
                                    <span>followers</span>
                                </a>
                                <a class="socialButton" href="#">
                                    <i class="fa fa-google-plus"></i>
                                    <span>98k</span>
                                    <span>followers</span>
                                </a>
                                <a class="socialButton" href="#">
                                    <i class="fa fa-youtube"></i>
                                    <span>168k</span>
                                    <span>followers</span>
                                </a>
                                <a class="socialButton" href="#">
                                    <i class="fa fa-vimeo"></i>
                                    <span>498</span>
                                    <span>followers</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End social Fans Widget -->

                <!-- ad banner widget -->

            </div>
        </aside>
    </div><!-- end sidebar -->
</div>
@endsection