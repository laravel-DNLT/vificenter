@extends('layouts.frontend')
@section('title','Liên Hệ')
@section('content')
    <section id="breadcrumb">
        <div class="row">
            <div class="large-12 columns">
                <nav aria-label="You are here:" role="navigation">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-home"></i><a href="{{ url('/') }}">Trang Chủ</a></li>
                        <li>
                            <span class="show-for-sr">Current: </span> Liên Hệ
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section><!--end breadcrumbs-->

    <!-- registration -->
    <section class="registration">
        <div class="row secBg">
            <div class="large-12 columns">
                <div class="login-register-content">
                    <div class="row collapse borderBottom">
                        <div class="medium-6 large-centered medium-centered">
                            <div class="page-heading text-center">
                                <h3>Liên Hệ</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-equalizer data-equalize-on="medium" id="test-eq">
                        <div class="large-6 columns">
                            <h4>Thông Tin Liên Hệ:</h4>
                            <div class="map">
                                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDnDToJSZ_-g8LtvEr3bMhOuTBT_pg25Tg'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:400px;width:520px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://anfahrtsplanerstellen.org'>maps auf homepage einbinden</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=02f224158e76dfad3d8c081d65b467f1c3d1d30b'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(21.0333,105.85000000000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(21.0333,105.85000000000002)});infowindow = new google.maps.InfoWindow({content:'<strong>133 Nguyen Chi Thanh</strong><br><br> Hanoi<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                            </div>
                            <div class="user-contacts">
                                <div class="row">
                                    <div class="large-6 medium-6 columns">
                                        <div class="contact-stats">
                                            <i class="fa fa-map-marker"></i>
                                            <h6>Địa Chỉ Văn Phòng</h6>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="large-6 medium-6 columns">
                                        <div class="contact-stats">
                                            <i class="fa fa-envelope"></i>
                                            <h6>Địa Chỉ Email</h6>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="large-6 medium-6 columns">
                                        <div class="contact-stats">
                                            <i class="fa fa-phone"></i>
                                            <h6>Điện Thoại</h6>
                                            <p><strong>Số Điện Thoại Văn Phòng :</strong>  <br/> <strong>Số Fax : </strong> </p>
                                        </div>
                                    </div>
                                    <div class="large-6 medium-6 columns">
                                        <div class="contact-stats">
                                            <i class="fa fa-phone"></i>
                                            <h6>Mạng Xã hội</h6>
                                            <p>
                                                <a href="#" class="secondary-button"><i class="fa fa-facebook"></i></a>
                                                <a href="#" class="secondary-button"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="secondary-button"><i class="fa fa-google-plus"></i></a>
                                                <a href="#" class="secondary-button"><i class="fa fa-instagram"></i></a>
                                                <a href="#" class="secondary-button"><i class="fa fa-vimeo"></i></a>
                                                <a href="#" class="secondary-button"><i class="fa fa-youtube"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="large-6 columns">
                            <h4>Chúng tôi rất vui khi nghe phản hồi từ bạn</h4>
                            <div class="register-form">
                                <form method="post" data-abide novalidate>
                                    <div data-abide-error class="alert callout" style="display: none;">
                                        <p><i class="fa fa-exclamation-triangle"></i> There are some errors in your form.</p>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-label"><i class="fa fa-user"></i></span>
                                        <input class="input-group-field" type="text" placeholder="Nhập Tên" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-label"><i class="fa fa-envelope"></i></span>
                                        <input class="input-group-field" type="email" placeholder="Nhập Email" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-label"><i class="fa fa-book"></i></span>
                                        <input class="input-group-field" type="text" placeholder="Nhập Chủ Đề" required>
                                    </div>
                                    <textarea required placeholder="Tin Nhắn Của Bạn"></textarea>
                                    <button class="button expanded" type="submit" name="submit">Đăng Ký Ngay</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection