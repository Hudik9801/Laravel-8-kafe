
@extends('layouts.home')


@section('title', 'Contact-'.$setting->title)
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
                        <li class="active"> Contact</li>

                    </ul>

                    <div class="section">
                        <div class="container">
                            <div class="row">

                       <div claa="col-md-6">
                           <h3 class="section-title">İletişim Bilgiler</h3>

                           {!!$setting->contact!!}
                       </div>


                                <div claa="col-md-6">
                                    <h3 class="section-title">İletişim Formu</h3>
                                    @include('home.message')
                                    <div class="shopper-informations">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="shopper-info">

                                                    <form id="checkout-form" class="clearfix" action="{{route('sendmessage')}}" method="post" >
                                                        @csrf
                                                        <div class="form-group">
                                                        <input class="input" name="name" type="text" placeholder=" Name&Surname">
                                                        </div>
                                                        <input  class="input" name="phone" type="text" placeholder="Phone Number">
                                                        <div class="form-group">
                                                        <input class="input" name="email" type="text" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                        <input class="input" name="subject" type="text" placeholder="Subject ">
                                                        </div>


                                                <div class="form-group">
                                                    <textarea class="text" name="message" rows="5" placeholder="Your message"></textarea>
                                                </div>
                                                        <div class="form-group">
                                                            <textarea class="input" name="ip"  placeholder="ip"></textarea>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary" href="">Send Message</button>
                                                    </form>


                                                </div>
                                            </div>

                                        </div>
                                    </div>





                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





