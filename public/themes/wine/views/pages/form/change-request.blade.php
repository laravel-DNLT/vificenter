@extends('layouts.frontend')
@section('title', 'Change Request')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{theme('img/form/change-request.jpg')}}" style="width: 100%">
            </div>
            <div class="col-md-12" style="padding: 10px 30px">
                <h1>COMPANAY NAME</h1>
                <h2>Street addresss</h2>
                <h2>City, State, Zip Code</h2>
                <h2>URL</h2>
            </div>
            <div class="col-md-12" style="padding: 10px 20px">
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-6">Requested by</label>
                    <input type="text" name="ordernum" class="col-md-8">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label for="" class="col-md-4">Date</label>
                    <input type="text" name="orderdate" class="col-md-9">
                </div>
            </div>
        </div>
        <hr>
        <div class="row" style="padding: 10px 20px">
            <h1 style="padding-left: 10px">CHANGE REQUEST FORM</h1>
            <div class="col-md-12">
                <label for="">Description of proposed change</label>
                <textarea name="list" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-md-12">
                <label for="">Rationale gor change</label>
                <textarea name="list" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-md-12">
                <label for="">Change to diliverables</label>
                <textarea name="list" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-md-12">
                <label for="">Impact on schedule/timeable</label>
                <textarea name="list" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-md-12">
                <label for="">Impact on cost</label>
                <textarea name="list" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-md-12">
                <label for="">Impact on resources</label>
                <textarea name="list" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-md-12">
                <label for="">Changes to inovoicing schedule</label>
                <textarea name="list" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-md-12">
                <label for="">Teams that nees to sign off on change</label>
                <textarea name="list" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-md-12">
                <button name="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </div>
@endsection