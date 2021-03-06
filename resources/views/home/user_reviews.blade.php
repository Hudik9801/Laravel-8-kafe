
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="@yield('viewport')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Hudayberdi Ashyrov">
    <title>Ödeme Yapma</title>
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



<div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="card col-md-3">
                <ul class="breadcrumb">
                    <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                    <li><a  href="#"><i class="fa fa-home"  ></i>Ödeme Yapma</a></li>
                    @include('home.usermenu')





                </ul>
            </div>


            <div class="card col-md-9">
                <div class="card-body">
                    <div class="table-responsive">
                        @if(session('status'))
                            <div class="alert alert-success">{{session('status')}}</div>
                        @endif

                        <form action="{{route('user_order_place')}}" method="post">
                            @csrf

                            <div class="section-title text-center" style="margin-top:40px; " >
                                <h4>Lütfen Ödeme Şeklini Şeçiniz</h4>

                            </div>

                            <div class="payment-method">
                                <div class="input-radio">
                                    <input type="radio" name="payment" id="payment-1" value="cash">

                                    <label for="payment-1">
                                        <span></span>
                                        Nakit Ödeme
                                    </label>





                            </div>
                            <div class="input-radio">
                                <input type="radio" name="payment" id="payment-2" value="Bcash">


                                <label for="payment-2">
                                    <span></span>
                                    Kredi Kart ile Ödeme
                                </label>


                            </div>

                                <div class="input-radio">
                                    <input type="radio" name="payment" id="payment-2" value="Ocash">


                                    <label for="payment-2">
                                        <span></span>

                                    </label>
                                    <a href="{{route('user_online_odeme')}} " methods="post" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    Online Ödeme
                                    </a>



                                </div>





                                <input type="submit" class="primary-btn order-submit" value="Ödeme Yap" style="float: right">
                            </div>
                        </form>




                    </div>

                </div>

            </div>

        </div>




    </div><!--/sign up form-->
</div>

</body>
</html>
