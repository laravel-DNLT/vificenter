@extends('layouts.backend')
@section('title','Dashboard')
@section('style')
    {{--\vendors\pickadate\lib\themes\default.css--}}
    <link href="{{admin('vendors/pickadate/lib/themes/default.css')}}" rel="stylesheet">
    <link href="{{admin('vendors/pickadate/lib/themes/default.date.css')}}" rel="stylesheet">
    <link href="{{admin('vendors/pickadate/lib/themes/default.time.css')}}" rel="stylesheet">
    <link href="{{admin('vendors/selectize/dist/css/selectize.css')}}" rel="stylesheet">
    <link href="{{admin('vendors/selectize/dist/css/selectize.bootstrap3.css')}}" rel="stylesheet">
@stop
@section('content')
    <div class="right_col" role="main">
        <div class="row">
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>Products <small>» Add New Product</small></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">New Product Form</h3>
                    </div>
                    <div class="panel-body">

                        @include('includes.backend.partials.errors')

                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @include('admin.product._form')

                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-2">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="fa fa-disk-o"></i>
                                            Save New Product
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="{{admin('vendors/pickadate/lib/picker.js')}}"></script>
    <script src="{{admin('vendors/pickadate/lib/picker.date.js')}}"></script>
    <script src="{{admin('vendors/pickadate/lib/picker.time.js')}}"></script>
    <script src="{{admin('vendors/selectize/dist/js/standalone/selectize.js')}}"></script>
    <script>
        $(function() {
            $("#publish_date").pickadate({
                format: "mmm-d-yyyy"
            });
            $("#publish_time").pickatime({
                format: "h:i A"
            });

        });
    </script>

    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('descriptions');
//            //bootstrap WYSIHTML5 - text editor
//            $(".textarea").wysihtml5();
        });
    </script>
@stop