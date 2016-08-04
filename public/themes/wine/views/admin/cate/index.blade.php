@extends('layouts.backend')
@section('title','Dashboard')
@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="container-fluid">
                <div class="row page-title-row">
                    <div class="col-md-6">
                        <h3>Category <small>» Listing</small></h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="/admin/cate/create" class="btn btn-success btn-md">
                            <i class="fa fa-plus-circle"></i> New Category
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
                                <th>Title</th>
                                <th>Alias</th>
                                <th>Parent Category</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($cate as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->alias }}</td>
                                    <td>
                                        @if ($item["parent_id"] == 0)
                                            {!! "Don't Have Any Category Parent" !!}
                                        @else
                                            <?php
                                            $parent = DB::table('cates')->where('id',$item["parent_id"])->first();
                                            if ($parent!=null) {
                                                echo $parent->title;
                                           }
                                            ?>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/admin/cate/{{ $item->id }}/edit"
                                           class="btn btn-xs btn-info">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        {{--<a href="/cate/{{ $item->alias }}"--}}
                                           {{--class="btn btn-xs btn-warning">--}}
                                            {{--<i class="fa fa-eye"></i> View--}}
                                        {{--</a>--}}
                                    </td>
                                </tr>
                            @endforeach
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