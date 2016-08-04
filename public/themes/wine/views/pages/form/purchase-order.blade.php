@extends('layouts.frontend')
@section('title', 'Purchase Order')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{theme('img/form/purchase-order.jpg')}}" width="100%">
            </div>
            <div class="col-md-12" style="padding: 10px 20px">
                <div class="col-md-4">
                    <img src="{{theme('img/form/purchase-order-1.jpg')}}" style="padding-left: 15px;padding-top: 25px">
                </div>
                <div class="col-md-8" align="right" style="padding-right: 150px">
                    <h2>Company Name</h2>
                    <h2>Street Address</h2>
                    <h2>City, State, Zip Code</h2>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 10px 20px">
            <div class="col-md-12">
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-4">P.O Number</label>
                    <input type="text" name="ordernum" class="col-md-4"/>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-4" style="padding-left: 100px">P.O Date</label>
                    <input type="text" name="orderdate" class="col-md-4"/>
                </div>
            </div>
        </div>
            <hr>
            <div class="row" style="padding: 10px 20px">
                <h2>Authorized By</h2>
                <div class="col-md-12">
                    <label for="" class="col-md-2">Contact Name</label>
                    <input type="text" class="col-md-8" name="cname"/>
                </div>
                <div class="col-md-12">
                    <label for="" class="col-md-2">Street Address</label>
                    <input type="text" class="col-md-8" name="cname" />
                </div>
                <div class="col-md-12">
                    <label for="" class="col-md-2">Street Address 2</label>
                    <input type="text" class="col-md-8" name="cname"/>
                </div>
                <div class="col-md-12">
                    {{--<div class="col-xs-12 col-sm-6">--}}
                        <label for="" class="col-md-2">City</label>
                        <input type="text" name="ordernum" class="col-md-2">
                    {{--</div>--}}
                    {{--<div class="col-xs-12 col-sm-6">--}}
                        <label for="" class="col-md-2" style="padding-left: 100px">State</label>
                        <select name="state" id="" class="col-md-1">
                            <option value=""></option>
                        </select>
                    {{--</div>--}}
                </div>
                <div class="col-md-12">
                    <label for="" class="col-md-2">Zip Code</label>
                    <input type="text" class="col-md-4" name="cname" >
                </div>
                <div class="col-md-12">
                    <label for="" class="col-md-2">Phone Number</label>
                    <input type="text" class="col-md-4" name="cname" >
                </div>
                <div class="col-md-12">
                    <label for="" class="col-md-2">Fax Number</label>
                    <input type="text" class="col-md-4" name="cname" >
                </div>
            </div>
            <hr>
            <div class="row" style="padding: 10px 20px">
                <div class="col-md-12">
                    <h2>Shipping Information</h2>
                    <div class="col-md-12">
                        <label for="" class="col-md-2">Contact Name</label>
                        <input type="text" class="col-md-4" name="cname" >
                    </div>
                    <div class="col-md-12">
                        <label for="" class="col-md-2">Street Address</label>
                        <input type="text" class="col-md-8" name="cname" >
                    </div>
                    <div class="col-md-12">
                        <label for="" class="col-md-2">Street Address 2</label>
                        <input type="text" class="col-md-8" name="cname" >
                    </div>
                    <div class="col-md-12">
                        {{--<div class="col-xs-12 col-sm-6">--}}
                        <label for="" class="col-md-2">City</label>
                        <input type="text" name="ordernum" class="col-md-2">
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-6">--}}
                        <label for="" class="col-md-2" style="padding-left: 100px">State</label>
                        <select name="state" id="" class="col-md-1">
                            <option value=""></option>
                        </select>
                        {{--</div>--}}
                    </div>
                    <div class="col-md-12">
                        <label for="" class="col-md-2">Zip Code</label>
                        <input type="text" class="col-md-4" name="cname" >
                    </div>
                    <div class="col-md-12">
                        <label for="" class="col-md-2">Phone Number</label>
                        <input type="text" class="col-md-4" name="cname" >
                    </div>
                    <div class="col-md-12">
                        <label for="" class="col-md-2">Fax Number</label>
                        <input type="text" class="col-md-4" name="cname" >
                    </div>
                </div>
            </div>
            <hr>
            <div class="row" style="padding: 10px 20px">
                <h2>Order Inofrmation</h2>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Item</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <label for="" class="col-md-4">Quantity</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">L-Shaped Desk</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Computer Desk</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Double-Pedestal Desk</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Single-Pedestal Desk</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Desk Return (Left)</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Desk Return (Right)</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Open Hutch</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Flipper Door</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Credenza</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Mobile File</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Bookcase</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Extended Folding Table</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Desk Lamp</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Hanging Cabinet</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-4">
                        <label for="" class="col-md-6">Cablt Wraps</label>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <input type="text" class="col-md-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <button name="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </div>
@endsection