
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="@yield('viewport')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Hudayberdi Ashyrov">
    <title>References</title>
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
                        <li class="active"> Değerlendirme ve Yorum</li>

                    </ul>

                    <div class="section">
                        @include('home.message')
                        <div class="container">
                            <div class="row">

<div class="col-md-6">

    <h4 class="text-uppercase">Hizmetimizi beğendiyseniz değerlendirme yapın</h4>

    <form class="review-form" action="{{route('storecomment')}}" method="post">

        @csrf

        <div class="form-group">
            <input class="input" type="text" name="subject" placeholder="Subject"/>

        </div>
        <div class="form-group">
            <input class="input" name="review" placeholder="Your Review"/>

        </div>
        <div class="form-group">
            <div class="input-rating">
                <strong class="text-uppercase">Your Rating</strong>

                    <div class="rating"><!--
        --><input name="rate" id="e5" value="5" type="radio"></a><label for="e5">☆</label><!--
		--><input name="rate" id="e4" value="4" type="radio"></a><label for="e4">☆</label><!--
		--><input name="rate" id="e3" value="3" type="radio"></a><label for="e3">☆</label><!--
		--><input name="rate" id="e2" value="2" type="radio"></a><label for="e2">☆</label><!--
		--><input name="rate" id="e1" value="1" type="radio"></a><label for="e1">☆</label>

                </div>
            </div>
        </div>
     @auth
        <button class="primary-btn">Submit</button>
        @else
        <a href="/login" class="primary-btn">Yorum Yazmak İçin, Lütfen Kayıt Olun!!</a>

        @endauth
    </form>
</div>



    @foreach($comment as $rs)

        <div class="pull-left"  >
            <div class="col-sm-12">

                    <div><a href="#"><i class="fa fa-user"></i>{{$rs->user->name}} </a></div>
                    <div><a href="#"><i class="fa fa-clock-o" class="fa fa-calendar-o"></i> {{$rs->created_at}}</a></div>


                <strong>{{$rs->subject}}</strong>
                <p>{{$rs->review}}</p>

                <div class="review-rating align-bottom"  style="color:black;">
                    @if($rs->rate <= 0)
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    @elseif($rs->rate === 1)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    @elseif($rs->rate === 2)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    @elseif($rs->rate === 3)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    @elseif($rs->rate === 4)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    @elseif($rs->rate >= 5)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    @endif
                </div>




        </div>
    @endforeach







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
