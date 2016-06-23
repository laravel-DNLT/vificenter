@extends('layouts.backend')
@section('title','Dashboard')
@section('css')
    <style type="text/css">
        #messages{
            border: 1px solid black;
            height: 300px;
            margin-bottom: 8px;
            overflow: scroll;
            padding: 5px;
        }
    </style>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="container spark-screen">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">Chat Message Module</div>
                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-lg-8" >
                                        <div id="messages" ></div>
                                    </div>
                                    <div class="col-lg-8" >
                                        <form action="sendmessage" method="POST">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                                            <input type="hidden" name="user" value="{{ Auth::user()->name }}" >
                                            <textarea class="form-control msg"></textarea>
                                            <br/>
                                            <input type="button" value="Send" class="btn btn-success send-msg">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--.container-fluid-->
    </div><!--.page-content-->
    <div class="responsive-bootstrap-toolkit"><div class="device-xs visible-xs visible-xs-block"></div><div class="device-sm visible-sm visible-sm-block"></div><div class="device-md visible-md visible-md-block"></div><div class="device-lg visible-lg visible-lg-block"></div></div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.min.js" type="text/javascript"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.6/socket.io.min.js" type="text/javascript"></script>

    <script>
        var socket = io.connect('http://larvifi.app:8890');
        socket.on('message', function (data) {
            data = jQuery.parseJSON(data);
            console.log(data.user);
            $( "#messages" ).append( "<strong>"+data.user+":</strong><p>"+data.message+"</p>" );
        });
        $(".send-msg").click(function(e){
            e.preventDefault();
            var token = $("input[name='_token']").val();
            var user = $("input[name='user']").val();
            var msg = $(".msg").val();
            if(msg != ''){
                $.ajax({
                    type: "POST",
                    url: '{!! URL::to("chat/sendmessage") !!}',
                    dataType: "json",
                    data: {'_token':token,'message':msg,'user':user},
                    success:function(data){
                        console.log(data);
                        $(".msg").val('');
                    }
                });
            }else{
                alert("Please Add Message.");
            }
        })
    </script>
@endsection