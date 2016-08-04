@extends('layouts.frontend')
@section('title', 'Vendor Registration')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{theme('img/form/vendor-registration.jpg')}}" width="100%">
            </div>
        </div>
        <div class="row" style="padding: 10px 20px">
            <div class="col-md-12">
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-6">Vendeor Name</label>
                    <input type="text" name="" class="col-md-8">
                </div>
            </div>
        </div>
        <hr>
        <div class="row" style="padding: 10px 20px">
            <div class="col-md-12">
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-6">Contact Name</label>
                    <input type="text" name="" class="col-md-11">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-4">Business Name</label>
                    <input type="text" name="" class="col-md-11">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-8">Street Address</label>
                    <input type="text" name="" class="col-md-11">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-4">Street Address Line 2</label>
                    <input type="text" name="" class="col-md-11">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-6">City</label>
                    <input type="text" name="" class="col-md-11">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="col-xs-12 col-sm-6">
                        <label for="" class="col-md-6">State</label>
                        <select name="" id="" class="col-md-10">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <label for="" class="col-md-4">Zip Code</label>
                        <input type="text" name="" class="col-md-10">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-8">Phone Number</label>
                    <input type="text" name="" class="col-md-11">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-4">Email Address</label>
                    <input type="text" name="" class="col-md-11">
                </div>
            </div>
        </div>
        <hr>
        <div class="row" style="padding: 10px 20px">
            <div class="col-md-12">
                <label for="" class="col-md-8">Description of product/service being displayed</label>
                <textarea name="" id="" cols="30" rows="5" class="col-md-12"></textarea>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Booth Selection</h2>
            </div>
            <div class="col-md-12">
                <p align="center">Booths are rented on a first come, first served basis. For 2013, we can accommodate up to 50 vendors.</p>
            </div>
            <div class="col-md-12" style="padding-left: 50px">
                <label for="">Booth Options</label><br/>
                <input type="radio" > $1,000.00 for product booth space rental (10 x 10)<br/>
                <input type="radio" > $600.00 for food vendor cart rental
            </div>
            <div class="col-md-12">
                <p align="center">If you participated last year and would like to retain the same booth number, please list it below. If you're a new vendor, please list your booth number and area preferences.</p>
            </div>
            <div class="col-md-12">
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-6">Booth Number</label>
                    <input type="text" name="" class="col-md-11">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-4">Booth Area</label>
                    <input type="text" name="" class="col-md-11">
                </div>
            </div>
            <div class="col-md-12">
                <h2 align="center">Additonal Fees</h2>
            </div>
            <div class="col-md-12" style="padding-left: 50px">
                <label for="">Booth Rental Items (optional)</label><br/>
                <input type="radio" > Electrical Access- $75.00<br/>
                <input type="radio" > 8ft. Display Tables- $50.00
            </div>
            <div class="col-md-12">
                <h2 align="center">Important Event Information</h2>
            </div>
            <div class="col-md-12">
               <p align="center">Event begins at TIME on DATE, and ends at TIME on DATE. Booth setup begins at TIME on DATE. Booths must be completed no later than TIME on DATE. Vendors are responsible for setup and tear down of booths. Any vendors who have not paid in full by DATE, will lose their space (no refunds/no rain checks will be given). Food vendors must provide all food and heating equipment, but will be given electrical and water access. All food carts will be subject to inspection by the local health department the day prior to the event, and must provide permit for approval.</p>
            </div>
            <div class="col-md-12">
                <h2 align="center">Payment by Credit Card or Paypal</h2>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </div>
@endsection