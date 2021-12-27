@php
      $slider = \App\Models\Product::select('id','title','price','image')->limit(4)->get();
$daily =  \App\Models\Product::select('id','title','price','image')->limit(6)->get();
@endphp


<div class="col-md-9 col-sm-6 col-xs-6 ">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Günün yemekleri</h2>

        @php
            $i=0;
        @endphp
        @foreach($slider as $rs)
            @php
                $i+=1;
            @endphp
        <div class="col-sm-pull-4">
            <div class="product-image-wrapper">
                <div class="single-products">

                    <div class="item @if($i==1)active @endif">
                        <img src="{{Storage::url($rs->image)}} " style="height:200px" alt="" />
                        <h2>{{$rs->price}}</h2>
                        <p>{{$rs->title}}</p>
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



                        <a href="{{route('addtocard',['id'=>$rs->id])}}"  type="button" ><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>{{$rs->price}}</h2>
                            <p>{{$rs->title}}</p>
                            <a href="{{route('addtocard',['id'=>$rs->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        @endforeach



    </div><!--features_items-->

    <div class="col-md-9 col-sm-6 col-xs-6 ">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Restoranın lezzetleri</h2>

            @php
                $i=0;
            @endphp
            @foreach($daily as $rs)
                @php
                    $i+=1;
                @endphp
                <div class="col-sm-pull-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">

                            <div class="item @if($i==1)active @endif">
                                <img src="{{Storage::url($rs->image)}} " style="height:200px" alt="" />

                                <h2>{{$rs->price}}</h2>
                                <p>{{$rs->title}}</p>

                                <a href="{{route('addtocard',['id'=>$rs->id])}}"  type="button" ><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
                                    <h2>{{$rs->title}}</h2>

                                    <p>{{$rs->price}}</p>


                                    <a href="{{route('addtocard',['id'=>$rs->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            @endforeach



        </div><!--features_items-->
   </div>
 </div>
