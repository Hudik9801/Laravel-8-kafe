@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
<header id="header"><!--header-->
<!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="{{route('home')}}"><img src="{{asset('assets/admin/img')}}/logo.jpg" height="130"></a>
                    </div>
                    <div class="btn-group pull-right clearfix">
                        @include('home.message')

                    </div>
                </div>
                @auth
                    <div class="col-md-6 clearfix">
                        <div class="shop-menu clearfix pull-left">
                            <ul class="nav navbar-nav">
                                <li><a href="{{route('admin_login')}}"><i class="fa fa-user"></i> {{Auth::user()->name}}<i></i></a></li>
                                @endauth
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-lock"></i> Hesabım</a></li>
                                <li><a href="{{route('user_orders')}}"><i class="fa fa-first-order"></i>Siparişlerim</a></li>
                                <li><a href="{{route('user_shopcart')}}"><i class="fa fa-shopping-cart"></i>Sepetteki Ürünler</a>
                                    <span class="qty">{{\App\Http\Controllers\ShopcartController::countshopcart()}}:Ürün var</span></li>
                                <li><a href="{{route('references')}}"><i class="fa fa-star"></i>Değerlendirme</a>
                                <li><a href="{{route('myreviews')}}"><i></i> Ödeme Yap</a></li>
                                @auth
                                <li><a href="{{route('logout')}}"><i class="fa fa-lock"></i> Çıkış yap</a></li>
                                    @endauth
                                @guest
                                    <li><a href="{{route('login')}}"><i class="fa fa-lock"></i> Login</a></li>

                                @endguest

                                @guest
                                @if(Route::has('register'))
                                    <li> <a href="{{route('register')}}"><i class="fa fa-registered"></i>Register</a></li>
                                @endif
                                @endguest


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
                    @php
                        $parentCategories= \App\Http\Controllers\HomeController::categoryList()

                    @endphp
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route('home')}}" class="active">Home</a></li>
                            <li class="dropdown"><a href="{{route('home')}}">Menü Kategorileri<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    @foreach($parentCategories as $rs)
                                    <li><a> {{$rs->title}}</a>
                                        <div class="panel-body">
                                            @if(count($rs->children))
                                                @include('home.categorytree',['children'=>$rs->children])
                                            @endif
                                        </div>
                                    </li>

                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{route('aboutus')}}">Hakkımızda</a>
                            </li>
                            <li class="dropdown"><a href="{{route('contact')}}">İletişim</a>
                            </li>
                            <!--<i class="fa fa-angle-down"></i>-->

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
