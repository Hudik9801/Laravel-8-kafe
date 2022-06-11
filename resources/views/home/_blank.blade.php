@extends('layouts.home')
@extends('layouts.home')


@section('title', $setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords',$setting->keyword)

@section('content')
<div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 ">
                <div class="login-form"><!--login form-->
                    <ul class="breadcrumb">
                        <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                        <li><a  href="#"><i class="fa fa-home"  ></i>User Profile</a></li>

                    </ul>

                    <div class="section">
                        <div class="container">
                            <div class="row">


                                <div id="main" class="col-md-10">
                                    İçerik alan
                                </div>

                            </div>

                        </div>

                    </div>




                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</div>
@endsection
