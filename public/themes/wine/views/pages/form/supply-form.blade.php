@extends('layouts.frontend')
@section('title','Supply Form')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{theme('img/form/supplies-order.jpg')}}" width="100%">
            </div>
        </div>
        <div class="row" style="padding: 10px 20px">
            <div class="col-md-12">
                <label for="" class="col-md-2">Date</label>
                <input type="text" class="col-md-2" name="cname" >
            </div>
        </div>
        <hr>

        <div class="row" style="padding: 10px 20px">
            <h2>Info</h2>
            <div class="col-md-12">
                <label for="" class="col-md-2">Department</label>
                <select name="" id="" class="col-md-4">
                    <option value=""></option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2">First Name</label>
                <input type="text" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2">Last Name</label>
                <input type="text" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2">Phone</label>
                <input type="text" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2">Email Address</label>
                <input type="text" class="col-md-4" name="cname" >
            </div>
        </div>
        <hr>
        <div class="row" style="padding: 10px 20px">
            <h2>Supplies</h2>
            <div class="col-md-12">
                <label for="" class="col-md-2">Item 1</label>
                <select name="" id="" class="col-md-4">
                    <option value=""></option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2"></label>
                <input type="email" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2">Item 1 Quantity</label>
                <input type="email" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2">Item 2</label>
                <select name="" id="" class="col-md-4">
                    <option value=""></option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2"></label>
                <input type="email" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2">Item 2 Quantity</label>
                <input type="email" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2">Item 3</label>
                <select name="" id="" class="col-md-4">
                    <option value=""></option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2"></label>
                <input type="email" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2">Item 3 Quantity</label>
                <input type="email" class="col-md-4" name="cname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2">Other Information</label>
                <textarea name="" id="" cols="30" rows="5" class="col-md-4"></textarea>
            </div>
        </div>
        <hr>
        <div class="row" style="padding: 10px 20px">
            <h2>Delivery</h2>
            <div class="col-md-12">
                <label for="" class="col-md-2">Deliver to location</label>
                <input type="email" class="col-md-4" name="cname" />
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-2">Pick up</label>
                <input type="checkbox" />
            </div>
        </div>
        <div class="col-md-12" style="padding: 10px 20px">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
@endsection