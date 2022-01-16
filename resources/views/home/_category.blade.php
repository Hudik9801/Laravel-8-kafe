@php
    $parentCategories= \App\Http\Controllers\HomeController::categoryList()

@endphp
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
            </div>
        </div>
    </div>
</section>

@include('home.home_products')




<!--/category-products-->

