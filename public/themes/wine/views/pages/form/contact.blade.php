@extends('layouts.frontend')
@section('title', 'Contact Us')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{theme('img/form/contact-us.jpg')}}" width="100%">
            </div>
            <div class="col-md-12" style="padding: 10px 20px">
                <h2 align="center">Use this form to provide your comments, concerns, quesetions, or suggestions to local.We will respond within 48 hours</h2></div>
            <div class="col-md-12" style="padding: 10px 20px">
                <div class="col-md-12">
                    <label for="" class="col-md-3" style="padding-left: 55px">First Name</label>
                    <input type="text" class="col-md-6" name="cname"/>
                </div>
                <div class="col-md-12">
                    <label for="" class="col-md-3" style="padding-left: 55px">Last Name</label>
                    <input type="text" class="col-md-6" name="cname"/>
                </div>
                <div class="col-md-12">
                    <label for="" class="col-md-3" style="padding-left: 55px">Email Address</label>
                    <input type="text" class="col-md-6" name="cname"/>
                </div>
                <div class="col-md-12">
                    <label for="" class="col-md-3" style="padding-left: 55px">Subject</label>
                    <input type="text" class="col-md-6" name="cname"/>
                </div>
                <div class="col-md-12">
                    <label for="" class="col-md-3" style="padding-left: 55px">Questions/Comments</label>
                    <textarea name="" id="" cols="30" rows="5" class="col-md-6"></textarea>
                </div>
                <div class="col-md-12" style="padding-left: 55px">
                    <button name="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </div>
    </div>

@endsection