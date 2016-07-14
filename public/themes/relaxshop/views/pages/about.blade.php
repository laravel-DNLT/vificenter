@extends('layouts.frontend')
@section('title','Giới Thiệu')
@section('content')
    <section id="breadcrumb" class="breadMargin">
        <div class="row">
            <div class="large-12 columns">
                <nav aria-label="You are here:" role="navigation">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-home"></i><a href="{{ url('/') }}">Trang Chủ</a></li>
                        <li>
                            <span class="show-for-sr">Current: </span> Giới Thiệu
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
                <section class="content content-with-sidebar">
                    <!-- newest video -->
                    <div class="main-heading removeMargin">
                        <div class="row secBg padding-14 removeBorderBottom">
                            <div class="medium-8 small-8 columns">
                                <div class="head-title">
                                    <i class="fa fa-user"></i>
                                    <h4>Về Chúng Tôi</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row secBg">
                        <div class="large-12 columns">
                            <article class="page-content">
                                <p>hahatv.com là website tổng hợp clip - video hài nhằm đem lại tiếng cười sảng khoái cho mọi người. Rất đơn giản, chỉ cần vào <strong>hahatv.com</strong> và cười.</p>
                                <p>Đặc biệt những clip hài , phim hài vào dịp tết nguyên đán của các năm sẽ được chúng tôi update mới nhất !</p>
                                <p>Like video - clip bạn thích! Chỉ cần click like, đã thay lời khen ngợi của bạn đến tác giả và giúp chia sẻ tiếng cười đến hàng trăm người khác.</p>
                                <p>Bình luận video - clip bạn thích! Bình luận của bạn có thể còn gây cười hơn chính bức ảnh đó.</p>
                                <p>Like bình luận bạn thích! Bình luận cũng gây cười, tại sao không like nhỉ?</p>
                                <p><strong>Ủng hộ hahatv.com</strong></p>
                                <p><strong>Like <a href="#">Haha Tv trên Facebook</a> để được cười nhiều hơn</strong></p>
                            </article>
                        </div>
                    </div>
                </section>
                <!-- ad Section -->
                <div class="googleAdv">
                    <a href="#"><img src="{{ theme('images/goodleadv.png') }}" alt="googel ads"></a>
                </div><!-- End ad Section -->
            </div><!-- end left side content area -->
            <!-- sidebar -->
            @include('includes.widget')
            <!-- end sidebar -->
        </div>
    </section><!-- End Category Content-->
@endsection