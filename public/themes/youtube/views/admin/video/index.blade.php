@extends('layouts.backend')
@section('content')

    <div class="right_col" role="main">
        <div class="x_panel">
            <div class="x_title">
                <h2>Basic Tables <small>basic table subtitle</small></h2>
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

                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Video</th>
                            <th>URL</th>
                            <th>Hiện Trang</th>
                            <th>sort</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                            <th><button type="submit" class="btn btn-success" value="">Sort</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($video as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->title}}</td>
                            <td>https://www.youtube.com/watch?v={{$item->Url}}</td>
                            <td>{{$item->public}}</td>
                            <td>{{$item->sort}}</td>
                            <td><a href="{{ route('admin.video.edit', $item->id) }}"><i class="glyphicon glyphicon-edit"></i></a></td>
                            <td><a href="video/xoa/{{$item->id}}"><i class="glyphicon glyphicon-remove" ></i></a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection