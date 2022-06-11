
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
                <div class="login-form"><!--login form-->
                    <ul class="breadcrumb">


                        <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                        <li>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->category->title)}}</li>
                        <li class="active" >{{$data->title}}</li>


                    </ul>
                    @include('home.message')

                    <ul class="breadcrumb">
                    <a href="{{route('user_shopcart')}}"><i class="fa fa-shopping-cart"></i>Sepete Git</a>
                    </ul>


                    <div class="section">
                        <div class="container">
                            <div class="row">




                                <div class="product-details"><!--product-details-->

                                    <div class="col-sm-5">


                                        <div class="view-product">
                                            <img src="{{Storage::url($data->image)}}" style="height: 400px" alt="" />
                                        </div>


                                        <div id="similar-product" class="carousel slide" data-ride="carousel">




                                            <div class="carousel-inner">


                                                <div class="item active">
                                                    @foreach($datalist as $rs)

                                                        <img src="{{Storage::url($rs->image)}}" href="{{$rs->image}}" style="height: 50px" alt=""></a>
                                                    @endforeach
                                                </div>



                                            </div>



                                            <!-- Controls -->

                                        </div>

                                    </div>
                                    <div class="col-sm-7">
                                        <div class="product-information"><!--/product-information-->

                                            <h2>{{$data->title}}</h2>
                                            <h3>Fiyat</h3>
                                            <h4>{{$data->price}}₺</h4>
                                            <form action="{{route('user_shopcart_add',['id'=>$data->id])}}" method="post" >
                                                @csrf
                                                <div class="qty-input">
                                                    <span class="text-uppercase" >Quantity:</span>
                                                    <input class="input" name="quantity" type="number" value="1" max="{{$data->quantity}}" >
                                                    <button type="submit" class="btn btn-fefault cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        Sepete Ekle
                                                    </button>






                                                </div>
                                            </form>

                                        </div>

                                    </div>


                                    <div class="category-tab shop-details-tab"><!--category-tab-->
                                        <div class="col-sm-6">
                                            <ul class="nav nav-tabs">
                                                <li ><a href="#descriprion" data-toggle="tab">Ürün hakkıbda</a></li>
                                            </ul>
                                        </div>

                                        <div class="tab-content">
                                            <div class="tab-pane fade" id="descriprion" >


                                                <div class="col-sm-3">
                                                    @foreach($reviews as $rs)
                                                        <ul>
                                                            <li><a href=""><i class="fa fa-user"></i>{{$rs->user->name}}</a></li>

                                                            <li><a href=""><i class="fa fa-calendar-o"></i>{{$rs->created_at}}</a></li>
                                                        </ul>


                                                    @endforeach




                                                </div>


                                            </div>

                                            <div class="tab-pane fade active in" id="reviews" >

                                                <div class="col-sm-12">
                                                    <p>{!! $data->detail !!}</p>


                                                </div>

                                            </div>
                                        </div>
                                    </div>








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

