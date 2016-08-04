@extends('layouts.frontend')
@section('title', 'Request for Quote')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{theme('img/form/request-for-quote.jpg')}}" width="100%">
            </div>
            <div class="col-md-12" style="padding-top: 30px; padding-left: 20px">
                <label for="" class="col-md-4">DATE</label>
                <input type="text" class="col-md-2" name="cname" >
            </div>
        </div>
        <hr>
        <div class="row" style="padding: 10px 20px">
            <h2>CONTACT INFORMATION</h2>
            <div class="col-md-12">
                <label for="" class="col-md-4">First Name</label>
                <input type="text" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Last Name</label>
                <input type="text" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Street Address</label>
                <input type="text" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">City</label>
                <input type="text" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">State</label>
                <select name="" id="" class="col-md-1">
                    <option value=""></option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Zip Code</label>
                <input type="text" class="col-md-1" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Phone</label>
                <input type="text" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Email Address</label>
                <input type="email" class="col-md-4" name="cname" >
            </div>
        </div>
        <hr>
        <div class="row" style="padding: 10px 20px">
            <h2>PRODUCTS</h2>
            <h3>ITEM 1</h3>
            <div class="col-md-12">
                <label for="" class="col-md-4">Product Name</label>
                <input type="email" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Quantity</label>
                <select name="" id="" class="col-md-1">
                    <option value=""></option>
                </select>
            </div>
            <h3>ITEM 2</h3>
            <div class="col-md-12">
                <label for="" class="col-md-4">Product Name</label>
                <input type="email" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Quantity</label>
                <select name="" id="" class="col-md-1">
                    <option value=""></option>
                </select>
            </div>
            <h3>ITEM 3</h3>
            <div class="col-md-12">
                <label for="" class="col-md-4">Product Name</label>
                <input type="email" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Quantity</label>
                <select name="" id="" class="col-md-1">
                    <option value=""></option>
                </select>
            </div>
        </div>
        <hr>
        <div class="row" style="padding: 10px 20px">
            <h2>NOTES</h2>
            <div class="col-md-12">
                <label for="" class="col-md-4">Additional comments or question</label>
                <textarea name="" id="" cols="30" rows="5" class="col-md-4"></textarea>
            </div>
        </div>
        <div class="row" style="padding: 10px 20px">
            <div class="col-md-12">
                <button type="submit" class="btn btn-default ">Submit</button>
            </div>
        </div>
    </div>
@endsection