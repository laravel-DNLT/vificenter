@extends('layouts.frontend')
@section('title', 'Bài Blog')
@section('content')
    <section id="breadcrumb" class="breadMargin">
        <div class="row">
            <div class="large-12 columns">
                <nav aria-label="You are here:" role="navigation">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-home"></i><a href="{{ url('/') }}">Trang Chủ</a></li>
                        <li>
                            <span><a href="{{ url('/blog/') }}">Blog</a></span>
                        </li>
                        <li>
                            <span class="show-for-sr">Current: </span>Bài Blog
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
                                    <img src="{{ theme('images/blog-post-img.png') }}" alt="blog image">
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p>
                                <ul>
                                    <li><h6>Bullets List :</h6></li>
                                    <li><i class="fa fa-caret-right"></i>Sed ut perspiciatis unde omnis</li>
                                    <li><i class="fa fa-caret-right"></i>But I must explain to you how</li>
                                    <li><i class="fa fa-caret-right"></i>At vero eos et accusamus et iusto</li>
                                    <li><i class="fa fa-caret-right"></i>On the other hand, we denounce</li>
                                    <li><i class="fa fa-caret-right"></i>There are many variations of passages</li>

                                </ul>
                                <blockquote>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                                </blockquote>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p>
                                <div class="blog-post-extras">
                                    <div class="categories extras">
                                        <button><i class="fa fa-folder-open"></i>Danh Mục</button>
                                        <a href="#">Giải Trí</a>
                                    </div>
                                    <div class="tags extras">
                                        <button><i class="fa fa-tags"></i>tags</button>
                                        <a href="#">Phim 3D</a>
                                        <a href="#">videos</a>
                                        <a href="#">HD</a>
                                        <a href="#">Phim</a>
                                    </div>
                                    <div class="social-share extras">
                                        <div class="post-like-btn clearfix">
                                            <div class="easy-share" data-easyshare data-easyshare-http data-easyshare-url="http://joinwebs.com/">

                                                <button class="float-left"><i class="fa fa-share-alt"></i>Chia Sẻ</button>
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
                                    <a href="#"><i class="fa fa-long-arrow-left left-arrow"></i>Bài Blog Trước</a>
                                    <a href="#">Bài Blog Sau<i class="fa fa-long-arrow-right right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end blog post -->
                <!-- post written by -->
                <div class="blog-post-written">
                    <div class="row secBg">
                        <div class="large-12 columns">
                            <div class="media-object">
                                <div class="media-object-section">
                                    <div class="blog-post-author-img">
                                        <img src="{{ theme('images/blog-post-author-img.png') }}" alt="blog post author">
                                    </div>
                                </div>
                                <div class="media-object-section">
                                    <div class="blog-post-author-des">
                                        <h5>Viết bởi Admin</h5>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo. Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comments -->
                <section class="content comments">
                    <div class="row secBg">
                        <div class="large-12 columns">
                            <div class="main-heading borderBottom">
                                <div class="row padding-14">
                                    <div class="medium-12 small-12 columns">
                                        <div class="head-title">
                                            <i class="fa fa-comments"></i>
                                            <h4>Bình Luận <span>(4)</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-box thumb-border">
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section comment-img text-center">
                                        <div class="comment-box-img">
                                            <img src="{{ theme('images/post-author-post.png') }}" alt="comment">
                                        </div>
                                        <h6><a href="#">Joseph John</a></h6>
                                    </div>
                                    <div class="media-object-section comment-textarea">
                                        <form method="post">
                                            <textarea name="commentText" placeholder="Nhập Bình Luận Ở Đây"></textarea>
                                            <input type="submit" name="submit" value="Gửi">
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-sort text-right">
                                <span>Sắp Xếp : <a href="#">Mới Nhất</a> | <a href="#">Cũ Nhất</a></span>
                            </div>

                            <!-- main comment -->
                            <div class="main-comment showmore_one">
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section comment-img text-center">
                                        <div class="comment-box-img">
                                            <img src="{{ theme('images/post-author-post.png') }}" alt="comment">
                                        </div>
                                    </div>
                                    <div class="media-object-section comment-desc">
                                        <div class="comment-title">
                                            <span class="name"><a href="#">Joseph John</a> Bình Luận:</span>
                                            <span class="time float-right"><i class="fa fa-clock-o"></i>1 phút trước</span>
                                        </div>
                                        <div class="comment-text">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                        </div>
                                        <div class="comment-btns">
                                            <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                            <span><a href="#"><i class="fa fa-share"></i>Trả Lời</a></span>
                                            <span class='reply float-right hide-reply'></span>
                                        </div>

                                        <!--sub comment-->
                                        <div class="media-object stack-for-small reply-comment">
                                            <div class="media-object-section comment-img text-center">
                                                <div class="comment-box-img">
                                                    <img src="{{ theme('images/post-author-post.png') }}" alt="comment">
                                                </div>
                                            </div>
                                            <div class="media-object-section comment-desc">
                                                <div class="comment-title">
                                                    <span class="name"><a href="#">Joseph John</a> Bình Luận:</span>
                                                    <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                                </div>
                                                <div class="comment-text">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                                </div>
                                                <div class="comment-btns">
                                                    <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                    <span><a href="#"><i class="fa fa-share"></i>Trả Lời</a></span>
                                                    <span class='reply float-right hide-reply'></span>
                                                </div>
                                            </div>
                                        </div><!-- end sub comment -->

                                        <!--sub comment-->
                                        <div class="media-object stack-for-small reply-comment">
                                            <div class="media-object-section comment-img text-center">
                                                <div class="comment-box-img">
                                                    <img src="{{ theme('images/post-author-post.png') }}" alt="comment">
                                                </div>
                                            </div>
                                            <div class="media-object-section comment-desc">
                                                <div class="comment-title">
                                                    <span class="name"><a href="#">Joseph John</a> Bình Luận:</span>
                                                    <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                                </div>
                                                <div class="comment-text">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                                </div>
                                                <div class="comment-btns">
                                                    <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                    <span><a href="#"><i class="fa fa-share"></i>Trả Lời</a></span>
                                                    <span class='reply float-right hide-reply'></span>
                                                </div>

                                            </div>
                                        </div><!-- end sub comment -->

                                    </div>
                                </div>

                                <div class="media-object stack-for-small">
                                    <div class="media-object-section comment-img text-center">
                                        <div class="comment-box-img">
                                            <img src="{{ theme('images/post-author-post.png') }}" alt="comment">
                                        </div>
                                    </div>
                                    <div class="media-object-section comment-desc">
                                        <div class="comment-title">
                                            <span class="name"><a href="#">Joseph John</a> Bình Luận:</span>
                                            <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                        </div>
                                        <div class="comment-text">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                        </div>
                                        <div class="comment-btns">
                                            <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                            <span><a href="#"><i class="fa fa-share"></i>Trả Lời</a></span>
                                            <span class='reply float-right hide-reply'></span>
                                        </div>

                                    </div>
                                </div>

                                <div class="media-object stack-for-small">
                                    <div class="media-object-section comment-img text-center">
                                        <div class="comment-box-img">
                                            <img src="{{ theme('images/post-author-post.png') }}" alt="comment">
                                        </div>
                                    </div>
                                    <div class="media-object-section comment-desc">
                                        <div class="comment-title">
                                            <span class="name"><a href="#">Joseph John</a> Bình Luận:</span>
                                            <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                        </div>
                                        <div class="comment-text">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                        </div>
                                        <div class="comment-btns">
                                            <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                            <span><a href="#"><i class="fa fa-share"></i>Trả Lời</a></span>
                                            <span class='reply float-right hide-reply'></span>
                                        </div>
                                        <!--sub comment-->
                                        <div class="media-object stack-for-small reply-comment">
                                            <div class="media-object-section comment-img text-center">
                                                <div class="comment-box-img">
                                                    <img src="{{ theme('images/post-author-post.png') }}" alt="comment">
                                                </div>
                                            </div>
                                            <div class="media-object-section comment-desc">
                                                <div class="comment-title">
                                                    <span class="name"><a href="#">Joseph John</a> Bình Luận:</span>
                                                    <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                                </div>
                                                <div class="comment-text">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                                </div>
                                                <div class="comment-btns">
                                                    <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                    <span><a href="#"><i class="fa fa-share"></i>Trả Lời</a></span>
                                                    <span class='reply float-right hide-reply'></span>
                                                </div>
                                                <!--sub comment-->
                                                <div class="media-object stack-for-small reply-comment">
                                                    <div class="media-object-section comment-img text-center">
                                                        <div class="comment-box-img">
                                                            <img src="{{ theme('images/post-author-post.png') }}" alt="comment">
                                                        </div>
                                                    </div>
                                                    <div class="media-object-section comment-desc">
                                                        <div class="comment-title">
                                                            <span class="name"><a href="#">Joseph John</a> Bình Luận:</span>
                                                            <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                                        </div>
                                                        <div class="comment-btns">
                                                            <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                            <span><a href="#"><i class="fa fa-share"></i>Trả Lời</a></span>
                                                            <span class='reply float-right hide-reply'></span>
                                                        </div>
                                                    </div>
                                                </div><!-- end sub comment -->
                                            </div>
                                        </div><!-- end sub comment -->
                                    </div>
                                </div>
                            </div><!-- End main comment -->

                        </div>
                    </div>
                </section><!-- End Comments -->
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