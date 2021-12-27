@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                           @if($setting->facebook!=null) <li><a href="{{$setting->facebook}}" target="blank"><i class="fa fa-facebook"></i></a></li>@endif
                               @if($setting->twitter!=null) <li><a href="{{$setting->twitter}}" target="blank"><i class="fa fa-twitter"></i></a></li>@endif

                               @if($setting->youtube!=null) <li><a href="{{$setting->youtube}}" target="blank"><i class="fa fa-youtube"></i></a></li>@endif
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="{{route('home')}}"><img src=" {{asset('assets')}}/images/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right clearfix">

                    </div>
                </div>
                @auth
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('admin_login')}}"><i class="fa fa-user"></i> {{Auth::user()->name}}</a></li>
                            @endauth

                            <li><a href="{{route('myprofile')}}"><i class="fa fa-lock"></i> My Account</a></li>
                            <li><a href="{{route('user_products')}}"><i class="fa fa-pro"></i>My Product</a></li>
                            <li><a href="{{route('myreviews')}}"><i class="fa fa-receipt"></i> My Review</a></li>
                            <li><a href="cart.html"><i class="fa fa-first-order"></i>Orders</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i>My Cartshop</a></li>
                            <li><a href="{{route('logout')}}"><i class="fa fa-lock"></i> Logout</a></li>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route('home')}}" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Campains<i class="fa fa-angle-down"></i></a>
                            </li>
                            <li class="dropdown"><a href="{{route('home')}}">New Products<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{route('aboutus')}}">Aboutus <i class="fa fa-angle-down"></i></a>
                            </li>
                            <li class="dropdown"><a href="{{route('references')}}">References<i class="fa fa-angle-down"></i></a>
                            </li>

                            <li class="dropdown"><a href="{{route('faq')}}">Faq<i class="fa fa-angle-down"></i></a>
                            </li>
                            <li class="dropdown"><a href="{{route('contact')}}">Contact<i class="fa fa-angle-down"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="header-search">
                    <form action="{{route('getproduct')}}" method="post">   <!---aramaaaa--->
                        @csrf
                        @livewire('search')
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                    @section('footerjs')
                    @livewireScripts
                    @endsection



                </div>


            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
