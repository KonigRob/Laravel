<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Discover your Activity')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style>

        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        @yield('css')
    </style>
</head>
<body class="container">
<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li class="{{Request::is('post/*')?'active':''}}"><a href="/post/1">Our Activites</a></li>
        <li><a href="/profile">Our Profile</a></li>
    </ul>
    {{--<li class="dropdown">--}}
        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"--}}
           {{--aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
        {{--<ul class="dropdown-menu">--}}
            {{--<li><a href="#">Action</a></li>--}}
            {{--<li><a href="#">Action</a></li>--}}
            {{--<li><a href="#">Action</a></li>--}}
            {{--<li role="separator" class="divider"></li>--}}
            {{--<li class="dropdown-header">Nav header</li>--}}
            {{--<li><a href="#">Action</a></li>--}}
            {{--<li><a href="#">Action</a></li>--}}
        {{--</ul>--}}
    {{--</li>--}}
</div>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">

        <div class="title m-b-md">
            @yield('header')
        </div>
        <div style="font-weight:800;">Discover your Activity</div>

        <div style="color:black;font-weight:800; margin:5%;">
            @yield('data')
        </div>


<!--            <a href="/">Home</a>
            <a href="/post/1">Our Activities Postings</a>
            <a href="/profile">Activity Profile</a>
            <a href="/contact">contact us</a>
            <a href="/about">about</a>
-->


    </div>
</div>
@yield('footer')
{{--<script>--}}
	{{--(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
		{{--(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
		{{--m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
	{{--})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');--}}
	{{--ga('create', 'UA-90732450-1', 'auto');--}}
	{{--ga('send', 'pageview');--}}
{{--</script>--}}
</body>
</html>