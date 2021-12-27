@extends('layouts.home')


@section('title', $data->title)
@section('description'){{$data->description}} @endsection
@section('keywords',$data->keyword)

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

                    <div class="section">
                        <div class="container">
                            <div class="row">


                                <div id="main" class="col-md-10">
                                    <div class="product-details"><!--product-details-->
                                        <div class="col-sm-5">

                                            <div class="view-product">
                                                <img src="{{Storage::url($data->image)}}" style="height: 400px" alt="" />
                                            </div>

                                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                            @foreach($datalist as $rs)
                                                <div class="carousel-inner">

                                                    <div class="item active">

                                                        <img src="{{Storage::url($rs->image)}}" style="height: 100px" alt=""></a>
                                                    </div>

                                                </div>
                                            @endforeach

                                                <!-- Controls -->

                                            </div>

                                        </div>
                                        <div class="col-sm-7">
                                            <div class="product-information"><!--/product-information-->

                                                <h2>{{$data->title}}</h2>


									<span>{{$data->price}}</span>
                                                <div>
                                                    @php
                                                    $avgrev=\App\Http\Controllers\HomeController::avgreview($data->id);
                                                    $countreview=\App\Http\Controllers\HomeController::countreview($data->id);
                                                    @endphp
                                                    <div class="product-rating">
                                                         <i class="fa fa-star @if($avgrev<1) -o empty @endif"></i>
                                                         <i class="fa fa-star @if($avgrev<2) -o empty @endif"></i>
                                                         <i class="fa fa-star @if($avgrev<3) -o empty @endif"></i>
                                                         <i class="fa fa-star @if($avgrev<4) -o empty @endif"></i>
                                                         <i class="fa fa-star @if($avgrev<5) -o empty @endif"></i>

                                                    </div>
                                                    <a href="#tab2">{{$countreview}} Rewview(s) {{$avgrev}}/Add Review</a>
                                            </div>



									<input type="text" value="3" />
									<a href="{{route('addtocard',['id'=>$data->id])}}"  type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</a>
								</span>
                                                <p><b>Keywords:</b>{{$data->keywords}}</p>
                                                <p><b>Condition:</b> New</p>
                                                <p><b>Brand:</b> E-SHOPPER</p>

                                            </div>
                                            <div class="col-md-6">
                                                <h4>Write Your Review</h4>
                                                <p>Your Email adress will not published</p>
                                                @livewire('review',['id'=>$data->id])

                                            </div>




                                        </div>



                                    </div>
                                    <!--/product-details-->


                                    @foreach($reviews as $rs)
                                        <div class="single-review">
                                            <div class="review-heading">
                                                <div><a href="#"><i class="fa fa-user-o"></i> {{$rs->user->name}}</a> </div>
                                                <div><a href="#"><i class="fa fa-clock-o"></i> {{$rs->created_ad}}</a> </div>
                                                <div class="review-rating pull-right">
                                                    <i class="fa fa-star @if ($rs->rate<1) -o empty @endif"></i>
                                                    <i class="fa fa-star @if ($rs->rate<2) -o empty @endif"></i>
                                                    <i class="fa fa-star @if ($rs->rate<3) -o empty @endif"></i>
                                                    <i class="fa fa-star @if ($rs->rate<4) -o empty @endif"></i>
                                                    <i class="fa fa-star @if ($rs->rate<5) -o empty @endif"></i>>

                                                </div>

                                            </div>
                                            <div class="review-body">
                                                <strong>{{$rs->subject}}</strong>
                                                <p>{{$rs->review}}</p>
                                            </div>
                                        </div>

                                    @endforeach




                                </div>

                            </div>

                        </div>

                    </div>






                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</div>

