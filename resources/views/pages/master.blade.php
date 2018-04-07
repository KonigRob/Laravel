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
        @yield('css')
    </style>
</head>
<body class="container">
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
        <div class="links">
            <a href="/">Home</a>
            <a href="/post/1">Our Activities Postings</a>
            <a href="/profile">Activity Profile</a>
            <a href="/contact">contact us</a>
            <a href="/about">about</a>

        </div>
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