
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="@yield('viewport')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Hudayberdi Ashyrov">
    <title>Order Products</title>
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
            <div class="card col-sm-3">
                <ul class="breadcrumb">
                    <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                    <li><a  href="#"><i class="fa fa-home"  ></i>User Products</a></li>
                    @include('home.usermenu')


                </ul>
            </div>



            <form action="{{route('user_order_store')}}" method="post">
                @csrf

                <div class="card col-sm-9">
                    <div class="section-title">
                        <p>Table No</p>
                    </div>


                    <div class="form-one">

                        <input class="form-control" type="text"  name="tableno"  value="" placeholder="Masa No" required>


                    </div>
                </div>



                <div class="card col-sm-9">
                    <div class="shopper-info">
                        <p>Toplam Fiyat:${{$total}}</p>


                        <div class="input-checkbox">
                            <input type="hidden" name="total" value="{{$total}}">




                        </div>
                        <div class="pull-right">
                            <button class="btn btn-primary">Sipariş Ver</button>
                        </div>

                    </div>
                </div>



                        </form>








        </div>






        </form>




    </div>
    </div>
</div>
</body>
</html>





