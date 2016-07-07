@extends('layouts.frontend')
@section('title', 'Login')
@section('content')
            <!-- Start page content -->
            <div class="page-content">
                <!-- Start breadcume area -->
                <div class="breadcume-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="breadcrumb">
                                    <a title="Return to Home" href="index-2.html" class="home"><i class="fa fa-home"></i></a>
                                    <span class="navigation-pipe">&gt;</span>
                                    Login
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End breadcume area -->
                <!-- LOGIN-AREA START -->
                <div class="lognin-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="cart-title">Login</h4>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Registered-Customers Start -->
                            <div class="col-md-6">
                                <form action="{{ route('pages.login') }}" method="post">
                                    <div class="registered-customers">
                                        <h3>REGISTERED CUSTOMERS</h3>
                                        <div class="registered">
                                            @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    @foreach($errors->all() as $error)
                                                        {{ $error }}
                                                    @endforeach
                                                </div>
                                            @endif
                                            <p>If you have an account with us, Please log in.</p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="text" class="custom-form" name="email" placeholder="Email Address" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="password" class="custom-form" placeholder="Password" name="password"/>
                                                </div>
                                            </div>
                                            <p><label class="forgot"><a href="#">Forgot our password?</a></label></p>
                                            <button class="btn btnContact" type="submit">login</button>
                                            {{ csrf_field() }}
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Registered-Customers End -->
                            {{--<div class="col-md-6">--}}
                                {{--<form action="#">--}}
                                    {{--<div class="new-customers">--}}
                                        {{--<h3>NEW CUSTOMERS</h3>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-6">--}}
                                                {{--<input type="text" class="custom-form" placeholder="First Name" />--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-6">--}}
                                                {{--<input type="text" class="custom-form" placeholder="Last Name" />--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<input type="text" class="custom-form" placeholder="Address" />--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-6">--}}
                                                {{--<select class="custom-select custom-form">--}}
                                                    {{--<option>City</option>--}}
                                                    {{--<option>Dhaka</option>--}}
                                                    {{--<option>New York</option>--}}
                                                    {{--<option>London</option>--}}
                                                    {{--<option>Melbourne</option>--}}
                                                {{--</select>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-6">--}}
                                                {{--<select class="custom-select custom-form">--}}
                                                    {{--<option>Country</option>--}}
                                                    {{--<option>Bangladesh</option>--}}
                                                    {{--<option>United States</option>--}}
                                                    {{--<option>United Kingdom</option>--}}
                                                    {{--<option>Australia</option>--}}
                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-6">--}}
                                                {{--<input type="text" class="custom-form" placeholder="Phone Number" />--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-6">--}}
                                                {{--<select class="custom-select custom-form">--}}
                                                    {{--<option>Post Code</option>--}}
                                                    {{--<option>012345</option>--}}
                                                    {{--<option>0123456</option>--}}
                                                    {{--<option>01234567</option>--}}
                                                    {{--<option>012345678</option>--}}
                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<input class="custom-form" type="text" placeholder="Email" name="email" />--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<input class="custom-form" type="password" placeholder="Password" />--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<input class="custom-form" type="password" placeholder="Confirm Password" />--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="checkbox">--}}
                                            {{--<label>--}}
                                                {{--<input type="checkbox" checked="checked" name="create-account"/>--}}
                                                {{--Sign up for our newsletter!--}}
                                            {{--</label>--}}
                                            {{--<label>--}}
                                                {{--<input type="checkbox" name="billing-address"/>--}}
                                                {{--Receive special offers from our partners!--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-6">--}}
                                                {{--<!-- <input type="submit" class="custom-form custom-submit no-margin" value="register" /> -->--}}
                                                {{--<button class="btn btnContact" type="submit">register</button>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-6">--}}
                                               {{--<!--  <input type="submit" class="custom-form custom-submit no-margin" value="clear" /> -->--}}
                                                 {{--<button class="btn btnContact" type="submit">clear</button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <!-- LOGIN-AREA END -->
            </div>
            <!-- End contact page area -->
            <!-- End page content -->    
            <!-- Start brand and client -->
            <div class="brand-and-client">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="area-title">
                                <h3>BRAND & CLIENTS</h3>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="brand-logo featured-product-area">
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/1.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/2.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/3.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/4.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/5.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/6.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/1.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/3.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/4.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End brand and client -->
            <!-- Start blog area -->
            <div class="blog-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="area-title">
                                <h3>The Blog</h3>
                            </div>
                        </div>
                        <div class="blog-box featured-product-area">
                            <div class="col-sm-4">
                                <a href="single-blog.html"><img src="img/blog/4-home-default.jpg" alt=""></a>
                                <span class="blog-date">2015-08-12 04:40:21</span>
                                <div class="blog-info">
                                    <h3><a href="single-blog.html">Share the Love for PrestaShop 1.6</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                                    <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <a href="single-blog.html"><img src="img/blog/3-home-default.jpg" alt=""></a>
                                <span class="blog-date">2015-08-12 04:40:21</span>
                                <div class="blog-info">
                                    <h3><a href="single-blog.html">Answers to your Questions about PrestaShop</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                                    <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <a href="single-blog.html"><img src="img/blog/2-home-default.jpg" alt=""></a>
                                <span class="blog-date">2015-08-12 04:40:21</span>
                                <div class="blog-info">
                                    <h3><a href="single-blog.html">What is Bootstrap? – The History and the Hype</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                                    <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <a href="single-blog.html"><img src="img/blog/1-home-default.jpg" alt=""></a>
                                <span class="blog-date">2015-08-12 04:40:21</span>
                                <div class="blog-info">
                                    <h3><a href="single-blog.html">From Now we are certified web agency</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                                    <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End blog area -->
@endsection