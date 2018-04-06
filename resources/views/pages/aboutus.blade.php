<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            About Us
        </div>
        <div class="dark">
            <figure>
                <img class="about" src="/images/bird.jpg" alt="rob">
                <figcaption>Rob is doing what Jason wants him to do.</figcaption>
            </figure>
            <p style="text-align: left; padding-left: 20%; padding-right: 20%; padding-top: 10px;">
                I am currently enjoying this tutorial, and hope to power through it and be complete by tomorrow.
                I know there's alot to learn, but I can, and will do it!  I can sleep when I'm dead.  I really don't want
                to veg around now, and waste my years where I'm not dealing with huge amounts of debt or bills.  Now
                is the time where I need to work, and push hard so I don't need to later in life.  Sure, some breaks from
                coding is good, but it needs to be treated as a reward.  It can so easily be taken away.
            </p>
        </div>


        <div class="links">
            <a href="mailto::admin@discovery.com?subject=discover your interests, help">Email</a>
            <a href="https://twitter.com/discoveryourinterests">Twitter</a>
            <a href="https://developer.apple.com/app-store/">iOS</a>
        </div>
    </div>
</div>
</body>
</html>
