
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="@yield('viewport')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Hudayberdi Ashyrov">
    <title>Contact</title>
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/css/prettyPhoto.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/css/price-range.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/main.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/css/responsive.css" rel="stylesheet"/>
<!--[if lt IE 9]>
    <script src="{{asset('assets')}}/js/html5shiv.js"></script>
    <script src="{{asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets')}}/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets')}}/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets')}}/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets')}}/images/ico/apple-touch-icon-57-precomposed.png">
<body>



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


</body>
</html>



