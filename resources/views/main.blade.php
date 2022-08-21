@extends('layout')
@section('page-title','Main page')
@section('content')
    <a href="{{route('propertyContainer')}}">Property container</a>
    <a href="{{route('delegation')}}">Delegation</a>
    <a href="{{route('eventChanel')}}">Event chanel</a>
@endsection
