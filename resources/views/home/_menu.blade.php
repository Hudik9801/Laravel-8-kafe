@php
    $slider= \App\Models\Product::all();
@endphp


<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        @php
                            $i=0;
                        @endphp
                        @foreach($slider as $rs)
                            @php
                                $i+=1;
                            @endphp
                            <div class="item @if($i==1)active @endif">
                                <div class="col-sm-6">
                                    <h1>{{$rs->title}}</h1>
                                    <h2>{{$rs->price}}</h2>


                                    <a href="{{route('product',['id'=>$rs->id])}}" type="button" class="btn btn-default get">Tadina Bak</a>
                                </div>   <!--YAAAAAAAAAAAAAAAAAAAAP-->
                                <div class="col-sm-6">
                                    <img src="{{Storage::url($rs->image)}}" class="girl img-responsive" style="height: 500px" style="width: 500px" alt="" />
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
                                            <i>{{$countreview}}</i>

                                        </div>
                                        <a href="#tab2">{{$countreview}} Rewview(s) {{$avgrev}}/Add Review</a>
                                    </div>

                                </div>
                            </div>
                        @endforeach


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


</section><!--/slider-->




