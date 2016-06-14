@extends('layouts.frontend')
@section('title','Home')
@section('content')
    <div class="cp_inner-banner">
        <div class="cp-inner-image">
            <img src="{{theme('images/inner-contact-img1.jpg')}}" alt="">
        </div>
        <div class="cp_breadcrumb-holder">
            <div class="container">
                <h1>Contact</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="cp_main">

        <section class="cp_contact-section pd-tb80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form class="cp-form-box" method="get">
                            <h3>Drop Us A Line</h3>
                            <div class="holder">
                                <label>Name*</label>
                                <input type="text" placeholder="First Name">
                            </div>
                            <div class="holder">
                                <label>Email*</label>
                                <input type="text" placeholder="Email Address">
                            </div>
                            <div class="holder">
                                <label>Subject</label>
                                <input type="text" placeholder="Subject">
                            </div>
                            <div class="holder">
                                <label>Message</label>
                                <textarea placeholder="Comments"></textarea>
                            </div>
                            <div class="holder">
                                <button type="submit" value="">Send<i class="fa fa-angle-right"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="cp-map-box">
                            <h3>Drop Us A Line</h3>
                            <div id="map_contact_1" class="map_canvas active"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
@section('script')
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    @endsection