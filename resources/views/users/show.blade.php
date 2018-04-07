@extends('pages.master')

@section('title')
    {{$user->firstname}} {{$user->lastname}}
@stop

@section('header')
    Discover your Interests: {{$user->firstname}} {{$user->lastname}}
@stop

@section('data')
    <div>
        <table name="usertable">
            @foreach($user->toArray() as $key=>$value)
                <tr>
                    <td>
                        {{$key}}
                    </td>
                    <td>
                        {{$value}}
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@stop

@section('footer')
    <hr>
    Thank you for using DiscoveryourInterests
@stop