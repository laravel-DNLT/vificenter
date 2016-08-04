<header id="header">
    <div class="header-container">
        <div id="topbar">
            <div class="banner">
                <div class="container">
                    <div class="row"></div>
                </div>
            </div>
            <div class="nav">
                <div class="container">
                    <div class="inner">
                        @include('includes.navbar')
                            <!-- /Block languages module -->
                    </div>
                </div>
            </div>
        </div>
        <div id="header-main">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div id="header_logo" class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <a href="{{ url('/') }}" title="KT Wine Store">
                                <img class="logo img-responsive" src="{{theme('img/logo.png')}}" alt="KT Wine Store"/>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                            <nav id="cavas_menu"  class="sf-contener leo-megamenu col-xs-4 col-sm-9 col-md-9 col-lg-9">
                                <div class="" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle btn-outline-inverse" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="fa fa-bars"></span>
                                        </button>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div id="leo-top-menu" class="collapse navbar-collapse navbar-ex1-collapse">
                                        <ul class="nav navbar-nav megamenu">
                                            <li class="" >
                                                <a href="{{ url('/') }}" target="_self" class="has-category">
                                                    <span class="menu-title">Home</span>
                                                </a>
                                            </li>
                                            <li class=" parent dropdown aligned-fullwidth " >
                                                <a href="#" class="dropdown-toggle has-category" data-toggle="dropdown" target="_self">
                                                    <span class="menu-title">Categories</span>
                                                    <b class="caret"></b>
                                                </a>
                                                <div class="dropdown-sub dropdown-menu"  style="width:680px" >
                                                    <div class="dropdown-menu-inner">
                                                        <div class="row">
                                                            <div class="mega-col col-sm-12" >
                                                                <div class="mega-col-inner ">
                                                                    <div class="leo-widget">
                                                                        <div class="widget-subcategories">
                                                                            <div class="widget-inner">
                                                                                <ul>
                                                                                    <?php
                                                                                    $menu_level_1 = DB::table('cates')->where('parent_id',0)->get();
                                                                                    ?>
                                                                                    @foreach($menu_level_1 as $item_level_1)
                                                                                    <li class="clearfix">
                                                                                        <a href="{!! URL('product',[$item_level_1->id,$item_level_1->alias]) !!}">{{$item_level_1->title}}</a>
                                                                                    </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mega-col col-sm-12" >
                                                                <div class="mega-col-inner ">
                                                                    <div class="leo-widget">
                                                                        <div class="widget-html">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" >
                                                <a href="{{ url('about') }}" target="_self" class="has-category">
                                                    <span class="menu-title">About Us</span>
                                                </a>
                                            </li>
                                            <li class=" parent dropdown aligned-fullwidth " >
                                                <a href="{{ url('contact') }}" class="dropdown-toggle has-category"><span class="menu-title">Account Service</span><b class="caret"></b></a>
                                                <div class="dropdown-sub dropdown-menu"  style="width:680px" >
                                                    <div class="dropdown-menu-inner">
                                                        <div class="row">
                                                            <div class="mega-col col-sm-4" >
                                                                <div class="mega-col-inner ">
                                                                    <div class="leo-widget">
                                                                        <div class="widget-subcategories">
                                                                            <div class="widget-inner">
                                                                                <ul>
                                                                                    <li class="clearfix">
                                                                                        <a href="{{ url('sale-contact') }}" title="Sale Lead Contact" class="img">
                                                                                            Sale Lead Contact
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="clearfix">
                                                                                        <a href="{{ url('change-order') }}" title=" Change Order" class="img">
                                                                                            Change Order
                                                                                         </a>
                                                                                    </li>
                                                                                    <li class="clearfix">
                                                                                        <a href="{{ url('change-request') }}" title="Change Request" class="img">
                                                                                            Change Request
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="clearfix">
                                                                                        <a href="{{ url('purchase-order') }}" title="Purchase Order" class="img">
                                                                                            Purchase Order
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="clearfix">
                                                                                        <a href="{{ url('request-quote') }}" title="Request for Quote" class="img">
                                                                                            Request for Quote
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="clearfix">
                                                                                        <a href="{{ url('supply-form') }}" title=" Supply Order Form" class="img">
                                                                                            Supply Order Form
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="clearfix">
                                                                                        <a href="{{ url('vendor') }}" title=" Vendor Registration" class="img">
                                                                                            Vendor Registration
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>