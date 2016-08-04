@extends('layouts.frontend')
@section('title', 'Change Order')
@section('content')
    <div class="container">
        <div class="row">
            <img src="{{ theme('img/form/change-order.jpg') }}"style="width: 100%" >
        </div>
        <div class="row" style="padding-left: 20px">
            <h1>Company Name</h1>
            <p>Street address</p>
            <p>City, State,Zip code</p>
            <p>Url</p>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-12">Order number</label>
                    <input type="text" name="ordernum" class="col-md-8">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-12">Order date</label>
                    <input type="text" name="orderdate" class="col-md-4">
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-12">Project name/number</label>
                    <input type="text" name="Pname" class="col-md-8">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-12">Contact Name</label>
                    <input type="text" name="Cname" class="col-md-8">
                </div>
            </div>
        </div>
        <hr>
        <div class="row" style="padding: 10px 20px">
            <h1 align="center">Change Order Details</h1>
            <div class="col-md-12">
                <label for="">List requested changes to the original order</label>
                <textarea name="list" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-md-12" >
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-12">Previous contract amount</label>
                    <input type="text" name="ordernum" class="col-md-10">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-12">Revised contract total</label>
                    <input type="text" name="orderdate" class="col-md-10">
                </div>
            </div>
            <div class="col-md-12">
                <label for="">List any alterations to the previous incoicing schedule</label>
                <textarea name="list" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-md-12">
                <label for="">List any alterations to the previous incoicing schedule</label>
                <textarea name="list" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-md-12"">
                <label for="" class="col-md-12">New contract completion date</label>
                <input type="text" name="contract" class="col-md-3">
            </div>
            <div class="col-md-12">
                <button name="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </div>
@endsection