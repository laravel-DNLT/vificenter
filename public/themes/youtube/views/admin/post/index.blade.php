@extends('layouts.backend')
@section('title','Dashboard')
@section('content')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh Sách Danh Mục</h2>
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
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên Danh Mục</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td><a href="danhmuc/xoa/"><i class="glyphicon glyphicon-remove" ></i></a></td>
                                    <td><a href=""><i class="glyphicon glyphicon-edit"></i></a></td>
                                </tr>

                            </tbody>
                        </table>
                        <a href="danhmuc/them"><button type="submit" class="btn btn-success">Thêm Danh Mục</button></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection