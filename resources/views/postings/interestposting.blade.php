@extends('pages.master')

@section('title')
    Our Posts
@stop

@section('header')
    {{$activityName}} – {{$location}}
@stop

@section('data')
    {{$activityDescription}}
    @if(isset($contacts) && count($contacts))
        <h2>Contact us:</h2>
        <ul>
            @foreach($contacts as $contact)
                <li>{{$contact}}</li>
            @endforeach
        </ul>
    @else
        <h2>NO CONTACT INFORMATION</h2>
    @endif
@stop