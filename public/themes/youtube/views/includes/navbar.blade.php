
    <!--Navber-->
    <section id="navBar">
        <div class="middleNav show-for-large">
            <div class="row">
                <div class="large-3 columns">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{theme('images/logo.png')}}" alt="betube" width="100px" height="auto"></a>
                    </div>
                </div>
                <div class="large-6 columns">
                    <div class="topCenterAdv text-center">
                        <img src="{{theme('images/header-top-img.png')}}" alt="betube">
                    </div>
                </div>

                    <div class="large-3 columns">
                        <div class="search-btns float-right">
                            <ul class="menu">
                                @if (Auth::guest())
                                    <li class="upl-btn">
                                        <a href="submit-post.html">Đăng Nhập</a>
                                    </li>
                                    <li class="login">
                                        <a href="login.html">Đăng Ký</a>
                                    </li>
                                @else
                                    <li class="upl-btn">
                                        <a href="submit-post.html">Tải video lên</a>
                                    </li>
                                    <li class="login">
                                        <a href="login.html">Đăng Nhập/Đăng Ký</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
        <nav class="sticky-container navFull-v2 navfull-v2-light" data-sticky-container>
            <div class="sticky topnav" data-sticky data-top-anchor="navBar" data-btm-anchor="footer-bottom:bottom" data-margin-top="0" data-margin-bottom="0" style="width: 100%; background: #f6f6f6;" data-sticky-on="large">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="title-bar" data-responsive-toggle="beNav" data-hide-for="large">
                            <button class="menu-icon" type="button" data-toggle="offCanvas"></button>
                            <div class="title-bar-title"><img src="{{theme('images/logo-small.png')}}" alt="logo"></div>
                        </div>

                        <div class="top-bar show-for-large top-bar-light" id="beNav" style="width: 100%;">
                            <div class="top-bar-left">
                                <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
                                    <li class="has-submenu active" data-dropdown-menu="example">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <?php
                                        $menu_level = \Modules\Video\Entities\DanhMuc::all();
                                    ?>
                                    @foreach($menu_level as $item_level)
                                    <li>
                                        <a href="{{ url($item_level->id.'/'.$item_level->Ten) }}">{{$item_level->Ten}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="top-bar-right search-btn">
                                <ul class="menu">
                                    <li class="search">
                                        <i class="fa fa-search"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="search-bar" class="clearfix search-bar-light">
                    <form method="post">
                        <div class="search-input float-left">
                            <input type="search" name="search" placeholder="Video Bạn Cần Tìm Kiếm">
                        </div>
                        <div class="search-btn float-right text-right">
                            <button class="button" name="search" type="submit">Tìm</button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </section>