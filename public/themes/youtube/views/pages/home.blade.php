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
                            <div class="image 1">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/64FoFqx4W8c" allowfullscreen></iframe>
                            </div>
                            <div class="image 2">
                                <img src="{{theme('images/video-thumbnail/hai-truong-giang.jpg')}}" alt="imaga">
                                <a href="single-video-v1.html" class="hover-posts">
                                    <span><i class="fa fa-play"></i>Xem thêm</span>
                                </a>
                            </div>
                            <div class="image 3">
                                <img src="{{theme('images/vertical/3.png')}}" alt="imaga">
                                <a href="single-video-v1.html" class="hover-posts">
                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                </a>
                            </div>
                            <div class="image 4">
                                <img src="{{theme('images/vertical/4.png')}}" alt="imaga">
                                <a href="single-video-v1.html" class="hover-posts">
                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                </a>
                            </div>
                        </div>
                        <div class="thumbs">
                            <div class="thumbnails">
                                <div class="ver-thumbnail" id="1">
                                    <img src="{{theme('images/video-thumbnail/hai-truong-giang.jpg')}}" alt="imaga">
                                    <div class="item-title">
                                        <span>Technology</span>
                                        <h6>The standard chunk of Lorem Ipsum used since.</h6>
                                    </div>
                                </div>
                                <div class="ver-thumbnail" id="2">
                                    <img src="{{theme('images/vertical/2.png')}}" alt="imaga">
                                    <div class="item-title">
                                        <span>Technology</span>
                                        <h6>The standard chunk of Lorem Ipsum used since.</h6>
                                    </div>
                                </div>
                                <div class="ver-thumbnail" id="3">
                                    <img src="{{theme('images/vertical/3.png')}}" alt="imaga">
                                    <div class="item-title">
                                        <span>Technology</span>
                                        <h6>The standard chunk of Lorem Ipsum used since.</h6>
                                    </div>
                                </div>
                                <div class="ver-thumbnail" id="4">
                                    <img src="{{theme('images/vertical/4.png')}}" alt="imaga">
                                    <div class="item-title">
                                        <span>Technology</span>
                                        <h6>The standard chunk of Lorem Ipsum used since.</h6>
                                    </div>
                                </div>
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
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hqdefault.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=64FoFqx4W8c" class="hover-posts">
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
                                            <h6><a href="https://www.youtube.com/watch?v=64FoFqx4W8c">Đấu trường tiếu lâm | Tập 2 Full HD</a></h6>
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
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                            </div>
                                            <div class="post-button">
                                                <a href="https://www.youtube.com/watch?v=64FoFqx4W8c" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hai-truong-giang.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=EDaD0xb_wvI" class="hover-posts">
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
                                            <h6><a href="single-video-v2.html">Chuyến Xe Ngày Tết - Trường Giang </a></h6>
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
                                                <a href="https://www.youtube.com/watch?v=EDaD0xb_wvI" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hai-hoai-linh.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=m6Z2YoxwBq8" class="hover-posts">
                                                <span><i class="fa fa-play"></i>Watch Video</span>
                                            </a>
                                            <div class="video-stats clearfix">
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
                                            <h6><a href="https://www.youtube.com/watch?v=m6Z2YoxwBq8">Liveshow NSƯT Hoài Linh 2016 - Phần 2</a></h6>
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
                                                <a href="https://www.youtube.com/watch?v=m6Z2YoxwBq8" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hai-tran-thanh.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=JVUQxd777UY" class="hover-posts">
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
                                            <h6><a href="https://www.youtube.com/watch?v=JVUQxd777UY">Hài Trấn Thành Việt Hương 2016</a></h6>
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
                                                <a href="https://www.youtube.com/watch?v=JVUQxd777UY" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hqdefault.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=64FoFqx4W8c" class="hover-posts">
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
                                            <h6><a href="https://www.youtube.com/watch?v=64FoFqx4W8c">Đấu trường tiếu lâm | Tập 2 Full HD</a></h6>
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
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                            </div>
                                            <div class="post-button">
                                                <a href="https://www.youtube.com/watch?v=64FoFqx4W8c" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hai-truong-giang.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=EDaD0xb_wvI" class="hover-posts">
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
                                            <h6><a href="single-video-v2.html">Chuyến Xe Ngày Tết - Trường Giang </a></h6>
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
                                                <a href="https://www.youtube.com/watch?v=EDaD0xb_wvI" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hai-hoai-linh.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=m6Z2YoxwBq8" class="hover-posts">
                                                <span><i class="fa fa-play"></i>Watch Video</span>
                                            </a>
                                            <div class="video-stats clearfix">
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
                                            <h6><a href="https://www.youtube.com/watch?v=m6Z2YoxwBq8">Liveshow NSƯT Hoài Linh 2016 - Phần 2</a></h6>
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
                                                <a href="https://www.youtube.com/watch?v=m6Z2YoxwBq8" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hai-tran-thanh.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=JVUQxd777UY" class="hover-posts">
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
                                            <h6><a href="https://www.youtube.com/watch?v=JVUQxd777UY">Hài Trấn Thành Việt Hương 2016</a></h6>
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
                                                <a href="https://www.youtube.com/watch?v=JVUQxd777UY" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-container tab-content" data-content="2">
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
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/2.jpg')}}" alt="new video">
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

                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/4.jpg')}}" alt="new video">
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
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/6.jpg')}}" alt="new video">
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

                                <div class="item large-3 medium-6 columns group-item-grid-default end">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/8.jpg')}}" alt="new video">
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
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hqdefault.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=64FoFqx4W8c" class="hover-posts">
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
                                            <h6><a href="https://www.youtube.com/watch?v=64FoFqx4W8c">Đấu trường tiếu lâm | Tập 2 Full HD</a></h6>
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
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                            </div>
                                            <div class="post-button">
                                                <a href="https://www.youtube.com/watch?v=64FoFqx4W8c" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hai-truong-giang.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=EDaD0xb_wvI" class="hover-posts">
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
                                            <h6><a href="single-video-v2.html">Chuyến Xe Ngày Tết - Trường Giang </a></h6>
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
                                                <a href="https://www.youtube.com/watch?v=EDaD0xb_wvI" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hai-hoai-linh.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=m6Z2YoxwBq8" class="hover-posts">
                                                <span><i class="fa fa-play"></i>Watch Video</span>
                                            </a>
                                            <div class="video-stats clearfix">
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
                                            <h6><a href="https://www.youtube.com/watch?v=m6Z2YoxwBq8">Liveshow NSƯT Hoài Linh 2016 - Phần 2</a></h6>
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
                                                <a href="https://www.youtube.com/watch?v=m6Z2YoxwBq8" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hai-tran-thanh.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=JVUQxd777UY" class="hover-posts">
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
                                            <h6><a href="https://www.youtube.com/watch?v=JVUQxd777UY">Hài Trấn Thành Việt Hương 2016</a></h6>
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
                                                <a href="https://www.youtube.com/watch?v=JVUQxd777UY" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hqdefault.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=64FoFqx4W8c" class="hover-posts">
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
                                            <h6><a href="https://www.youtube.com/watch?v=64FoFqx4W8c">Đấu trường tiếu lâm | Tập 2 Full HD</a></h6>
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
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                            </div>
                                            <div class="post-button">
                                                <a href="https://www.youtube.com/watch?v=64FoFqx4W8c" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hai-truong-giang.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=EDaD0xb_wvI" class="hover-posts">
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
                                            <h6><a href="single-video-v2.html">Chuyến Xe Ngày Tết - Trường Giang </a></h6>
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
                                                <a href="https://www.youtube.com/watch?v=EDaD0xb_wvI" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hai-hoai-linh.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=m6Z2YoxwBq8" class="hover-posts">
                                                <span><i class="fa fa-play"></i>Watch Video</span>
                                            </a>
                                            <div class="video-stats clearfix">
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
                                            <h6><a href="https://www.youtube.com/watch?v=m6Z2YoxwBq8">Liveshow NSƯT Hoài Linh 2016 - Phần 2</a></h6>
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
                                                <a href="https://www.youtube.com/watch?v=m6Z2YoxwBq8" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/hai-tran-thanh.jpg')}}" alt="new video">
                                            <a href="https://www.youtube.com/watch?v=JVUQxd777UY" class="hover-posts">
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
                                            <h6><a href="https://www.youtube.com/watch?v=JVUQxd777UY">Hài Trấn Thành Việt Hương 2016</a></h6>
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
                                                <a href="https://www.youtube.com/watch?v=JVUQxd777UY" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/2.jpg')}}" alt="new video">
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

                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/4.jpg')}}" alt="new video">
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

                                <div class="item large-3 medium-6 columns group-item-grid-default">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/6.jpg')}}" alt="new video">
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

                                <div class="item large-3 medium-6 columns group-item-grid-default end">
                                    <div class="post thumb-border">
                                        <div class="post-thumb">
                                            <img src="{{theme('images/video-thumbnail/8.jpg')}}" alt="new video">
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
                        <div class="item-movie item thumb-border">
                            <figure class="premium-img">
                                <img src="{{theme('images/movie1.png')}}" alt="carousel">
                                <a href="single-video-v3.html" class="hover-posts">
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
                        <div class="item-movie item thumb-border">
                            <figure class="premium-img">
                                <img src="{{theme('images/movie2.png')}}" alt="carousel">
                                <a href="single-video-v3.html" class="hover-posts">
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
                        <div class="item-movie item thumb-border">
                            <figure class="premium-img">
                                <img src="{{theme('images/movie3.png')}}" alt="carousel">
                                <a href="single-video-v3.html" class="hover-posts">
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
                        <div class="item-movie item thumb-border">
                            <figure class="premium-img">
                                <img src="{{theme('images/movie4.png')}}" alt="carousel">
                                <a href="single-video-v3.html" class="hover-posts">
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
                        <div class="item-movie item thumb-border">
                            <figure class="premium-img">
                                <img src="{{theme('images/movie5.png')}}" alt="carousel">
                                <a href="single-video-v3.html" class="hover-posts">
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
                        <div class="item-movie item thumb-border">
                            <figure class="premium-img">
                                <img src="{{theme('images/movie6.png')}}" alt="carousel">
                                <a href="single-video-v3.html" class="hover-posts">
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
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