<nav>

    <!-- Block search module TOP -->
    <div id="search_block_top" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 pull-right">
        <div class="groupe-btn hidden-md hidden-lg" title="Search">
            <span class="fa fa-search"></span>
        </div>
        <form id="searchbox" method="get" action="http://demo4leotheme.com/prestashop/leo_wine_store/en/search" class="groupe" >
            <div class="input-group">
                <input type="hidden" name="controller" value="search" />
                <input type="hidden" name="orderby" value="position" />
                <input type="hidden" name="orderway" value="desc" />
                <input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
                                        <span class="input-group-btn">
                                            <button type="submit" name="submit_search" class="btn btn-outline-inverse">
                                                <span class="button-search fa fa-search">
                                                    <span class="unvisible">Search</span>
                                                </span>
                                            </button>
                                        </span>
            </div>
        </form>
    </div>
    <!-- /Block search module TOP -->
    <!-- Block user information module NAV  -->
    <div class="header_user_info btn-group">
        <div class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i>
            <span>My Account</span>
        </div>
        <div class="quick-setting dropdown-menu">
            <ul>
                <li class="first">
                    <a id="wishlist-total" href="login.html" title="My wishlists">
                        <i class="fa fa-heart"></i>Wish List

                    </a>
                </li>
                <li>
                    <a class="login" href="loginfd9a.html" rel="nofollow" title="Login to your customer account">
                        <i class="fa fa-unlock-alt"></i>Sign in

                    </a>
                </li>
                <li class="last">
                    <a href="order.html" title="Checkout" class="last">
                        <i class="fa fa-share"></i>Checkout

                    </a>
                </li>
                <li>
                    <a href="order.html" title="Shopping Cart" rel="nofollow">
                        <i class="fa fa-shopping-cart"></i>Shopping Cart

                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Block currencies module -->
    <div class="btn-group">
        <div data-toggle="dropdown" class="dropdown-toggle">USD $</div>
        <div class="quick-setting dropdown-menu">
            <div id="currencies-block-top">
                <form id="setCurrency" action="http://demo4leotheme.com/prestashop/leo_wine_store/en/" method="post">
                    <input type="hidden" name="id_currency" id="id_currency" value=""/>
                    <input type="hidden" name="SubmitCurrency" value="" />

                    <ul id="first-currencies" class="currencies_ul toogle_content">
                        <li class="selected">
                            <a href="javascript:setCurrency(1);" rel="nofollow" title="Dollar">$ Dollar</a>
                        </li>
                        <li >
                            <a href="javascript:setCurrency(2);" rel="nofollow" title="Euro">€ Euro</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <!-- /Block currencies module -->
    <!-- Block languages module -->
    <div class="btn-group">
        <div data-toggle="dropdown" class="dropdown-toggle">
            <img src="{{ theme('frontend/img/l/1.jpg') }}" alt="en" width="16" height="11" />
            <span> English</span>
        </div>
        <div class="quick-setting dropdown-menu">
            <div id="languages-block-top" class="languages-block">
                <ul id="first-languages" class="languages-block_ul">
                    <li class="selected">
                                                    <span>
                                                        <img src="{{ theme('frontend/img/l/1.jpg') }}" alt="en" width="16" height="11" />&nbsp;English
                                                    </span>
                    </li>
                    <li >
                        <a href="http://demo4leotheme.com/prestashop/leo_wine_store/fr/" title="Français (French)">
                                                        <span>
                                                            <img src="{{ theme('frontend/img/l/2.jpg') }}" alt="fr" width="16" height="11" />&nbsp;Français
                                                        </span>
                        </a>
                    </li>
                    <li >
                        <a href="http://demo4leotheme.com/prestashop/leo_wine_store/de/" title="Deutsch (German)">
                                                        <span>
                                                            <img src="{{ theme('frontend/img/l/3.jpg') }}" alt="de" width="16" height="11" />&nbsp;Deutsch
                                                        </span>
                        </a>
                    </li>
                    <li >
                        <a href="http://demo4leotheme.com/prestashop/leo_wine_store/pt/" title="Português (Portuguese)">
                                                        <span>
                                                            <img src="{{ theme('frontend/img/l/4.jpg') }}" alt="pt" width="16" height="11" />&nbsp;Português
                                                        </span>
                        </a>
                    </li>
                    <li >
                        <a href="http://demo4leotheme.com/prestashop/leo_wine_store/it/" title="Italiano (Italian)">
                                                        <span>
                                                            <img src="{{ theme('frontend/img/l/5.jpg') }}" alt="it" width="16" height="11" />&nbsp;Italiano
                                                        </span>
                        </a>
                    </li>
                    <li >
                        <a href="http://demo4leotheme.com/prestashop/leo_wine_store/es/" title="Español (Spanish)">
                                                        <span>
                                                            <img src="{{ theme('frontend/img/l/6.jpg') }}" alt="es" width="16" height="11" />&nbsp;Español
                                                        </span>
                        </a>
                    </li>
                    <li >
                        <a href="http://demo4leotheme.com/prestashop/leo_wine_store/ru/" title="Russian">
                                                        <span>
                                                            <img src="{{ theme('frontend/img/l/7.jpg') }}" alt="ru" width="16" height="11" />&nbsp;Russian
                                                        </span>
                        </a>
                    </li>
                    <li >
                        <a href="http://demo4leotheme.com/prestashop/leo_wine_store/pl/" title="Polish">
                                                        <span>
                                                            <img src="{{ theme('frontend/img/l/8.jpg') }}" alt="pl" width="16" height="11" />&nbsp;Polish
                                                        </span>
                        </a>
                    </li>
                    <li >
                        <a href="http://demo4leotheme.com/prestashop/leo_wine_store/ar/" title="Arabic">
                                                        <span>
                                                            <img src="{{ theme('frontend/img/l/9.jpg') }}" alt="ar" width="16" height="11" />&nbsp;Arabic
                                                        </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>