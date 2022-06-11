<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="@yield('viewport')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Hudayberdi Ashyrov">
    <title>Onlıne Ödeme</title>
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
                <div class="col-sm-4 ">
                    <div class="login-form"><!--login form-->


                        <div class="section">
                            <div class="container">
                                <div class="row">


                                    <div class="form-one">
                                        @if(session('status'))
                                            <div class="alert alert-success">{{session('status')}}</div>
                                        @endif
                                        <form action="{{route('user_satin_al')}}" method="post">
                                            @csrf

                                        <h4>Kart Bilgilerinizi Giriniz</h4>


                                        <input class="form-control" type="text"  name="cardname"  value="" placeholder="Name&Surname*" required>

                                        <input class="form-control" type="text"  name="cardnumber"  value="" placeholder="Card Number*" required>

                                        <input class="form-control" type="text"  name="dates"  value="" placeholder="mm/yy*" required>

                                        <input class="form-control" type="text"  name="key"  value="" placeholder="Secret Number*" required>


                                            <div class="pull-right">
                                                <button class="btn btn-primary">Kaydet</button>
                                            </div>

                                        </form>
                                    </div>


                                </div>

                            </div>

                        </div>




                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </div>
</body>
</html>


