@extends('layouts.frontend')
@section('title',config('blog.title'))
@section('content')

        <!--breadcrumbs-->
<section id="breadcrumb" class="breadMargin">
    <div class="row">
        <div class="large-12 columns">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home"></i><a href="/">Trang chủ</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> Tin tức
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--end breadcrumbs-->

<section class="category-content">
    <div class="row">
        <!-- left side content area -->
        <div class="large-8 columns">
            <h1>{{ config('blog.title') }}</h1>
            <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
            @foreach ($posts as $post)
            <div class="blog-post">
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="blog-post-heading">
                            <h3><a href="blog-single-post.html">There are many variations of passage. </a></h3>
                            <p>
                                <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                <span><i class="fa fa-eye"></i>1,862K</span>
                                <span><i class="fa fa-commenting"></i>8</span>
                            </p>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-img">
                                <img src="{{theme('images/blog-post-img.png')}}" alt="blog image">
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt [..] </p>
                            <a class="blog-post-btn" href="blog-single-post.html">read me</a>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
            {!! $posts->render() !!}
            <!-- ad Section -->

            <div class="googleAdv">
                <a href="#"><img src="{{theme('images/goodleadv.png')}}" alt="googel ads"></a>
            </div><!-- End ad Section -->
        </div><!-- end left side content area -->
        <!-- sidebar -->
        <div class="large-4 columns">
            <aside class="secBg sidebar">
                <div class="row">
                    <!-- search Widget -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Search Videos</h5>
                            </div>
                            <form id="searchform" method="get" role="search">
                                <div class="input-group">
                                    <input class="input-group-field" type="text" placeholder="Enter your keyword">
                                    <div class="input-group-button">
                                        <input type="submit" class="button" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- End search Widget -->

                    <!-- most view Widget -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Most View Videos</h5>
                            </div>
                            <div class="widgetContent">
                                <div class="video-box thumb-border">
                                    <div class="video-img-thumb">
                                        <img src="{{theme('images/video-thumbnail/7.jpg')}}" alt="most viewed videos">
                                        <a href="#" class="hover-posts">
                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                        </a>
                                    </div>
                                    <div class="video-box-content">
                                        <h6><a href="#">There are many variations of passage. </a></h6>
                                        <p>
                                            <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                            <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                            <span><i class="fa fa-eye"></i>1,862K</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="video-box thumb-border">
                                    <div class="video-img-thumb">
                                        <img src="{{theme('images/widget-most1.png')}}" alt="most viewed videos">
                                        <a href="#" class="hover-posts">
                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                        </a>
                                    </div>
                                    <div class="video-box-content">
                                        <h6><a href="#">There are many variations of passage. </a></h6>
                                        <p>
                                            <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                            <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                            <span><i class="fa fa-eye"></i>1,862K</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="video-box thumb-border">
                                    <div class="video-img-thumb">
                                        <img src="{{theme('images/widget-most2.png')}}" alt="most viewed videos">
                                        <a href="#" class="hover-posts">
                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                        </a>
                                    </div>
                                    <div class="video-box-content">
                                        <h6><a href="#">There are many variations of passage. </a></h6>
                                        <p>
                                            <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                            <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                            <span><i class="fa fa-eye"></i>1,862K</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="video-box thumb-border">
                                    <div class="video-img-thumb">
                                        <img src="{{theme('images/widget-most3.png')}}" alt="most viewed videos">
                                        <a href="#" class="hover-posts">
                                            <span><i class="fa fa-play"></i>Watch Video</span>
                                        </a>
                                    </div>
                                    <div class="video-box-content">
                                        <h6><a href="#">There are many variations of passage. </a></h6>
                                        <p>
                                            <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                            <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                            <span><i class="fa fa-eye"></i>1,862K</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end most view Widget -->

                    <!-- categories -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox clearfix">
                            <div class="widgetTitle">
                                <h5>Categories</h5>
                            </div>
                            <div class="widgetContent clearfix">
                                <ul>
                                    <li class="cat-item"><a href="#">Entertainment &nbsp; (6)</a></li>
                                    <li class="cat-item"><a href="#">Historical &amp; Archival &nbsp;(8)</a></li>
                                    <li class="cat-item"><a href="#">Technology&nbsp;(4)</a></li>
                                    <li class="cat-item"><a href="#">People&nbsp;(3)</a></li>
                                    <li class="cat-item"><a href="#">Fashion &amp; Beauty&nbsp;(2)</a></li>
                                    <li class="cat-item"><a href="#">Nature&nbsp;(1)</a></li>
                                    <li class="cat-item"><a href="#">Automotive&nbsp;(5)</a></li>
                                    <li class="cat-item"><a href="#">Foods &amp; Drinks&nbsp;(5)</a></li>
                                    <li class="cat-item"><a href="#">Foods &amp; Drinks&nbsp;(10)</a></li>
                                    <li class="cat-item"><a href="#">Animals&nbsp;(12)</a></li>
                                    <li class="cat-item"><a href="#">Sports &amp; Recreation&nbsp;(14)</a></li>
                                    <li class="cat-item"><a href="#">Places &amp; Landmarks&nbsp;(16)</a></li>
                                    <li class="cat-item"><a href="#">Places &amp; Landmarks&nbsp;(1)</a></li>
                                    <li class="cat-item"><a href="#">Travel&nbsp;(2)</a></li>
                                    <li class="cat-item"><a href="#">Transportation&nbsp;(3)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

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
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Recent post videos</h5>
                            </div>
                            <div class="widgetContent">
                                <div class="advBanner text-center">
                                    <a href="#"><img src="{{theme('images/sideradv.png')}}" alt="sidebar adv"></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end ad banner widget -->

                    <!-- Recent post videos -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Recent post videos</h5>
                            </div>
                            <div class="widgetContent">
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src= "images/category/category4.png')}}" alt="recent">
                                            <a href="#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src= "images/category/category2.png')}}" alt="recent">
                                            <a href="#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src= "images/sidebar-recent1.png')}}" alt="recent">
                                            <a href="#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src= "images/sidebar-recent2.png')}}" alt="recent">
                                            <a href="#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Recent post videos -->

                    <!-- tags -->
                    <div class="large-12 medium-7 medium-centered columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Tags</h5>
                            </div>
                            <div class="tagcloud">
                                <a href="#">3D Videos</a>
                                <a href="#">Videos</a>
                                <a href="#">HD</a>
                                <a href="#">Movies</a>
                                <a href="#">Sports</a>
                                <a href="#">3D</a>
                                <a href="#">Movies</a>
                                <a href="#">Animation</a>
                                <a href="#">HD</a>
                                <a href="#">Music</a>
                                <a href="#">Recreation</a>
                            </div>
                        </div>
                    </div><!-- End tags -->
                </div>
            </aside>
        </div><!-- end sidebar -->
    </div>
</section><!-- End Category Content-->
<!-- footer -->
@endsection