<div class="large-4 columns">
    <aside class="secBg sidebar">
        <div class="row">
            <!-- search Widget -->
            <div class="large-12 medium-7 medium-centered columns">
                <div class="widgetBox">
                    <div class="widgetTitle">
                        <h5>Tìm Videos</h5>
                    </div>
                    <form id="searchform" method="get" role="search">
                        <div class="input-group">
                            <input class="input-group-field" type="text" placeholder="Từ Khóa Cần Tìm">
                            <div class="input-group-button">
                                <input type="submit" class="button" value="Xác Nhận">
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- End search Widget -->

            <!-- categories -->
            <div class="large-12 medium-7 medium-centered columns">
                <div class="widgetBox">
                    <div class="widgetTitle">
                        <h5>Danh Mục</h5>
                    </div>
                    <?php
                    $menu_level = \Modules\Video\Entities\DanhMuc::all();
                    ?>

                    <div class="widgetContent">
                        <ul class="accordion" data-accordion>
                            @foreach($menu_level as $item_level)

                            <li class="accordion-item" data-accordion-item>
                                <a href="{{ url('danh-muc/'.$item_level->id) }}" class="accordion-title">{{$item_level->Ten}}</a>
                                <div class="accordion-content" data-tab-content>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>



            <!-- social Fans Widget -->
            <div class="large-12 medium-7 medium-centered columns">
                <div class="widgetBox">
                    <div class="widgetTitle">
                        <h5>Mạng Xã Hội</h5>
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
                        <h5>Banner</h5>
                    </div>
                    <div class="widgetContent">
                        <div class="advBanner text-center">
                            <a href="#"><img src="{{theme('images/sideradv.png')}}" alt="sidebar adv"></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </aside>
</div>