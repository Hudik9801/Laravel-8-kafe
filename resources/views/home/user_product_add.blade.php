
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="@yield('viewport')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Hudayberdi Ashyrov">
    <title>Add Product</title>
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


@section('javascript')

    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>



@endsection



<div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 ">
                <div class="login-form"><!--login form-->
                    <ul class="breadcrumb">
                        <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                        <li><a  href="#"><i class="fa fa-home"  ></i>User Profile</a></li>
                        @include('home.usermenu')


                    </ul>

                    <div class="section">
                        <div class="container">
                            <div class="row">




                                <div id="main" class="col-md-10">

                                    <form class="form-valide-with-icon needs-validation" action="{{route('user_product_store')}}" method="post" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="mb-6">
                                            <label>Category</label>
                                            <select type="text" class="form-control select2"   name="category_id"  style="width: 100%">
                                                @foreach ($datalist as $rs)
                                                    <option value="{{ $rs->id }}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-6">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control"   >
                                        </div>
                                        <div class="mb-6">
                                            <label>Keyword</label>
                                            <input type="text" name="keywords" class="form-control"   >
                                        </div>

                                        <div class="mb-6">
                                            <label>İmage</label>
                                            <input type="file" name="image" class="form-control"   >

                                        </div>
                                        <div class="mb-6">
                                            <label>Price</label>
                                            <input type="number" name="price" value="0" class="form-control">

                                        </div>
                                        <div class="mb-6">
                                            <label>Detail</label>
                                            <textarea id="detail" type="text" name="detail" class="form-control"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'detail' );
                                            </script>

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Status</label>
                                            <select name="status" class="default-select  form-control wide" style="width: 100%">
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn me-2 btn-primary">Add Product</button>


                                    </form>






                                </div>

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

