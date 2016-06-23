<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - Premium Bootstrap 4 Admin Dashboard Template</title>

    <link href="img/favicon.144x144.html" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="img/favicon.114x114.html" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="img/favicon.72x72.html" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="img/favicon.57x57.html" rel="apple-touch-icon" type="image/png">
    <link href="img/favicon.html" rel="icon" type="image/png">
    <link href="img/favicon-2.html" rel="shortcut icon">
    @yield('css')
    <!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{admin('css/lib/font-awesome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{admin('css/main.css')}}">
</head>
<body class="with-side-menu control-panel control-panel-compact">

@include('includes.backend.header')
@yield('content')
@include('includes.backend.footer')
<script src="{{admin('js/lib/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{admin('js/lib/charts/loader.js')}}"></script>
@yield('script')
<script src="{{admin('js/lib/tether/tether.min.js')}}"></script>
<script src="{{admin('js/lib/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{admin('js/plugins.js')}}"></script>
</body>

</html>