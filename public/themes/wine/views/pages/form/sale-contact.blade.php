@extends('layouts.frontend')
@section('title', 'Sale Lead Contact')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{theme('img/form/sale-lead-form.jpg')}}" width="100%">
            </div>
        </div>
        <div class="row" style="padding: 10px 20px">
            <h2>Please enter your information below so we can be in touch</h2><hr>
            <div class="col-md-12">
                <label for="" class="col-md-4">Company</label>
                <input type="text" class="col-md-4">
            </div>
        </div>
        <hr>
        <div class="row" style="padding: 10px 20px">
            <h2>Primary Contact Information</h2>
            <div class="col-md-12">
                <label for="" class="col-md-4">First Name</label>
                <input type="text" class="col-md-4" name="fname" >
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Last Name</label>
                <input type="text" class="col-md-4" name="lname">
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Email</label>
                <input type="email" class="col-md-4" name="email">
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Phone</label>
                <input type="text" class="col-md-4" name="phone">
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Job Title</label>
                <input type="text" class="col-md-4" name="job-title">
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Address</label>
                <input type="text" class="col-md-4" name="addr">
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Address ( line 2)</label>
                <input type="text" class="col-md-4" name="addr2">
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">City</label>
                <input type="text" class="col-md-4" name="city">
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">State</label>
                <select name="state" id="" class="col-md-1">
                    <option value=""></option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">ZIP Code</label>
                <input type="text" class="col-md-1" name="zcode">
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Please tell us about the problem you are trying to solve</label>
                <textarea name="" id="" cols="30" rows="5" class="col-md-4"></textarea>
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">How did you hear about us?</label>
                <textarea name="" id="" cols="30" rows="5" class="col-md-4"></textarea>
            </div>
            <div class="col-md-12">
                <label for="" class="col-md-4">Questions or comments</label>
                <textarea name="" id="" cols="30" rows="5" class="col-md-4"></textarea>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>

    </div>
@endsection