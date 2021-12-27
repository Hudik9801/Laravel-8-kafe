@extends('layouts.home')


@section('title','My Products')





<div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 ">
                <div class="login-form"><!--login form-->
                    <ul class="breadcrumb">
                        <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                        <li><a  href="#"><i class="fa fa-home"  ></i>User Products</a></li>
                        @include('home.usermenu')


                    </ul>

                    <div class="section">
                        <div class="container">
                            <div class="row">




                                <div class="card col-md-10">
                                    <div class="card-header">
                                        <a href="{{route('user_product_add')}}" type="button" class="btn btn-primary me-2" style="width: 200px" id="js-programmatic-enable" enctype="multipart/form-data">Add Product</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example" class="display" style="min-width:900px">
                                                <thead>
                                                <tr>
                                                    <th>İd</th>
                                                    <th>category</th>
                                                    <th>Title</th>
                                                    <th>price</th>
                                                    <th>Status</th>
                                                    <th>İmage</th>
                                                    <th>İmage Gallery</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>


                                                </tr>
                                                </thead>

                                                <tbody>
                                                <div class="card-body">
                                                    @foreach ($datalist as $rs)
                                                        <tr>
                                                            <td>{{ $rs->id }}</td>
                                                            <td>
                                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}

                                                            </td>
                                                            <td>{{ $rs->title }}</td>
                                                            <td>{{ $rs->price }}</td>
                                                            <td>{{ $rs->status }}</td>
                                                            <td>
                                                                @if($rs->image)
                                                                    <img src="{{Storage::url($rs->image)}}" height="50" alt="">
                                                                @endif
                                                            </td>
                                                            <td><a href="{{route('admin_image_add',['product_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')" >
                                                                    <img src="{{asset('assets/admin/img')}}/gallery.png" height="40"></a></td>


                                                            <td><a href="{{route('user_product_edit',['id'=> $rs->id])}}"><img src="{{asset('assets/admin/img')}}/pencil.png" height="30"></a></td>
                                                            <td><a href="{{route('user_product_delete',['id'=> $rs->id])}}" onlick="return confirm('Delete! Are you sure?') "> <img src="{{asset('assets/admin/img')}}/bin.png" height="30"></a></td>
                                                        </tr>
                                                    @endforeach
                                                </div>
                                                </tbody>

                                            </table>
                                        </div>
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

