@extends('layouts.backend')
@section('style')
    <link rel="stylesheet" href="{{admin('build/css/bootstrap-tagsinput.css')}}">
@endsection
@section('content')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Design <small>different form elements</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{ route('admin.video.edit', $video->id) }}">
                            @if(count($errors) >0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        {{$error}} <br>
                                    @endforeach
                                </div>
                            @endif
                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="heard" class="control-label col-md-2 col-sm-2 col-xs-12">Danh Mục:</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control col-md-12 col-xs-12" name="danhmuc">
                                        @foreach($danhmuc as $dm)
                                            <option value="{{$dm->id}}">{{$dm->Ten}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="URL">URL
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text"  class="form-control col-md-12 col-xs-12" name="url" value="https://www.youtube.com/watch?v={{$video->Url}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="URL">Sắp Xếp
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text"  class="form-control col-md-12 col-xs-12" name="sort" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-2 col-sm-2 col-xs-12"></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="radio" name="rdo" id="" checked=""  value="1"> Public
                                    <input type="radio" name="rdo" id="" value="2"> Private
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Sửa</button>
                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                </div>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection