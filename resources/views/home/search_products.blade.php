@extends('layouts.home')


@section('title', $search->title.'Product List')



 <div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 ">
                <div class="login-form"><!--login form-->
                    <ul class="breadcrumb">
                        <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                        <li><a  href=""><i class="fa fa-home"  ></i>{{$search}}.Product List</a></li>

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
                                            <h2>{{$rs->title}}</h2>
                                            <p>Web ID: 1089772</p>
                                            <img src="{{asset('assets')}}/images/product-details/rating.png" alt="" />
                                            <span>
									<span>{{$rs->price}}</span>
									<label>Quantity:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
                                            <p><b>Availability:</b> In Stock</p>
                                            <p><b>Condition:</b> New</p>
                                            <p><b>Brand:</b> E-SHOPPER</p>
                                            <a href=""><img src="{{asset('assets')}}/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                                        </div><!--/product-information-->
                                    </div>
                                </div><!--/product-details-->





                            </div>

                        </div>

                    </div>




                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</div>
