
@extends('layouts.home')


@section('title', 'References-'.$setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords',$setting->keyword)
@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

<div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 ">
                <div class="login-form"><!--login form-->
                    <ul class="breadcrumb">
                        <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                        <li class="active"> References</li>

                    </ul>

                    <div class="section">
                        <div class="container">
                            <div class="row">



                                {!!$setting->references!!}


                            </div>

                        </div>

                    </div>




                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</div>
