@extends('layout')
@section('page-title','Main page')
@section('content')
    <a href="{{route('propertyContainer')}}">Property container</a>
    <a href="{{route('delegation')}}">Delegation</a>
    <a href="{{route('eventChanel')}}">Event chanel</a>
    <a href="{{route('abstractFabric')}}">Abstract fabric</a>
    <a href="{{route('abstractMethod')}}">Abstract method</a>
{{--    <a href="{{route('simpleFabric')}}">Simple fabric</a>--}}
@endsection
