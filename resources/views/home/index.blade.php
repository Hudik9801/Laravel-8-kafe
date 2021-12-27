@php

$setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')



@section('title', $setting->title)

@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)

@section('footerjs')
    <script src="{{asset('assets')}}/js/jquery.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
    <script src="{{asset('assets')}}/js/price-range.js"></script>
    <script src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>
    <script src="{{asset('assets')}}/js/main.js"></script>

@endsection

@section('content')

    @include('home._menu')







@endsection






