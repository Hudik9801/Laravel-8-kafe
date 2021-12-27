@extends('layouts.home')


@section('title', 'Edit Product')

@section('headerjs')

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

                                    <div class="basic-form">
                                        <form class="form-valide-with-icon needs-validation" action="{{route('user_product_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                                            @csrf
                                            <div class="mb-6">
                                                <label>Category</label>
                                                <select  class="form-control select2"   name="category_id"  style="width: 100%">
                                                    @foreach ($datalist as $rs)
                                                        <option value="{{ $rs->id }}" @if($rs->id == $data->parent_id) selected="selected" @endif >
                                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-6">
                                                <label>Title</label>
                                                <input type="text" name="title" value="{{$data->title}}" class="form-control"   >
                                            </div>
                                            <div class="mb-6">
                                                <label>Keywords</label>
                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control"   >
                                            </div>



                                            <div class="mb-6">
                                                <label>Price</label>
                                                <input type="number" name="price" value="{{$data->price}}" class="form-control">

                                            </div>

                                            <div class="mb-6">
                                                <label>İmage</label>
                                                <input type="file" name="image"  class="form-control">

                                                @if( $data->image )
                                                    <img src="{{ Storage::url($data->image)}}" height="60" alt="">
                                                @endif

                                            </div>


                                            <div class="mb-6">
                                                <label>Detail</label>
                                                <textarea id="detail" type="text" name="detail" class="form-control"></textarea>
                                                <script>
                                                    CKEDITOR.replace( 'detail' );
                                                </script>                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <select name="status" class="default-select  form-control wide" style="width: 100%">
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>False</option>
                                                    <option>True</option>
                                                </select>
                                            </div>

                                            <button type="submit" class="btn me-2 btn-primary">Update Category</button>


                                        </form>
                                    </div>






                                </div>

                            </div>

                        </div>

                    </div>




                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</div>

