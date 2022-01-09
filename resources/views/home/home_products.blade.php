@php
    $slider = \App\Models\Product::select('id','title','price','image')->limit(3)->get();
$daily =  \App\Models\Product::select('id','title','price','image')->limit(3)->get();
@endphp


<div class="col-sm-9">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Günün yemekleri</h2>
    </div>
</div>





@php
    $i=0;
@endphp
@foreach($slider as $rs)
    @php
        $i+=1;
    @endphp
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">

                <div class="item @if($i==1)active @endif">
                    <img src="{{Storage::url($rs->image)}} " style="height:200px" style="width: 200px" alt="" />
                    <h2>{{$rs->price}}</h2>
                    <p>{{$rs->title}}</p>




                </div>
                <div>
                    @php
                        $avgrev=\App\Http\Controllers\HomeController::avgreview($rs->id);
                        $countreview=\App\Http\Controllers\HomeController::countreview($rs->id);
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


                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>{{$rs->price}}</h2>
                        <p>{{$rs->title}}</p>
                        <a href="{{route('product',['id'=>$rs->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Quick Review</a>
                        <div>
                            <form action="{{route('user_shopcart_add',['id'=>$rs->id])}}" method="post" >
                                @csrf
                                <input class="input" name="quantity" type="hidden" value="1" >
                                <button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to card</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </div>
    @endforeach


    </div>



    <div class="col-sm-9">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Restoranın lezzetleri</h2>
        </div>
    </div>


    @php
        $i=0;
    @endphp
    @foreach($daily as $rs)
        @php
            $i+=1;
        @endphp
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">

                    <div class="item @if($i==1)active @endif">
                        <img src="{{Storage::url($rs->image)}} " style="height:400px" style="width: 400px" alt="" />

                        <h2>{{$rs->price}}</h2>
                        <p>{{$rs->title}}</p>

                    </div>
                    <div>
                        @php
                            $avgrev=\App\Http\Controllers\HomeController::avgreview($rs->id);
                            $countreview=\App\Http\Controllers\HomeController::countreview($rs->id);
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


                    <div class="product-overlay">
                        <div class="overlay-content">

                            <a href="{{route('product',['id'=>$rs->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Quick Review</a>
                            <div>
                                <form action="{{route('user_shopcart_add',['id'=>$rs->id])}}" method="post" >
                                    @csrf
                                    <input class="input" name="quantity" type="hidden" value="1" >
                                    <button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to card</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        @endforeach


        </div>
