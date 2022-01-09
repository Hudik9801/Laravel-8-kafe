@extends('layouts.admin')

@section('title', 'Admin Order List')




@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        <section class="container-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Categories</h3>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>

                </div>


            </div>
        </section>



        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Order List</h3>

            </div>

            <div class="card-body">
                <table id="example" class="display" style="min-width:900px">
                    <thead>
                    <tr>
                        <th>İd</th>
                        <th>User</th>
                        <th>Table No</th>
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
                                <td>{{ $rs->user->name }}</td>
                                <td>{{ $rs->tableno }}</td>
                                <td>{{ $rs->total }}</td>
                                <td>{{ $rs->created_at }}</td>
                                <td>{{ $rs->status }}</td>
                                <td>
                                    <a href="{{route('admin_order_show',['id'=> $rs->id])}} " onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                        <img src="{{asset('assets/admin/img')}}/pencil.png" height="30">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </div>
                    </tbody>

                </table>


            </div>

        </div>







        <div class="card-footer">
            <h3 class="card-title">Footer</h3>
        </div>

    </div>
    <!--**********************************
        Content body end
    ***********************************-->



@endsection
