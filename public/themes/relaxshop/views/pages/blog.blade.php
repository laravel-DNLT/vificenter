@extends('layouts.frontend')
@section('title','Blog')
@section('content')
            <!--breadcrumbs-->
            <section id="breadcrumb" class="breadMargin">
                <div class="row">
                    <div class="large-12 columns">
                        <nav aria-label="You are here:" role="navigation">
                            <ul class="breadcrumbs">
                                <li><i class="fa fa-home"></i><a href="{{ url('/') }}">Trang Chủ</a></li>
                                <li>
                                    <span class="show-for-sr">Current: </span>  <h1>{{ config('blog.title') }}</h1>
                                    <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
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
                        @foreach ($posts as $post)
                        <div class="blog-post">
                            <div class="row secBg">
                                <div class="large-12 columns">
                                    <div class="blog-post-heading">
                                        <h3><a href="{{ url('blog/single-blog') }}">There are many variations of passage. </a></h3>
                                        <p>
                                            <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                            <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                            <span><i class="fa fa-eye"></i>1,862K</span>
                                            <span><i class="fa fa-commenting"></i>8</span>
                                        </p>
                                    </div>
                                    <div class="blog-post-content">
                                        <div class="blog-post-img">
                                            <img src="{{ theme('images/blog-post-img.png') }}" alt="blog image">
                                        </div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt [..] </p>
                                        <a class="blog-post-btn" href="{{ url('blog/single-blog') }}">Đọc Tiếp</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-post">
                            <div class="row secBg">
                                <div class="large-12 columns">
                                    <div class="blog-post-heading">
                                        <h3><a href="{{ url('blog/single-blog') }}">There are many variations of passage. </a></h3>
                                        <p>
                                            <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                            <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                            <span><i class="fa fa-eye"></i>1,862K</span>
                                            <span><i class="fa fa-commenting"></i>8</span>
                                        </p>
                                    </div>
                                    <div class="blog-post-content">
                                        <div class="blog-post-img">
                                            <img src="{{ theme('images/blog-post-img2.png') }}" alt="blog image">
                                        </div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt [..] </p>
                                        <a class="blog-post-btn" href="{{ url('blog/single-blog') }}">Đọc Tiếp</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-post">
                            <div class="row secBg">
                                <div class="large-12 columns">
                                    <div class="blog-post-heading">
                                        <h3><a href="{{ url('blog/single-blog') }}">There are many variations of passage. </a></h3>
                                        <p>
                                            <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                            <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                            <span><i class="fa fa-eye"></i>1,862K</span>
                                            <span><i class="fa fa-commenting"></i>8</span>
                                        </p>
                                    </div>
                                    <div class="blog-post-content">
                                        <div class="blog-post-img">
                                            <img src="{{ theme('images/blog-post-img3.png') }}" alt="blog image">
                                        </div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt [..] </p>
                                        <a class="blog-post-btn" href="{{ url('blog/single-blog') }}">Đọc Tiếp</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-post">
                            <div class="row secBg">
                                <div class="large-12 columns">
                                    <div class="blog-post-heading">
                                        <h3><a href="{{ url('blog/single-blog') }}">There are many variations of passage. </a></h3>
                                        <p>
                                            <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                            <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                            <span><i class="fa fa-eye"></i>1,862K</span>
                                            <span><i class="fa fa-commenting"></i>8</span>
                                        </p>
                                    </div>
                                    <div class="blog-post-content">
                                        <div class="blog-post-img">
                                            <img src="{{ theme('images/blog-post-img-4.png') }}" alt="blog image">
                                        </div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt [..] </p>
                                        <a class="blog-post-btn" href="{{ url('blog/single-blog') }}">Đọc Tiếp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ad Section -->
                        <div class="googleAdv">
                            <a href="#"><img src="{{ theme('images/goodleadv.png') }}" alt="googel ads"></a>
                        </div><!-- End ad Section -->
                    </div><!-- end left side content area -->
                    <!-- sidebar -->
                    @include('includes.blog-widget')
                    <!-- end sidebar -->
                </div>
            </section><!-- End Category Content-->
@endsection