@extends('pages.master')

@section('title')
    SwipeRightToApply is about you, not about us
@stop

@section('header')
    About Us
@stop

@section('data')
    <div class="dark">
        <figure>
            <img class="about" src="/images/bird.jpg" alt="Rob" style='width:25%;' border="0">
            <figcaption>Rob is doing what Jason wants him to do.</figcaption>
        </figure>
        <p style="font-weight:800; color:black;text-align:left; padding-left:20%; padding-right:20%; padding-top:10px">
            I am currently enjoying this tutorial, and hope to power through it and be complete by tomorrow.
            I know there's alot to learn, but I can, and will do it!  I can sleep when I'm dead.  I really don't want
            to veg around now, and waste my years where I'm not dealing with huge amounts of debt or bills.  Now
            is the time where I need to work, and push hard so I don't need to later in life.  Sure, some breaks from
            coding is good, but it needs to be treated as a reward.  It can so easily be taken away.
        </p>
    </div>
@stop

        {{--<div class="links">--}}
            {{--<a href="mailto::admin@discovery.com?subject=discover your interests, help">Email</a>--}}
            {{--<a href="https://twitter.com/discoveryourinterests">Twitter</a>--}}
            {{--<a href="https://developer.apple.com/app-store/">iOS</a>--}}
        {{--</div>--}}

