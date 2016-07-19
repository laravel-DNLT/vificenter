<section class="category-content">
    <div class="row">
        <!-- left side content area -->
        <div class="large-8 columns">
            <h1>{{ $post->title }}</h1>
            <h5>{{ $post->published_at->format('M jS Y g:ia') }}</h5>
            <div class="blog-post">
                <div class="row secBg">

                    <div class="large-12 columns">
                        <div class="blog-post-heading">
                            <h3><a href="#">There are many variations of passage. </a></h3>
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
                            {!! nl2br(e($post->content)) !!}
                            <div class="blog-post-extras">
                                <div class="categories extras">
                                    <button><i class="fa fa-folder-open"></i>categories</button>
                                    <a href="#">entertainment</a>
                                </div>
                                <div class="tags extras">
                                    <button><i class="fa fa-tags"></i>tags</button>
                                    <a href="#">3d movies</a>
                                    <a href="#">videos</a>
                                    <a href="#">HD</a>
                                    <a href="#">Movies</a>
                                </div>
                                <div class="social-share extras">
                                    <div class="post-like-btn clearfix">
                                        <div class="easy-share" data-easyshare data-easyshare-http data-easyshare-url="http://joinwebs.com/">

                                            <button class="float-left"><i class="fa fa-share-alt"></i>share</button>
                                            <!-- Facebook -->
                                            <button class="removeBorder" data-easyshare-button="facebook">
                                                <span class="fa fa-facebook"></span>
                                            </button>

                                            <!-- Twitter -->
                                            <button class="removeBorder" data-easyshare-button="twitter" data-easyshare-tweet-text="">
                                                <span class="fa fa-twitter"></span>
                                            </button>

                                            <!-- Google+ -->
                                            <button class="removeBorder" data-easyshare-button="google">
                                                <span class="fa fa-google-plus"></span>
                                            </button>

                                            <div data-easyshare-loader>Loading...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-pagination text-center">
                                <a href="#"><i class="fa fa-long-arrow-left left-arrow"></i>previous post</a>
                                <a href="#">next post<i class="fa fa-long-arrow-right right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" onclick="history.go(-1)">
                        « Trở lại
                    </button>
                </div>
            </div><!-- end blog post -->
            <!-- post written by -->
          
           
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