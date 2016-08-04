@extends('layouts.backend')
@section('title','Dashboard')
@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="container-fluid">
                <div class="row page-title-row">
                    <div class="col-md-6">
                        <h3>Product <small>» Listing</small></h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="/admin/product/create" class="btn btn-success btn-md">
                            <i class="fa fa-plus-circle"></i> New Product
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">

                        @include('includes.backend.partials.errors')
                        @include('includes.backend.partials.success')

                        <table id="posts-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Category Parent</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($product as $item)
                                <tr>
                                    <td><img src="{{ asset('uploads/wine/image/'.$item->imagePath) }}" alt="" style="height: 100px;width: 100px"></td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <?php
                                        $cate = DB::table('cates')->where('id',$item["cate_id"])->first(); ?>
                                        @if(!empty($cate->title))
                                            {{$cate->title}}
                                        @endif

                                    </td>
                                    <td>
                                        <a href="/admin/product/{{ $item->id }}/edit"
                                           class="btn btn-xs btn-info">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        {{--<a href="/blog/{{ $post->slug }}"--}}
                                           {{--class="btn btn-xs btn-warning">--}}
                                            {{--<i class="fa fa-eye"></i> View--}}
                                        {{--</a>--}}
                                    </td>
                                </tr>
                            @endforeach
                                {{--<div class="pagination">--}}
                                    {{--@if($paginate->currentPage() !=1)--}}
                                        {{--<a href="{{$paginate->url($paginate->currentPage() - 1) }}" class="prev page-numbers">« Trước</a>--}}
                                    {{--@endif--}}
                                    {{--@for($i = 1 ; $i <= $paginate->lastPage() ; $i = $i + 1)--}}
                                        {{--<a href="{{$paginate->url($i) }}" >{{$i}}</a>--}}
                                    {{--@endfor--}}
                                    {{--@if($paginate->currentPage() != $paginate->lastPage())--}}
                                        {{--<a href="{{$paginate->url($paginate->currentPage() + 1) }}" class="next page-numbers">Sau »</a>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>

    </script>
@endsection