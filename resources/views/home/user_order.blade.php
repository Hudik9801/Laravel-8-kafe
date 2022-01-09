@extends('layouts.home')


@section('title','My Orders')





<div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="card col-md-3">
                <ul class="breadcrumb">
                    <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                    <li><a  href="#"><i class="fa fa-home"  ></i>User Orders</a></li>
                    @include('home.usermenu')



                </ul>
            </div>


            <div class="card col-md-9">
                <div class="card-header">
                    <a href="{{route('user_product_add')}}" type="button" class="btn btn-primary me-2" style="width: 200px" id="js-programmatic-enable" enctype="multipart/form-data">Add Product</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width:900px">
                            <thead>
                            <tr>
                                <th>İd</th>
                                <th>TableNo</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                            </thead>

                            <tbody>
                            <div class="card-body">
                                @foreach ($datalist as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->tableno }}</td>
                                        <td>{{ $rs->total }}</td>
                                        <td>{{ $rs->created_at }}</td>
                                        <td>{{ $rs->status }}</td>
                                        <td><a href="{{route('user_order_show',['id'=> $rs->id])}}"><img src="{{asset('assets/admin/img')}}/pencil.png" height="30"></a></td>
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







