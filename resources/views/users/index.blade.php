@extends('pages.master')

@section('title')
    Users
@stop

@section('header')
    Discover your Interests
@stop

@section('data')
    <div>
        @foreach($users as $user)

            <h2><a href="{{route('showuser', [$user->id])}}">{{$user->firstname}} {{$user->lastname}}</a></h2>

        @endforeach
    </div>
@stop

@section('footer')
    <hr>
    Thank you for using DiscoveryourInterests
    @stop