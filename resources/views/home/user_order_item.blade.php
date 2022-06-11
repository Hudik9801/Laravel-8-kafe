
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="@yield('viewport')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Hudayberdi Ashyrov">
    <title>Order Item</title>
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
                    <li><a  href="#"><i class="fa fa-home"  ></i>Order İtem</a></li>
                    @include('home.usermenu')



                </ul>
            </div>


            <div class="card col-md-9">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td>Image</td>

                        <td >Product</td>
                        <td >Price</td>
                        <td >Total</td>



                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $total=0;
                    @endphp

                    <div class="card-body">
                        @foreach ($datalist as $rs)

                            <tr>
                                <td>
                                    @if($rs->product->image)
                                        <img src="{{Storage::url($rs->product->image)}}" height="30" alt="">
                                    @endif
                                </td>


                                <td><a href="{{route('product',['id'=>$rs->id])}}">{{ $rs->product->title }}</a>
                                </td>
                                <td>{{ $rs->product->price }}</td>

                                <td>{{ $rs->amount}}</td>



                            </tr>




                    @endforeach

                            <table class="table table-condensed total-result">

                                <tr>
                                    <td>Toplam Tutar</td>
                                    <td>${{$rs->order->total}}</td>
                                </tr>

                            </table>



                    </tbody>

                </table>
                <form action="{{route('myreviews')}}" method="get">
                    @csrf
                    <div class="pull-left">
                        <button class="btn btn-primary">Ödeme Yapmak İçin Tıklayınız</button>
                    </div>

                </form>




            </div>
        </div>

    </div>

</div>
</body>
</html>










