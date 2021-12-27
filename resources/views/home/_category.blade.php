@php
       $parentCategories= \App\Http\Controllers\HomeController::categoryList()

@endphp
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        @foreach($parentCategories as $rs)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse"  href="#{{$rs->title}}">
                                        <span class="badge pull-right"><i class="fa fa-plus">  </i></span>
                                        {{$rs->title}}

                                    </a>
                                </h4>
                            </div>
                            <div id="{{$rs->title}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    @if(count($rs->children))
                                        @include('home.categorytree',['children'=>$rs->children])
                                    @endif
                                </div>

                            </div>
                        </div>

                        @endforeach

                    </div>


                </div>
        </div>
        </div>
    </div>
</section>

@include('home.home_products')




                <!--/category-products-->

