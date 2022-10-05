@extends('layout')
@section('page-title','Main page')
@section('content')
    <a href="{{route('propertyContainer')}}">Property container</a>
    <a href="{{route('delegation')}}">Delegation</a>
    <a href="{{route('eventChanel')}}">Event chanel</a>
    <a href="{{route('abstractFabric')}}">Abstract fabric</a>
    <a href="{{route('abstractMethod')}}">Abstract method</a>
    <a href="{{route('simpleFabric')}}">Simple fabric</a>
    <a href="{{route('staticFabric')}}">Static fabric</a>
    <a href="{{route('singleton')}}">Singleton</a>
    <a href="{{route('multiton')}}">Multiton</a>
    <a href="{{route('builder')}}">Builder</a>
    <a href="{{route('lazyLoad')}}">Lazy load</a>
@endsection
