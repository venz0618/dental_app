
@extends('home.layout.index')
@section('title', 'Home ')
@section('home_content')


@include('home.carousel')
@include('home.banner')
@include('home.about')
@include('home.appointment')
@include('home.service')

@endsection