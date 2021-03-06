<header>
    <!-- Top -->
    <section id="top" class="topBar show-for-large">
        <div class="row">
            <div class="medium-6 columns">
                <div class="topBarMenu">
                    <ul class="menu">
                        <li>
                            <a href="{{ url('/') }}"><i class="fa fa-home"></i>Trang chủ</a>
                        </li>
                        <li>
                            <a href="{{ url('/danh-muc') }}"><i class="fa fa-th-large"></i>Danh mục</a>
                        </li>
                        <li>
                            <a href="{{ url('/gioi-thieu') }}"><i class="fa fa-user"></i>Giới thiệu</a>
                        </li>
                        <li>
                            <a href="{{ url('/lien-he') }}"><i class="fa fa-envelope"></i>Liên Hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="medium-6 columns">
                <div class="top-button">
                    <div class="socialLinks float-right">
                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-vimeo"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Top -->

     @include('includes.navbar')
</header><!-- End Header -->