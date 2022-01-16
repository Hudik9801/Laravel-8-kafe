
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="@yield('viewport')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Hudayberdi Ashyrov">
    <title>{{$data->title}}</title>
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
                <a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a>
                @foreach($datalist as $rs)
                    <div class="login-form"><!--login form-->
                        <ul class="breadcrumb">

                            <li><a  href=""><i class="fa fa-home"  ></i>{{$rs->title}}</a></li>

                        </ul>

                        <div class="section">
                            <div class="container">
                                <div class="row">



                                    <div class="product-details"><!--product-details-->
                                        <div class="col-sm-5">
                                            <div class="view-product">
                                                <img src="{{Storage::url($rs->image)}}" alt="" />

                                            </div>
                                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                                <!-- Wrapper for slides -->

                                                <!-- Controls -->
                                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a class="right item-control" href="#similar-product" data-slide="next">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-sm-7">
                                            <div class="product-information"><!--/product-information-->
                                                <img src="{{asset('assets')}}/images/product-details/new.jpg" class="newarrival" alt="" />

                                                <div class="col-sm-6">
                                                    <h1>{{$rs->title}}</h1>
                                                    <h2>{{$rs->price}}</h2>

                                                    <a href="{{route('product',['id'=>$rs->id,'slug',$rs->slug])}}"  class="btn btn-default get">Sipariş ver</a>
                                                </div>




								</span>


                                            </div><!--/product-information-->
                                        </div>
                                    </div><!--/product-details-->





                                </div>

                            </div>

                        </div>




                    </div><!--/sign up form-->
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>


