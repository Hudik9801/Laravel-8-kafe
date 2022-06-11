@php
$slider= \App\Models\Product::limit(4)->get();
@endphp
<div class="container custom-product">
    <div class="row">
        <div class="col-sm-12">



            <div id="slider-carousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#slider-carousel" data-slide-to="1"></li>
                    <li data-target="#slider-carousel" data-slide-to="2" ></li>


                </ol>

                <div class="carousel-inner">

                        <div class="item {{$it['id']==1?'active':''}}">
                            <div class="col-sm-6">
                                <h1>{{$item->title}}</h1>
                                <h2>{{$item->price}}₺</h2>

                                <a href="{{route('product',['id'=>$item->id,'slug',$item->slug])}}"  class="btn btn-default get">Tadina Bak</a>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{Storage::url($item->image)}}" class="girl img-responsive" alt="" />

                            </div>
                        </div>

                    @php

                    @endphp




                </div>

                <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>

            </div>

        </div>
    </div>
</div>
